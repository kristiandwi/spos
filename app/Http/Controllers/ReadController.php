<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class ReadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = $request->segment(1);
        $postid = explode('-', $id);
        $xmlPath = Config::get('xmldata.posts');
        $xmlString = $xmlPath.end($postid).'.xml';

        $isExists = get_headers($xmlString);

        if($isExists[0] !== "HTTP/1.1 200 OK") {
            //abort(404);
            $res = Http::get('https://cmsx.solopos.com/api/wp/v2/posts/'.end($postid));
            $data = $res->json();
            //dd($data);
            $cat_list = $data['one_call']['categories_list'][0]['slug'] ?? '';
            // $data = Helper::read_xml($xmlPath, end($postid));

            if(!empty($data['tags'])):
                // get related tag id
                foreach($data['one_call']['tags_list'] as $tag){
                    $tag_id[] = $tag['term_taxonomy_id'];
                }
                $tags = implode(',', $tag_id);             

                foreach($data['one_call']['tags_list'] as $tag){
                    $tag_name[] = $tag['name'];
                }                
            else:
                $tags = '';
                $tag_name = array();
            endif;
            if (is_null($data['one_call']['featured_list'])):
                $file_img = 'https://dev.solopos.com/images/solopos.jpg';
            else:
                $file_img = $data['one_call']['featured_list']['source_url'];
            endif;

            //dd($file_img);
            $img_headers = @get_headers($file_img);
            if($img_headers[0] == 'HTTP/1.1 404 Not Found') {
                $image = 'https://dev.solopos.com/images/solopos.jpg';
            }
            else {
                $image = $file_img;
            }
            
            $avatar_url = $data['one_call']['post_author']['avatar_url'];
            $avatar_headers = @get_headers($avatar_url);
            if($avatar_headers[0] == 'HTTP/1.1 404 Not Found') {
                $avatar = 'https://images.solopos.com/2021/02/avatar-100x100.png';
            }
            else {
                $avatar = $avatar_url;
            }

            $content = [
                'id' => $data['id'],
                'date' => $data['date'],
                'title' => $data['title']['rendered'],
                'summary' => $data['content']['summary'] ?? '',
                'content' => $data['content']['rendered'],
                'slug' => $data['slug'],
                'image' => $image,
                'caption' => $data['one_call']['featured_list']['caption'] ?? 'Solopos Digital Media - Panduan Informasi dan Inspirasi',                
                //'image' => 'https://dev.solopos.com/images/solopos.jpg',
                //'caption' => 'Solopos Digital Media',
                'category' => $cat_list,
                'category_child' => $cat_list,
                'tag' => $tag_name,
                'author' => $data['one_call']['postmeta']['solopos'][0] ?? 'Redaksi Solopos.com',
                'editor' => $data['one_call']['post_author']['display_name'],
                'avatar' => $avatar,
                'editor_url' => '',
            ];
            // properties
            $file = getimagesize($content['image']);
            $width = $file[0];
            $height = $file[1];

            $premium_content = $data['properties']['konten_premium'] ?? '';

            $video = $data['properties']['post_url_video'] ?? '';

            $relatedTags = $tags; 
            //dd($relatedTags);           
            //$breaking_id = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?categories='.$data['categories'][0])->json();

            $breaking_id = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-all');

        } else {            
        
            $xmlObject = simplexml_load_file($xmlString);

            $json = json_encode($xmlObject);
            $phpArray = json_decode($json, true);

            $data = $phpArray['posts'];
            
            // $data = Helper::read_xml($xmlPath, end($postid));

            $premium_content = $data['properties']['konten_premium'] ?? '';

            $video = $data['properties']['post_url_video'] ?? '';

            // get related tag id
            foreach($xmlObject->posts->tags->tag as $tag){
                $tags[] = $tag['id'];
            }
            $relatedTags = implode(',', $tags);

            $file_img = $data['images']['content'];
            $img_headers = @get_headers($file_img);
            if($img_headers[0] == 'HTTP/1.1 404 Not Found') {
                $image = 'https://dev.solopos.com/images/solopos.jpg';
            }
            else {
                $image = $file_img;
            }
            
            $avatar_url = $data['authors']['avatar'];
            $avatar_headers = @get_headers($avatar_url);
            if($avatar_headers[0] == 'HTTP/1.1 404 Not Found') {
                $avatar = 'https://images.solopos.com/2021/02/avatar-100x100.png';
            }
            else {
                $avatar = $avatar_url;
            }

            $content = [
                'id' => $data['properties']['post_id'],
                'date' => $data['created'],
                'title' => $data['content']['title'],
                'summary' => $data['content']['summary'] ?? '',
                'content' => $data['content']['content'],
                'slug' => $data['content']['slug'],
                'image' => $image,
                'caption' => $data['images']['caption'] ?? 'Solopos Digital Media - Panduan Informasi dan Inspirasi.',
                'category' => $data['properties']['category']['parent'],
                'category_child' => $data['properties']['category']['child'],
                'tag' => $data['tags']['tag'],
                'author' => $data['authors']['author'] ?? 'Redaksi Solopos',
                'editor' => $data['authors']['editor'],
                'avatar' => $avatar,
                'editor_url' => $data['authors']['editor_url'] ?? '',
            ];

            $breaking_id = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-'.$content['category']);
        } //end conditional post from

        $file = getimagesize($content['image']);
        $width = $file[0];
        $height = $file[1];
        if($relatedTags == ''):
            $relatedtag = 72325;
            $relatedtitle = 'Info Menarik Untuk Anda';
        else:
            $relatedtag = $relatedTags;
            $relatedtitle = 'Berita Terkait';
        endif;
        //dd($relatedname);
        $regional = array('banyumas', 'blora', 'grobogan', 'magelang', 'kudus', 'pati', 'pemalang', 'salatiga', 'semarang');
        $if_regional = in_array($content['category_child'], $regional);
        $regional_name = $content['category_child'];
        
        if($content['summary'] != array()):
            $summary = $content['summary'];
        else :
            $summary = '';
        endif;

        if($content['author'] != array()):
            $author = $content['author'];
        else :
            $author = 'Redaksi Solopos';
        endif;

        //dd($summary);
        $header = array(
            'is_single' => 'yes',
            'title' => $content['title'],
            'description' => $content['title'].' - '.$summary,
            'link'  => 'https://m.solopos.com/'.$content['slug'].'-'.$content['id'],
            'author' => $author,
            'ringkasan' => $summary,
            'publish_time' => date("Y-m-dTH:i:s+00:00", strtotime($content['date'])),
            'image' => $content['image'],
            'category' => $content['category'],
            'img_width' => $width,
            'img_height' => $height
        );

        // Breaking after reading
        $story = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-story');
        $news = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-news');
        $lifestyle = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-lifestyle');
        $kolom = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-kolom');
        $breakingcat = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-'.$content['category']);
        $jateng = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-jateng');
        $wisata = Helper::read_xml(Config::get('xmldata.topic'), 'wisata-joglosemar');
        $lifestyle = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-lifestyle');
        $premium = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-premium');
        $wisata = Helper::read_xml(Config::get('xmldata.topic'), 'wisata-joglosemar');
		$uksw = Helper::read_xml(Config::get('xmldata.topic'), 'uksw');
        $popular = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-popular');
        $editorchoice = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-editor-choice');
        $related = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$relatedtag.'&per_page=5')->json();
        $breakingcat = $breaking_id;
        $view = 'pages.read';

        //dd($popular);

        $bob = array('Foto Wisata Joglosemar', 'Infografis Wisata Joglosemar', 'Wisata Joglosemar','Badan Otorita Borobudur');
        $tematik = array_intersect($bob, $content['tag']);
        $is_bob = '';
		
		$ukswTag = array('UKSW', 'Prestasi UKSW', 'UKSW Salatiga', 'Foto UKSW Salatiga', 'Prestasi UKSW');
        $tematikuksw = array_intersect($ukswTag, $content['tag']);
        $is_uksw = '';

        if($tematik != array()):
            $is_bob = 'yes';
            $breakingcat = $wisata;
        endif;
		
		if($tematikuksw != array()):
            $is_uksw = 'yes';
            $breakingcat = $uksw;
        endif;

        if($premium_content == 'premium'):
            $view = 'pages.read-premium';
            $breakingcat = $premium;            
        endif;            

        return view($view, ['data' => $data, 'content' => $content, 'header' => $header, 'premium' => $premium, 'popular' => $popular, 'news' => $news, 'kolom' => $kolom, 'lifestyle' => $lifestyle, 'story' => $story, 'editorchoice' => $editorchoice, 'video' => $video, 'wisata' => $wisata, 'uksw' => $uksw, 'breakingcat' => $breakingcat, 'related' => $related, 'relatedtitle' => $relatedtitle, 'is_bob' => $is_bob, 'is_uksw' => $is_uksw, 'if_regional' => $if_regional, 'regional_name' => $regional_name, 'premium_content' => $premium_content]);
    }

}

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

        // dd($xmlString);

        $isExists = get_headers($xmlString);

        // dd($isExists[0]);

        if($isExists[0] !== "HTTP/1.1 200 OK") {
            // abort(404);
            $res = Http::get('https://cmsx.solopos.com/api/wp/v2/posts/'.end($postid));
            $data = $res->json();

            $parentCategory = Http::get('https://cmsx.solopos.com/api/wp/v2/categories/'.$data['one_call']['categories_list'][0]['category_parent'])->json();
            
            // dd($parentCategory['slug']);

            if(empty($parentCategory)) {
                $category = $data['one_call']['categories_list'][0]['name'];
            } else {
                $category = $parentCategory['slug'];
            }

            //dd($category);

            $content = [
                'id' => $data['id'],
                'date' => $data['date'],
                'title' => $data['title']['rendered'],
                'summary' => $data['content']['summary'] ?? '',
                'content' => $data['content']['rendered'],
                'slug' => $data['slug'],
                'image' => $data['one_call']['featured_list']['source_url'],
                'caption' => $data['one_call']['featured_list']['caption'],
                'category' => $category,
                'tag' => $data['one_call']['tags_list'],
                'author' => $data['one_call']['postmeta']['solopos'][0] ?? 'Redaksi Solopos.com',
                'editor' => $data['one_call']['post_author']['display_name'],
                'avatar' => $data['one_call']['post_author']['avatar_url'],
            ];

            // dd($content['tag'][0]['term_id']);

            // $data = Helper::read_xml($xmlPath, end($postid));

            // properties
            $file = getimagesize($content['image']);
            $width = $file[0];
            $height = $file[1];

            $premium_content = $data['properties']['konten_premium'] ?? '';

            $video = $data['properties']['post_url_video'] ?? '';

            $first_tag_id = $content['tag'][0]['term_id'];
        } else {
            $xmlObject = simplexml_load_file($xmlString);

            $json = json_encode($xmlObject);
            $phpArray = json_decode($json, true);

            // dd($phpArray);
            $data = $phpArray['posts'];

            $content = [
                'id' => $data['properties']['post_id'],
                'date' => $data['created'],
                'title' => $data['content']['title'],
                'summary' => $data['content']['summary'],
                'content' => $data['content']['content'],
                'slug' => $data['content']['slug'],
                'image' => $data['images']['content'],
                'caption' => $data['images']['caption'],
                'category' => $data['properties']['category']['parent'],
                'tag' => $data['tags']['tag'],
                'author' => $data['authors']['author'],
                'editor' => $data['authors']['editor'],
                'avatar' => $data['authors']['avatar'],
            ];

            // dd($content['tag']);

            // $data = Helper::read_xml($xmlPath, end($postid));

            // properties
            $file = getimagesize($data['images']['content']);
            $width = $file[0];
            $height = $file[1];

            $premium_content = $data['properties']['konten_premium'] ?? '';

            $video = $data['properties']['post_url_video'] ?? '';

            $first_tag_id = $xmlObject->posts->tags->tag[0]['id'];
        }

        // dd($video);

        // dd($premium_content);

        // header meta
        $header = array(
            'is_single' => 'yes',
            'title' => $content['title'],
            'description' => $content['title'].' - '.$content['summary'],
            'link'  => 'https://m.solopos.com/'.$content['slug'].'-'.$content['id'],
            'author' => $content['author'],
            'publish_time' => date("Y-m-dTH:i:s+00:00", strtotime($content['date'])),
            'image' => $content['image'],
            'category' => $content['category'],
            'img_width' => $width,
            'img_height' => $height
        );

        // dd($content['category']);

        // Breaking after reading or load xml data
        $story = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-story');
        $news = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-news');
        $lifestyle = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-lifestyle');
        $kolom = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-kolom');
        $premium = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-premium');
        $popular = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-popular');
        $editorchoice = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-editor-choice');
        $breakingcat = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-'.$content['category']);
        $related = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$first_tag_id.'&per_page=5')->json();

        // default view
        $view = 'pages.read';

        if($premium_content == 'premium'):
            $view = 'pages.read-premium';
            $breakingcat = $premium;
        endif;

        return view($view, ['story' => $story, 'data' => $data, 'header' => $header, 'content' => $content, 'news' => $news, 'lifestyle' => $lifestyle, 'kolom' => $kolom, 'premium' => $premium, 'popular' => $popular, 'editorchoice' => $editorchoice, 'video' => $video, 'breakingcat' => $breakingcat, 'related' => $related]);
    }

}

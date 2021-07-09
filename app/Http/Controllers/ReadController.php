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
            abort(404);
        }

        $xmlObject = simplexml_load_file($xmlString);

        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        // dd($phpArray);
        $data = $phpArray['posts'];

        // $data = Helper::read_xml($xmlPath, end($postid));

        // properties
        $file = getimagesize($data['images']['content']);
        $width = $file[0];
        $height = $file[1];

        $premium_content = $data['properties']['konten_premium'] ?? '';

        $video = $data['properties']['post_url_video'] ?? '';

        $first_tag_id = $xmlObject->posts->tags->tag[0]['id'];

        // dd($video);

        // dd($premium_content);

        // header meta
        $header = array(
            'is_single' => 'yes',
            'title' => $data['content']['title'],
            'description' => $data['content']['title'].' - '.$data['content']['summary'],
            'link'  => 'https://m.solopos.com/'.$data['content']['slug'].'-'.$data['properties']['post_id'],
            'author' => $data['authors']['author'],
            'publish_time' => date("Y-m-dTH:i:s+00:00", strtotime($data['created'])),
            'image' => $data['images']['content'],
            'category' => $data['properties']['category']['parent'],
            'img_width' => $width,
            'img_height' => $height
        );

        // Breaking after reading or load xml data
        $story = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-story');
        $news = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-news');
        $lifestyle = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-lifestyle');
        $kolom = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-kolom');
        $premium = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-premium');
        $popular = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-popular');
        $editorchoice = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-editor-choice');
        $breakingcat = Helper::read_xml(Config::get('xmldata.breaking'), 'breaking-'.$data['properties']['category']['parent']);
        $related = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$first_tag_id.'&per_page=5')->json();

        // default view
        $view = 'pages.read';

        if($premium_content == 'premium'):
            $view = 'pages.read-premium';
            $breakingcat = $premium;
        endif;

        return view($view, ['story' => $story, 'data' => $data, 'header' => $header, 'news' => $news, 'lifestyle' => $lifestyle, 'kolom' => $kolom, 'premium' => $premium, 'popular' => $popular, 'editorchoice' => $editorchoice, 'video' => $video, 'breakingcat' => $breakingcat, 'related' => $related]);
    }

}

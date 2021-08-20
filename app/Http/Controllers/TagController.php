<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($slug)
    {
        
        $xmlPath = Config::get('xmldata.breaking');
        $res = Http::get('https://cmsx.solopos.com/api/wp/v2/tags?slug='.$slug);

        $tag = $res->json();
        
        if(empty($tag[0])) {
            abort(404);
        }

        $tagId = $tag[0]['id'];
        $tagName = $tag[0]['name'];
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$tagId.'&per_page=50');
        $data = Http::get('https://cmsx.solopos.com/api/breaking/tag/posts?tags='.$tagId);
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/search?search='.$tagName.'&per_page=50&_embed');
        $video = Helper::read_xml($xmlPath, 'breaking-videos');

        $tags = $data->json();
        //dd($tags);
        // foreach($tags as $e){
        //     $tagList[] = $e['_embedded']['self'][0];
        // }    
        //dd($tags);

        $header = array(
            'title' => 'Arsip Berita '.$tagName.' terbaru, Berita '.$tagName.' hari ini',
            'name' => $tagName,
        );

        // return $tags;
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        $widget = Helper::read_xml(Config::get('xmldata.topic'), 'Ekspedisi-Energi-2021');


        return view('pages.tag', ['story' => $story, 'tags' => $tags, 'header' => $header, 'popular' => $popular, 'news' => $news, 'lifestyle' => $lifestyle, 'widget' => $widget, 'kolom' => $kolom]);
    }
}

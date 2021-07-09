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
        
        $res = Http::get('https://cmsx.solopos.com/api/wp/v2/tags?slug='.$slug);

        $tag = $res->json();

        if(empty($tag[0])) {
            abort(404);
        }

        $tagId = $tag[0]['id'];
        // $tagLink = $tag['0']['link'];

        $data = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$tagId.'&per_page=50');

        // return $tag;

        // return $data->json();

        //dd($response->json());

        $tags = $data->json();

        $header = array(
            'title' => 'Arsip Berita #'.$slug,
        );

        // return $tags;
        $xmlPath = Config::get('xmldata.breaking');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');

        return view('pages.tag', ['tags' => $tags, 'header' => $header, 'popular' => $popular, 'news' => $news, 'lifestyle' => $lifestyle, 'kolom' => $kolom]);
    }
}

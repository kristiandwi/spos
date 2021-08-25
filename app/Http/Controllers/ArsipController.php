<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

class ArsipController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Redirect when on mobile device
        // if(Helper::mobile_detect()) {
        //     return redirect()->away(Config::get('app.mobile_url').'/arsip');
        // }
        // $uri = $request->thn;
        //dd($uri);
        $xmlPath = Config::get('xmldata.breaking');
        $xmlPath2 = Config::get('xmldata.topic');
        $now = Carbon::now();
        // $y = $request->thn;
        // if(empty($y)) {
        //     $thn = $now->year;
        //     $bln = $now->month;
        //     $tgl = $now->day;
        // }else{
        //     $thn = $request->segment(2);
        //     $bln = $request->segment(3);
        //     $tgl = $request->segment(4);            
        // }   
        //dd($y);
        
        $tgl = $request->tgl ?? $now->day;
        $bln = $request->bln ?? $now->month;
        $thn = $request->thn ?? $now->year;

        // $tagId = $tag[0]['id'];
        // $tagName = $tag[0]['name'];
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$tagId.'&per_page=50');
        //$data = Http::get('https://cmsx.solopos.com/api/breaking/tag/posts?tags='.$tagId);
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/search?search='.$tagName.'&per_page=50&_embed');
        $res = Http::get('https://cms.solopos.com/api/breaking/arsip/posts?year='.$thn.'&month='.$bln.'&day='.$tgl);
  
        $video = Helper::read_xml($xmlPath, 'breaking-videos');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        $jateng = Helper::read_xml($xmlPath, 'breaking-jateng');
        $otomotif = Helper::read_xml($xmlPath, 'breaking-otomotif');
        $espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        $bola = Helper::read_xml($xmlPath, 'breaking-bola');
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $widget = Helper::read_xml($xmlPath2, 'Ekspedisi-Energi-2021');

        $data = $res->json();

        if(empty($data)) {
            abort('404');
        }

        // dd($data);

        $catid = $data[0]['categories'][0] ?? 'News';
        //dd($catid);
        //dd($data);
        // foreach($tags as $e){
        //     $tagList[] = $e['_embedded']['self'][0];
        // }    
        //dd($tagList);
        $header = array(
            'title' => 'Arsip Berita Solopos.com',
        );

        //return $tags;

        return view('pages.arsip', ['breaking' => $data, 'thn'=>$thn,'bln'=>$bln,'tgl'=>$tgl, 'popular' => $popular, 'widget' => $widget, 'news' => $news, 'story' => $story, 'video' => $video, 'bola' => $bola, 'bisnis' => $bisnis, 'lifestyle' => $lifestyle, 'kolom' => $kolom, 'jateng' => $jateng, 'otomotif' => $otomotif, 'espospedia' => $espospedia, 'header' => $header]);
    } 
}

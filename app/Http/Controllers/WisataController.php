<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class WisataController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $slug = $request->segment(1);
        $subPage = $request->segment(2);

        $xmlPath = Config::get('xmldata.topic');
        $xmlPathBreak = Config::get('xmldata.breaking');
        
        $headline = Helper::read_xml($xmlPath, 'wisata-joglosemar');
        $artikel = Helper::read_xml($xmlPath, 'wisata-joglosemar');
        $grafis = Helper::read_xml($xmlPath, 'infografis-wisata-joglosemar');
        $foto = Helper::read_xml($xmlPath, 'foto-wisata-joglosemar');
        $story = Helper::read_xml($xmlPathBreak, 'breaking-story');
        $jateng = Helper::read_xml($xmlPathBreak, 'breaking-jateng');
        $popular = Helper::read_xml($xmlPathBreak, 'breaking-popular');

        $xmlObject = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?channel_id=UCfdq2dv6zodZqqWpvc3U-MA');
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);
        //dd($phpArray);
        $video = $phpArray['entry']; 
        //dd($yid);

        $is_bob = 'yes';

        $view = 'pages.wisata';
        $title = 'Wisata Joglosemar - BOB Borobudur - Solopos.com';

        if($slug == 'wisata-joglosemar') {
            if ($subPage == 'foto') {
                $title = 'Foto Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-foto';
            }
            if( $subPage == 'artikel' ) {
                $title = 'Berita Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-artikel';
            }
            if( $subPage == 'grafis' ) {
                $title = 'Grafis Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-grafis';
            }
            if( $subPage == 'video' ) {
                $title = 'Video Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-video';
            }
            if( $subPage == 'kontak' ) {
                $title = 'Kontak Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-kontak';
            }
           
        } else {
            abort(404);
        }

        $header = array(
            'title' => $title,
        );

        return view($view, ['artikel' => $artikel, 'headline' => $headline, 'grafis' => $grafis, 'foto' => $foto, 'video' => $video, 'is_bob' => $is_bob, 'story' =>$story, 'jateng' => $jateng, 'popular' => $popular, 'header' => $header]);
        
    }
}

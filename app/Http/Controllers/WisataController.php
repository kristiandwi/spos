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
        $subSlug = $request->segment(2);

        // Redirect when on mobile device
        if(Helper::mobile_detect() && !empty($subSlug)) {
            return redirect()->away(Config::get('app.mobile_url').'/'.$slug.'/'.$subSlug);
        } else {
            return redirect()->away(Config::get('app.mobile_url').'/'.$slug);
        }
        
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
            if ($subSlug == 'foto') {
                $title = 'Foto Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-foto';
            }
            if( $subSlug == 'artikel' ) {
                $title = 'Kumpulan Artikel Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-artikel';
            }
            if( $subSlug == 'grafis' ) {
                $title = 'Grafis Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-grafis';
            }
            if( $subSlug == 'video' ) {
                $title = 'Video Wisata Joglosemar - Solopos.com';
                $view = 'pages.wisata-video';
            }
            if( $subSlug == 'kontak' ) {
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

<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UbahlakuController extends Controller
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

        $xmlPath = Config::get('xmldata.topic');
        $xmlPathBreak = Config::get('xmldata.breaking');
        
        $headline = Helper::read_xml($xmlPath, 'perilaku-baru');
        $berita = Helper::read_xml($xmlPath, 'perilaku-baru');
        $prestasi = Helper::read_xml($xmlPath, 'perilaku-baru');
        $foto = Helper::read_xml($xmlPath, 'perilaku-baru');
        $cekfakta = Helper::read_xml($xmlPath, 'cek-fakta-corona');
        $popular = Helper::read_xml($xmlPathBreak, 'breaking-popular');
        $jateng = Helper::read_xml($xmlPathBreak, 'breaking-jateng');
        $story = Helper::read_xml($xmlPathBreak, 'breaking-story');

        $xmlObject = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?playlist_id=PLMNxf31imllG4UzyrB8vSakTZ980IJV8G');
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);
        //dd($phpArray);
        $video = $phpArray['entry']; 

        
        //dd($yid);

        $is_ubah = 'yes';

        $view = 'pages.ubahlaku';
        $title = 'Ubah Laku #SetopPenularanCovid19 - Solopos.com';

        if($slug == 'ubahlaku') {
            if ($subSlug == 'galeri') {
                $title = 'Foto - Solopos.com';
                $view = 'pages.ubahlaku-galeri';
            }
            if( $subSlug == 'news' ) {
                $title = 'Berita - Solopos.com';
                $view = 'pages.ubahlaku-berita';
            }
            if( $subSlug == 'info-grafis' ) {
                $title = 'Info Grafis - Solopos.com';
                $view = 'pages.ubahlaku-infografis';
            }
            if( $subSlug == 'cek-fakta' ) {
                $title = 'Cek Fakta - Solopos.com';
                $view = 'pages.ubahlaku-cekfakta';
            }
            if( $subSlug == 'video' ) {
                $title = 'Video - Solopos.com';
                $view = 'pages.ubahlaku-video';
            }
            if( $subSlug == 'data' ) {
                $title = 'Data - Solopos.com';
                $view = 'pages.ubahlaku-data';
            }
            if( $subSlug == 'faq' ) {
                $title = 'Tanya Jawab Tentang ';
                $view = 'pages.ubahlaku-faq';
            }             
        } else {
            abort(404);
        }

        $header = array(
            'title' => $title,
        );

        return view($view, ['berita' => $berita, 'headline' => $headline, 'prestasi' => $prestasi, 'foto' => $foto, 'video' => $video, 'cekfakta' => $cekfakta, 'is_ubah' => $is_ubah, 'popular' => $popular, 'jateng' => $jateng, 'story' => $story, 'header' => $header]);
        
    }
}

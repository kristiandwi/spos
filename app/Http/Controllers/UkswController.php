<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UkswController extends Controller
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
        
        $headline = Helper::read_xml($xmlPath, 'uksw');
        $berita = Helper::read_xml($xmlPath, 'uksw');
        $prestasi = Helper::read_xml($xmlPath, 'prestasi-uksw');
        $foto = Helper::read_xml($xmlPath, 'foto-uksw-salatiga');
        $tanyajawab = Helper::read_xml($xmlPath, 'uksw');
        $popular = Helper::read_xml($xmlPathBreak, 'breaking-popular');
        $jateng = Helper::read_xml($xmlPathBreak, 'breaking-jateng');
        $story = Helper::read_xml($xmlPathBreak, 'breaking-story');
        $widget = Helper::read_xml($xmlPath, 'Ekspedisi-Energi-2021');

        $xmlObject = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?channel_id=UCSNKgXlbQ7x0dMQ0UsPi3gw');
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);
        //dd($phpArray);
        $video = $phpArray['entry']; 
        //dd($yid);

        $is_uksw = 'yes';

        $view = 'pages.uksw';
        $title = 'UKSW Salatiga - Solopos.com';

        if($slug == 'uksw') {
            if ($subSlug == 'foto') {
                $title = 'Foto UKSW Salatiga - Solopos.com';
                $view = 'pages.uksw-foto';
            }
            if( $subSlug == 'berita' ) {
                $title = 'Berita UKSW Salatiga - Solopos.com';
                $view = 'pages.uksw-berita';
            }
            if( $subSlug == 'prestasi' ) {
                $title = 'Prestasi UKSW Salatiga - Solopos.com';
                $view = 'pages.uksw-prestasi';
            }
            if( $subSlug == 'video' ) {
                $title = 'Video UKSW Salatiga - Solopos.com';
                $view = 'pages.uksw-video';
            }
            if( $subSlug == 'kontak' ) {
                $title = 'Kontak UKSW Salatiga - Solopos.com';
                $view = 'pages.uksw-kontak';
            }
            if( $subSlug == 'tanya-jawab' ) {
                $title = 'Tanya Jawab Tentang UKSW Salatiga';
                $view = 'pages.uksw-faq';
            }             
        } else {
            abort(404);
        }

        $header = array(
            'title' => $title,
        );

        return view($view, ['berita' => $berita, 'headline' => $headline, 'prestasi' => $prestasi, 'foto' => $foto, 'video' => $video, 'tanya-jawab' => $tanyajawab, 'is_uksw' => $is_uksw, 'popular' => $popular, 'jateng' => $jateng, 'widget' => $widget, 'story' => $story, 'header' => $header]);
        
    }
}

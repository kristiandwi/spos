<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EspospediaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $xmlPath = Config::get('xmldata.breaking');
        
        $espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');

        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $editorchoice = Helper::read_xml($xmlPath, 'breaking-editor-choice');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        $espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        $jateng = Helper::read_xml($xmlPath, 'breaking-jateng');
        $jatim = Helper::read_xml($xmlPath, 'breaking-jatim');
        $jogja = Helper::read_xml($xmlPath, 'breaking-jogja');
        $otomotif = Helper::read_xml($xmlPath, 'breaking-otomotif');
        $espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        $video = Helper::read_xml($xmlPath, 'breaking-video');
        $bola = Helper::read_xml($xmlPath, 'breaking-bola');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $story = Helper::read_xml($xmlPath, 'breaking-story');

        $xmlPath2 = Config::get('xmldata.topic');
        $widget = Helper::read_xml($xmlPath2, 'Ekspedisi-Energi-2021');

        $header = [
            'title' => 'Espospedia',
        ];

        return view('pages.archive', ['story' => $story, 'data' => $espospedia, 'header' => $header, 'popular' => $popular, 'editorchoice' => $editorchoice, 'news' => $news, 'bola' => $bola, 'lifestyle' => $lifestyle, 'bisnis' => $bisnis, 'kolom' => $kolom, 'widget' => $widget, 'espospedia' => $espospedia, 'video' => $video, 'jateng' => $jateng, 'jatim' => $jatim, 'jogja' => $jogja, 'otomotif' => $otomotif]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PremiumController extends Controller
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
        
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $headline = Helper::read_xml($xmlPath, 'breaking-headline');
        $breaking = Helper::read_xml($xmlPath, 'breaking-all');
        $premium = Helper::read_xml($xmlPath, 'breaking-premium');
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

        $header = array(
            'title' => 'Espos Premium',
        );

        return view('pages.premium', ['story' => $story, 'premium' => $premium, 'popular' => $popular,  'kolom' => $kolom, 'header' => $header, 'news' => $news, 'lifestyle' => $lifestyle]);
    }
}

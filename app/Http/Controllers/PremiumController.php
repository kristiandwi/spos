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
        $premium = Helper::read_xml($xmlPath, 'breaking-premium');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');

        $header = array(
            'title' => 'Espos Premium',
        );

        return view('pages.premium', ['story' => $story, 'premium' => $premium, 'popular' => $popular,  'kolom' => $kolom, 'header' => $header, 'news' => $news, 'lifestyle' => $lifestyle]);
    }
}

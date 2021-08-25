<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CekFaktaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // // Redirect when on mobile device
        // if(Helper::mobile_detect()) {
        //     return redirect()->away(Config::get('app.mobile_url').'/cekfakta');
        // }

        $xmlPath = Config::get('xmldata.breaking');
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $cekfakta = Helper::read_xml($xmlPath, 'breaking-cekfakta');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');        
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');        
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        
        $header = [
            'title' => 'Cek Fakta',
        ];

        return view('pages.archive', ['story' => $story, 'data' => $cekfakta, 'header' => $header, 'popular' => $popular, 'news' => $news, 'lifestyle' => $lifestyle, 'kolom' => $kolom]);
    }
}

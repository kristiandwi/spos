<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TerpopulerController extends Controller
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
        
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');

        $header = array(
            'title' => 'Solopos Trending',
        );

        return view('pages.popular', ['popular' => $popular, 'header' => $header]);
    }
}

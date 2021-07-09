<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class VideoController extends Controller
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
        
        $video = Helper::read_xml($xmlPath, 'breaking-video');

        $header = [
            'title' => 'Video Solopos',
        ];

        return view('pages.video', ['video' => $video, 'header' => $header]);
    }
}

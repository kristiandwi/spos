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
        // Redirect when on mobile device
        if(Helper::mobile_detect()) {
            return redirect()->away(Config::get('app.mobile_url').'/videos');
        }

        $xmlPath = Config::get('xmldata.breaking');
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $video = Helper::read_xml($xmlPath, 'breaking-video');

        // dd($video);

        $header = [
            'title' => 'Berita Video Solopos.com',
        ];

        return view('pages.video', ['story' => $story, 'video' => $video, 'header' => $header]);
    }
}

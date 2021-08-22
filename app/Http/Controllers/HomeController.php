<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use App\Helpers\Helper;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $amp = $request->segment(1); // AMP slug on 2nd segment URL
        
        $xmlPath = Config::get('xmldata.breaking');
        
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
        //$espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        $video = Helper::read_xml($xmlPath, 'breaking-video');
        $bola = Helper::read_xml($xmlPath, 'breaking-bola');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');

        $story = Helper::read_xml($xmlPath, 'breaking-story');

        $xmlPath2 = Config::get('xmldata.topic');
        $widget = Helper::read_xml($xmlPath2, 'Ekspedisi-Energi-2021');

        // dd($breaking);
        $view = 'pages.home';

        $header = [
            'title' => 'Solopos.com - Panduan Informasi dan Inspirasi',
        ];

        if(!empty($amp)) {
            $view = 'pages.amp-home';
        }

        return view($view, ['story' => $story, 'headline' => $headline, 'breaking' => $breaking, 'premium' => $premium, 'popular' => $popular, 'editorchoice' => $editorchoice, 'kolom' => $kolom, 'espospedia' => $espospedia, 'jateng' => $jateng, 'jatim' => $jatim, 'jogja' => $jogja, 'header' => $header, 'otomotif' => $otomotif, 'espospedia' => $espospedia, 'video' => $video, 'bola' => $bola, 'news' => $news, 'bisnis' => $bisnis, 'widget' => $widget, 'lifestyle' => $lifestyle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postid = explode('-', $id);
        $xmlPath = Config::get('xmldata.posts');
        $xmlString = $xmlPath.end($postid).'.xml';
        $xmlObject = simplexml_load_file($xmlString);

        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        // dd($phpArray);
        $data = $phpArray['posts'];

        return view('pages.read', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

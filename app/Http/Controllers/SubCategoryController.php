<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SubCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $listCat = array('news', 'soloraya', 'lifestyle', 'jatim', 'otomotif', 'entertainment', 'bisnis', 'sport', 'jateng', 'jogja', 'teknologi');
        $listSubCat = array('pendidikan', 'nasional', 'internasional', 'solo', 'sukoharjo', 'boyolali', 'klaten', 'sragen', 'karanganyar', 'wonogiri', 'bola', 'arena', 'leisure', 'viral', 'semarang', 'magelang', 'kudus', 'grobogan', 'pemalang', 'salatiga', 'blora', 'pati', 'banyumas', 'bantul', 'gunungkidul', 'kota-jogja', 'kulonprogo', 'sleman', 'artis', 'hiburan');
        $cat = $request->segment(1);
        $subcat = $request->segment(2);
        
        if(!in_array($cat, $listCat)) {
            abort(404);
        }

        if(!in_array($subcat, $listSubCat)) {
            abort(404);
        }

        //dd($cat.'>'.$subcat);
        
        $xmlPath = Config::get('xmldata.breaking');
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $headline = Helper::read_xml($xmlPath, 'breaking-headline');
        $breaking = Helper::read_xml($xmlPath, 'breaking-all');
        $breakingcat = Helper::read_xml($xmlPath, 'breaking-'.$cat);
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
            'title' => $cat,
        );

        return view('pages.subcategory', ['story' => $story, 'category' => $cat, 'subcategory' => $subcat, 'headline' => $headline, 'breaking' => $breaking, 'breakingcat' => $breakingcat, 'premium' => $premium, 'popular' => $popular, 'editorchoice' => $editorchoice, 'news' => $news, 'bola' => $bola, 'lifestyle' => $lifestyle, 'bisnis' => $bisnis, 'kolom' => $kolom, 'espospedia' => $espospedia, 'video' => $video, 'jateng' => $jateng, 'jatim' => $jatim, 'jogja' => $jogja, 'otomotif' => $otomotif, 'header' => $header]);
    }
}

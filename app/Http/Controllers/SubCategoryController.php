<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

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
        $amp = $request->segment(3); // AMP slug on 2nd segment URL
        
        $listCat = array('news', 'soloraya', 'lifestyle', 'jatim', 'otomotif', 'entertainment', 'bisnis', 'sport', 'jateng', 'jogja', 'teknologi');
        $listSubCat = array('pendidikan', 'nasional', 'internasional', 'solo', 'sukoharjo', 'boyolali', 'klaten', 'sragen', 'karanganyar', 'wonogiri', 'bola', 'arena', 'leisure', 'viral', 'semarang', 'magelang', 'kudus', 'grobogan', 'pemalang', 'salatiga', 'blora', 'pati', 'banyumas', 'bantul', 'gunungkidul', 'kota-jogja', 'kulonprogo', 'sleman', 'artis', 'hiburan');
        $cat = $request->segment(1);
        $subcat = $request->segment(2);

        $res = Http::get('https://cms.solopos.com/api/wp/v2/categories?slug='.$subcat);
        $data = $res->json();
        $catId = $data[0]['id'];
        //$item = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?categories='.$catId.'&per_page=50');

        $item = Http::get('https://cms.solopos.com/api/breaking/posts?category='.$catId);

        $breaking = $item->json();
        
        if(!in_array($cat, $listCat)) {
            abort(404);
        }

        if(!in_array($subcat, $listSubCat)) {
            abort(404);
        }

        // Redirect when on mobile device
        if(Helper::mobile_detect()) {
            return redirect()->away(Config::get('app.mobile_url').'/'.$subcat);
        }

        //dd($cat.'>'.$subcat);
        $regional = array('banyumas', 'blora', 'grobogan', 'magelang', 'kudus', 'pati', 'pemalang', 'salatiga', 'semarang');
        $if_regional = in_array($subcat, $regional);
        $regional_name = $subcat;

        
        $xmlPath = Config::get('xmldata.breaking');
        $story = Helper::read_xml($xmlPath, 'breaking-story');
        //$headline = Helper::read_xml($xmlPath, 'breaking-headline');
        //$breaking = Helper::read_xml($xmlPath, 'breaking-all');
        //$breakingcat = Helper::read_xml($xmlPath, 'breaking-'.$cat);
        //$premium = Helper::read_xml($xmlPath, 'breaking-premium');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        //$editorchoice = Helper::read_xml($xmlPath, 'breaking-editor-choice');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        //$espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        //$jateng = Helper::read_xml($xmlPath, 'breaking-jateng');
        //$jatim = Helper::read_xml($xmlPath, 'breaking-jatim');
        //$jogja = Helper::read_xml($xmlPath, 'breaking-jogja');
        //$otomotif = Helper::read_xml($xmlPath, 'breaking-otomotif');
        //$espospedia = Helper::read_xml($xmlPath, 'breaking-espospedia');
        $video = Helper::read_xml($xmlPath, 'breaking-videos');
        //$bola = Helper::read_xml($xmlPath, 'breaking-bola');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $widget = Helper::read_xml(Config::get('xmldata.topic'), 'Ekspedisi-Energi-2021');


        $header = array(
            'title' => 'Berita '.$subcat.' terbaru, Berita '.$subcat.' terkini hari ini, Info '.$subcat.' terbaru',
        );

        $view = 'pages.subcategory';

        if(!empty($amp)) {
            $view = 'pages.amp-subcategory';
        }

        return view($view, ['story' => $story, 'category' => $cat, 'subcategory' => $subcat,  'breaking' => $breaking, 'breakingcat' => $breaking, 'popular' => $popular,  'news' => $news,  'lifestyle' => $lifestyle, 'bisnis' => $bisnis, 'widget' => $widget, 'kolom' => $kolom, 'video' => $video, 'header' => $header]);
    }
}

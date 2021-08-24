<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $list_cat = array('news', 'soloraya', 'lifestyle', 'jatim', 'otomotif', 'entertainment', 'bisnis', 'sport', 'jateng', 'jogja', 'teknologi', 'video', 'writing-contest', 'loker','cekfakta','jagad-jawa','foto','videos','espospedia');
        $cat = $request->segment(1);
        $amp = $request->segment(2); // AMP slug on 2nd segment URL
        
        if(!in_array($cat, $list_cat)) {
            abort(404);
        }

        // Redirect when on mobile device
        if(Helper::mobile_detect()) {
            return redirect()->away(Config::get('app.mobile_url').'/'.$cat);
        }
        
        $xmlPath = Config::get('xmldata.breaking');
        $xmlPath2 = Config::get('xmldata.topic');
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
        $video = Helper::read_xml($xmlPath, 'breaking-videos');
        $bola = Helper::read_xml($xmlPath, 'breaking-sport');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');
        $uksw = Helper::read_xml($xmlPath2, 'uksw');
        $widget = Helper::read_xml($xmlPath2, 'Ekspedisi-Energi-2021');
        $view = 'pages.category';


        $header = array(
            'title' => 'Berita ' .$cat. ' terbaru, Berita ' .$cat. ' hari ini, Info ' .$cat.' terkini',
        );

        if(!empty($amp)) {
            $view = 'pages.amp-category';
        }

        return view($view, ['story' => $story, 'category' => $cat, 'headline' => $headline, 'breaking' => $breaking, 'breakingcat' => $breakingcat, 'premium' => $premium, 'popular' => $popular, 'editorchoice' => $editorchoice, 'news' => $news, 'bola' => $bola, 'lifestyle' => $lifestyle, 'bisnis' => $bisnis, 'kolom' => $kolom, 'espospedia' => $espospedia, 'video' => $video, 'jateng' => $jateng, 'jatim' => $jatim, 'uksw' => $uksw, 'widget' => $widget, 'jogja' => $jogja, 'otomotif' => $otomotif, 'header' => $header]);
    }
}

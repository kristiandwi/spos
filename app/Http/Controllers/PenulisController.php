<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PenulisController extends Controller
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
            return redirect()->away(Config::get('app.mobile_url').'/author/'.$request->segment(2));
        }

        
        $xmlPath = Config::get('xmldata.breaking');
        $author = $request->segment(2);
        //dd($author);
        $res = Http::get('https://cmsx.solopos.com/api/wp/v2/users?slug='.$author);

        $user = $res->json();
        //dd($user);
        if(empty($user[0])) {
            abort(404);
        }

        $userId = $user[0]['id'];
        $userName = $user[0]['name'];
        $userDesc = $user[0]['description'];
        $userUrl = $user[0]['url'];
        $userAvatar = $user[0]['avatar_urls'][96];
        //dd($userAvatar);
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/posts?tags='.$tagId.'&per_page=50');
        $data = Http::get('https://cmsx.solopos.com/api/breaking/author/posts?author='.$userId);
        //$data = Http::get('https://cmsx.solopos.com/api/wp/v2/search?search='.$tagName.'&per_page=50&_embed');
        $video = Helper::read_xml($xmlPath, 'breaking-videos');

        $users = $data->json();
        //dd($users);
        // foreach($tags as $e){
        //     $tagList[] = $e['_embedded']['self'][0];
        // }    
        //dd($tagList);
        if($userDesc == ''):
            $deskripsi = 'Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.';
        else:
            $deskripsi = $userDesc;
        endif;

        $header = array(
            'title' => 'Arsip Berita '.$userName.' terbaru, Berita '.$userName.' hari ini',
            'name' => $userName,
            'deskripsi' => $deskripsi,
            'avatar' => $userAvatar,
            'website' => $userUrl,
        );

        $story = Helper::read_xml($xmlPath, 'breaking-story');
        $popular = Helper::read_xml($xmlPath, 'breaking-popular');
        $kolom = Helper::read_xml($xmlPath, 'breaking-kolom');
        $news = Helper::read_xml($xmlPath, 'breaking-news');
        $bisnis = Helper::read_xml($xmlPath, 'breaking-bisnis');
        $lifestyle = Helper::read_xml($xmlPath, 'breaking-lifestyle');

        $xmlPath2 = Config::get('xmldata.topic');
        $widget = Helper::read_xml($xmlPath2, 'Ekspedisi-Energi-2021');

        //return $tags;

        return view('pages.penulis', ['breaking' => $users, 'author' => $author, 'story' => $story, 'popular' => $popular, 'kolom' => $kolom, 'news' => $news, 'bisnis' => $bisnis, 'lifestyle' => $lifestyle, 'video' => $video, 'widget' => $widget, 'header' => $header]);
    }
}

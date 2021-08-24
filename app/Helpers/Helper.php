<?php

namespace App\Helpers;
use Illuminate\Support\Carbon;
use Jenssegers\Agent\Agent;

class Helper {
    // Parsing XML data
    public static function read_xml($path, $filename) {
        $xmlString = $path.$filename.'.xml';
        $xmlObject = simplexml_load_file($xmlString);

        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        // dd($phpArray);
        $data = $phpArray['post'];

        return $data;
    }

    public static function time_ago($date) {
        return Carbon::parse($date)->diffForhumans();
    }

    public static function indo_datetime($date) {
        return Carbon::parse($date)->format('d F Y H:i:s');
    }

    public static function test_function() {
        return "hello world";
    }

    public static function ampify($html='') {

        # Replace img, audio, and video elements with amp custom elements
        $html = str_ireplace(
            ['<img', 'loading="lazy"', '<video','/video>','<audio','/audio>'],
            ['<amp-img', 'layout="responsive"', '<amp-video','/amp-video>','<amp-audio','/amp-audio>'],
            $html
        );

        # Add closing tags to amp-img custom element
        $html = preg_replace('/<amp-img(.*?)>/', '<amp-img$1></amp-img>',$html);

        # Whitelist of HTML tags allowed by AMP
        $html = strip_tags($html,'<h1><h2><h3><h4><h5><h6><a><p><ul><ol><li><blockquote><q><cite><ins><del><strong><em><code><pre><svg><table><thead><tbody><tfoot><th><tr><td><dl><dt><dd><article><section><header><footer><aside><figure><time><abbr><div><span><hr><small><br><amp-img><amp-audio><amp-video><amp-ad><amp-anim><amp-carousel><amp-fit-rext><amp-image-lightbox><amp-instagram><amp-lightbox><amp-twitter><amp-youtube>');

        return $html;

    }
        
    public static function mobile_detect() {

        $agent = new Agent();

        // redirect when agent is mobile device 
        if($agent->isMobile()) {
            return true;
        }
    }
}
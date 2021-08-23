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

    public static function mobile_detect() {

        $agent = new Agent();

        // redirect when agent is mobile device 
        if($agent->isMobile()) {
            return true;
        }
    }
}
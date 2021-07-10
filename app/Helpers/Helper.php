<?php

namespace App\Helpers;
use Illuminate\Support\Carbon;

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

    public static function test_function() {
        return "hello world";
    }
}
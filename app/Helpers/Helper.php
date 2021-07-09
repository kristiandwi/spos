<?php

namespace App\Helpers;

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
        $time = human_time_diff(strtotime($date), current_time('timestamp'));
        $time_ago = $time.' '.__('yang lalu');
        return $time_ago;
    }
}
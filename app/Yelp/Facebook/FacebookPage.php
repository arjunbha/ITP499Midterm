<?php
/**
 * Created by PhpStorm.
 * User: arjunbhargava
 * Date: 3/11/14
 * Time: 7:17 PM
 */
namespace Yelp\Facebook;

class FacebookPage {
    protected $pageId;

    public function __construct($pageId) {
        $this->pageId = $pageId;
    }

    public function get() {
        $endpoint = "http://graph.facebook.com/" . $this->pageId;

        function curl($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        $json = curl($endpoint);
        return json_decode($json);
    }
}
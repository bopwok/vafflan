<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class API {

    protected $client;
    protected $app_id = 60;
    protected $app_secret = 'ef439afb1aa564b5';
    protected $rid = 4571;

    function __construct() {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.trailforks.com/api/1/',
            // You can set any number of default request options.
            'timeout'  => 30.0,
        ]);
    }

    function get_trail_status() {
        $response = $this->client->request('GET', 'trail_status', ['timestamp'=>0, 'trailids'=>38169, 'app_id'=>$this->$app_id, 'app_secret'=>$this->app_secret]);

        return json_decode($response->getBody());
    }
}
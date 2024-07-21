<?php

class Api{
    
    public function __construct() {
    }

    public function searchMovie($title) {
        $url = 'http://www.omdbapi.com/' . '?apikey=' . $_ENV['OMDB_KEY'] . '&t=' . urlencode($title);
        $response = file_get_contents($url);
        return (array)json_decode($response);
    }

}

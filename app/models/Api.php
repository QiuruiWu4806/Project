<?php

class Api{
    
    public function __construct() {
    }

    public function searchMovie($title) {
        $url = 'http://www.omdbapi.com/' . '?apikey=' . $_ENV['OMDB_KEY'] . '&t=' . urlencode($title);
        $response = file_get_contents($url);
        return (array)json_decode($response);
    }

    public function getAIReview($title) {
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key='.AIKey;

        $data = array(
            'contents' => array(
                array(
                    'role' => 'user',
                    'parts' => array(
                        array(
                            'text' => 'I want to get a review for the movie ' . $title)
                    )
                )
            )
        );

        $json_data = json_encode($data);
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}

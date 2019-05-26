<?php
require "vendor/autoload.php";

$str = base64_encode('77qn9aax-qrrm-idki:lnh0-fm2nhmp0yca7');
$client = new \GuzzleHttp\Client(["base_uri" => "https://api.printful.com/",
                                'header' =>[
                                    'Authorization' => 'Basic '.$str,
                                    'Content-type' => 'application/json',                                    
                                ]
]);
$body = [
        "recipient" => [
            "address1" => "19749 Dearborn St",
            "city" => "Chatsworth",
            "country_code"=> "US",
            "state_code"=> "CA",
            "zip"=> 91311
        ],
        "items"=> [
            [
                "quantity"=> 1,
                "variant_id"=> 2
            ],
            [
                "quantity"=> 5,
                "variant_id"=> 202
            ]
        ]
    
 ];
$response = $client->request('POST','/shipping/rates/',['body' => json_encode($body)]);


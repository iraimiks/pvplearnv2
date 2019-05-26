<?php

require "vendor/autoload.php";
$str = base64_encode('77qn9aax-qrrm-idki:lnh0-fm2nhmp0yca7');
$client = new GuzzleHttp\Client([
    'headers' => [
    'Authorization' => 'Basic '.$str,
    'Content-Type' => 'application/x-www-form-urlencoded'
    ]
]);
$res = $client->request('POST', 'https://api.printful.com/shipping/rates',
        [   'json' =>
            array (
                'recipient' => 
                array (
                  'address1' => '11025 Westlake Dr,',
                  'city' => 'Charlotte',
                  'country_code' => 'US',
                  'state_code' => 'NC',
                  'zip' => 28273,
                ),
                'items' => 
                array (
                  0 => 
                  array (
                    'quantity' => 2,
                    'variant_id' => 7679,
                  ),
                //   1 => 
                //   array (
                //     'quantity' => 5,
                //     'variant_id' => 202,
                //   ),
                ),
              )
        ]

);
var_dump($res->getBody()->getContents());

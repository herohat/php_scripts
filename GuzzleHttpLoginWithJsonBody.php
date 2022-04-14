<?php

require __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

try {
    $client = new GuzzleHttp\Client();
    $res = $client->request('POST', 'https://compassionate-hypatia.209-126-106-6.plesk.page/api/Account/login', ['json' => ['email' => 'emailString', 'password' => 'passwordString']]);
    // echo $res->getStatusCode();
    // echo $res->getHeader('content-type')[0];
    echo $res->getBody();


}catch (GuzzleHttp\Exception\ClientException $e) {

    var_dump($e);

   }

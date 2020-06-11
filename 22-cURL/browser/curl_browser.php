<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/php-tutorial/22-cURL/browser/browser.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT']
]);

$source = curl_exec($ch);

curl_close($ch);

echo $source;
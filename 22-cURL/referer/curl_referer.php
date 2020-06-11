<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/php-tutorial/22-cURL/referer/test_site.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_REFERER => 'https://wikipedia.org'
]);

$source = curl_exec($ch);

curl_close($ch);

echo $source;
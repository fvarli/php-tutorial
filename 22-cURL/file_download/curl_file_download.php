<?php
/*
$file = fopen('php.txt', 'w+');
$ch = curl_init('https://www.php.net/');
curl_setopt($ch, CURLOPT_FILE, $file);

curl_exec($ch);

curl_close($ch);*/

$file = fopen('php.svg', 'w+');
$ch = curl_init('https://www.php.net/images/logos/php-logo.svg');
curl_setopt($ch, CURLOPT_FILE, $file);

curl_exec($ch);

curl_close($ch);
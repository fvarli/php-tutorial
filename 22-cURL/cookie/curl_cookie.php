<?php

//send cookie, use CURLOPT_COOKIE a=b&c=d
/*
$ch = curl_init('http://localhost/php-tutorial/22-cURL/cookie/cookie.php');

curl_setopt_array($ch,[
   CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => 'test=John Doe'
]);

$source = curl_exec($ch);

curl_close($ch);

echo  $source;
*/

$ch = curl_init('http://localhost/php-tutorial/22-cURL/cookie/login_example/index.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'user_name' => 'admin',
        'password' => '123456',
        'submit' => 1
    ],
    CURLOPT_COOKIEJAR => 'cookie.txt',
    CURLOPT_COOKIEFILE => 'cookie.txt'
]);
$source = curl_exec($ch);
curl_close($ch);



$ch = curl_init('http://localhost/php-tutorial/22-cURL/cookie/login_example/index.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => [
        'about_me' => 'Cookie runs',
    ],
    CURLOPT_COOKIEFILE => 'cookie.txt'
]);
$source_2 = curl_exec($ch);
curl_close($ch);

echo $source_2;
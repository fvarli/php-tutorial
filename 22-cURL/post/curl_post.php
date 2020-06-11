<?php

$ch = curl_init('http://localhost/php-tutorial/22-cURL/post/form.php');

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'name' => 'Ferzender',
        'surname' => 'Varli',
        'profession' => 'Developer',
        'submit' => 1
    ]
]);

$source = curl_exec($ch);
curl_close($ch);

echo $source;

<?php

$ch = curl_init('http://localhost/php-tutorial/22-cURL/upload_file/file_form.php');

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'full_name' => 'John Doe',
        'file' => new CURLFile('test.txt')
    ]
]);

$source = curl_exec($ch);
curl_close($ch);

echo $source;
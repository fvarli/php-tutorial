<?php

$name = $_POST['name'];
$recaptcha = $_POST['g-recaptcha-response'];

if(!$name){
    echo "Enter your name";
}elseif (!$recaptcha){
    echo "You didn't pass the validation";
}else{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => 'secret=6LfYMwEVAAAAAGEhQ28OXH7tQgE7nKGKJQoq-oEN&response=' . $recaptcha,
        CURLOPT_RETURNTRANSFER => true
    ]);
    $output = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($output, true);

    if($result['success'] == false){
        echo "You didn't pass the validation";
    }else{
        echo "You can go on!";
    }
}
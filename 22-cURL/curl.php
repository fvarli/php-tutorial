<?php

// curl starts
$ch = curl_init();

// curl settings
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://clinicaltrials.gov/',
    CURLOPT_RETURNTRANSFER => true
]);


// curl request run
$source = curl_exec($ch);

// curl stopped
curl_close($ch);

//echo $source; die();

preg_match('/<title>(.*?)<\/title>/', $source, $title);

print_r($title);
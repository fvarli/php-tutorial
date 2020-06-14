<?php

// try to request a page is not existing

$ch = curl_init('https://advgahdvghanb.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if(curl_exec($ch) == false){
    echo curl_error($ch);
}

curl_error($ch);
<?php

function sef_link($str){
    // to make lower with Turkish characters
    $str = mb_strtolower($str, 'UTF-8');
    // change Turkish characters
    $str = str_replace(
      ['ı', 'ğ', 'ü', 'ç', 'ö', 'ş'],
      ['i', 'g', 'u', 'c', 'o', 's'],
      $str
    );
    //except normal characters and numbers replace everything to -
    $str = preg_replace('/[^a-z0-9]/', '-', $str);
    // replace all - to one -
    $str = preg_replace('/--/', '-', $str);
    // remove - from right and left
    return trim($str, '-');
}

$str = 'How was 2020 for me?';

echo sef_link($str);

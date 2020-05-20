<?php

/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/

$str = 'Ferzender Varli';

echo strlen($str) . '<br>';
echo strlen('Ferzender Varli'). '<br>';
echo strpos('Ferzender Varli', 'i') . '<br>';
$str = strtoupper($str);
echo strtolower($str) . '<br>';

$str2 = "-Ferzender-Varli-";
echo rtrim($str2, '-') . '<br>';
echo substr($str, 0, -4) . '<br>';

$str3 = 'Ferzender Varli, İsim Soyisim';

$str3 = str_replace(
    ["Ferzender","Varli ","Mekatronik Mühendisi"],
    ["İsim", "Soyisim", "Meslek"],
    $str3
);

for ($i = 1; $i <= 10; $i++){
    $repeatCount = ($i <= 5 ? $i : (10 - $i));
    echo str_repeat('-*0', $repeatCount) . '<br>';
}
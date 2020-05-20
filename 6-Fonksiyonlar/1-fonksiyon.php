<?php

//Fonksiyonlarda büyük - küçük harf aynı
//Fonksiyonlar değer döndürürler, parametre alırlar

//Geri döndürme
function yaziyazma(){
    return "Yazı yaz";
}

$degerdondur = yaziyazma();
echo $degerdondur .'<br>';

//Parametre alırlar ve geriye bir şeyler döndürürler
function topla($sayi1, $sayi2 =10){
return($sayi1 + $sayi2);
}

$toplam = topla(23);
echo $toplam .'<br>';

$ad='Ferzender';

function adsoyad($soyad)
{
   /* global $ad;
    return $ad . ' ' . $soyad;*/
    return $GLOBALS['ad'] . ' ' . $soyad;
}
echo adsoyad('Varli') .'<br>';

$yazi = 'Yazıyı kısaltma denemesi';

// echo substr($yazi, 0, 10). '...';

function kisalt($str, $limit = 10)
{
    $karaktersayisi = strlen($str);
    if($karaktersayisi > $limit){
        $str = substr($str, 0, $limit). '...';
    }
    return $str;
}
echo kisalt($yazi, 8);

<?php
//foreach döngüsü, sadece dizilerde kullanılır

//sayilar benim dizim, sayı değişkeni olarak kullan, her döngü döndüğünde sayı elemanı olarak kullan

$sayilar=[1,2,3,4,5,6,7,8,9,10];

foreach($sayilar as $sayi){

    echo $sayi .'<br>';
}

$uyedetay = [
    'Ad' => 'Ferzender',
    'Soyad' => 'Varli',
    'Meslek' => 'Yazılım Geliştiricisi',
    'Yaş' => 24
];

foreach ($uyedetay as $key => $val){
    echo $key . ': ' .$val .'<br>';
}
?>
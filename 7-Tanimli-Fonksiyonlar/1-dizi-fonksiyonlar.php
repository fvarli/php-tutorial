<?php

    //print_r()
    //var_dump()
    //explode()
    //implode()
    //count()
    //is_array()
    //shuffle()
    //array_combine() - iki farklı diziyi anahtar değer olarak yeni dizi oluşturmak için
    //array_count_values() - bir dizide tekrarlanan elemanların kaç kez tekrarkandığını sayan
    //array_flip() - anahtarlar ve değerlerin yerini değiştirme
    //array_key_exists() - dizi içinde belirlediğiniz anahtarın olup olmadığını belirleme
    
    $dizi_1=[
        'ad' => 'Ferzender',
        'soyad' => 'Varli',
        'yaş' => 24  
    ];

    print_r($dizi_1) .'<br>';
    var_dump($dizi_1) .'<br>';
   
    $test='Java,Python,PHP';
    $dizi_2=explode(',',$test);
    print_r($dizi_2) .'<br>';

    $string = implode(' | ',$dizi_2);
    echo $string .'<br>';
    
    echo count($dizi_2 + $dizi_1).'<br>';

    if (is_array($string)) {
        echo 'Bu, bir dizidir.' .'<br>';
    }
    else{
      echo  'Bu, bir dizi değildir.' .'<br>';
    }
    $dizi_3 = [1,2,3,4,5,6,7,8,9];
    shuffle($dizi_3);
    print_r($dizi_3);

    $keys = ['ad','soyad'];
    $values = ['Ferzender','Varli'];

    $combine = array_combine($keys,$values);
    print_r($combine);

    $tekrarlanan_eleman = ["Yazılım","Yapay Zeka", "Makine Öğrenmesi", "Yazılım"];
    $elemanlar = array_count_values($tekrarlanan_eleman);
    print_r($elemanlar);

    $yer_degistir=[
        'ad' => 'Ferzender',
        'soyad' => 'Varli',
        'yaş' => 24  
    ];

    $degistir = array_flip($yer_degistir);
    print_r($degistir);

    $dizi_kontrol = ['ad' => 'Ferzender'];

    if (array_key_exists('ad', $dizi_kontrol)){
        echo 'Anahar vardır.';
    }
    else{
        echo 'Anahtar yoktur.';
    }
       

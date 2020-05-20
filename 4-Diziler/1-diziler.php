<?php
/*    $ad ='Ferzender';
    $soyad = 'Varli';
    $yas = '24';
    $meslek = 'Yazılım Geliştirici';
    echo $ad, $soyad;
*/
    /* Dizi Tanımlama
        1) Array();
        2) [];
    */

    $kimlik = [
       'Ad' => "Ferzender",
       'Soyad' =>   "Varli",
       'Yas' =>   "24",
       'Meslek' =>  "Yazılım Geliştiricisi"
    ];

    $kimlik2 = array(
        'Ad' => "Ferzender",
        'Soyad' =>   "Varli",
        'Yas' =>   "24",
        'Meslek' =>  "Yazılım Geliştiricisi"
     );

    /*
        Dizi içindeki elemanlara erişmek
            print_r()
    */

   // echo $kimlik['Meslek'];
    //print_r($kimlik);
    print_r($kimlik2);
?>
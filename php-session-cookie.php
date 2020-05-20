<?php
    //Cookie ve Sessionlarda Dizi(Array) Depolama
    session_start();
    /*
    $_SESSION['uye'] = [
      'kullanici_adi' => 'ferzender',
      'sifre' => '123456'
    ];

    print_r($_SESSION);
    */

    setcookie('uye[id]', 1, time()+20);
    setcookie('uye[kullanici_adi]', 'ferzender', time()+20);
    setcookie('uye[sifre]', '123456', time()+20);

    print_r($_COOKIE);
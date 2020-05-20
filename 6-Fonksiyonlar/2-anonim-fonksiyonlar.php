<?php

    $test = function($par){
        return 'test' . $par;
    };

    $test2 = function() use ($test){
        return 'test2' . $test('test3');
    };

    echo $test2();

    $dizi = [
        function(){
            return '1. fonkisyon';
        },

        function(){
            return '2. fonkisyon';
        },
        function(){
            return '3. fonkisyon';
        }

    ];
    $soyad = 'Varli';

    function filtrele($isim){
        global $soyad;
        return $isim . ' ' . $soyad;

    }

    $dizi = ['Ferzender', 'Bayram', 'Ramazan', 'Beytullah'];
    $dizi=array_map(function($isim) use($soyad){
        return $isim . ' ' . $soyad;        
    }, $dizi);

    print_r($dizi);

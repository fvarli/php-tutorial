<?php

/*
    func_num_args() kaç tane parametre gelmiş
    func_get_args() paramatrelerin listesini dizi olarak döndürme
    func_get_arg() index numarası vererek, o fonksiyonun değerine ulaşıyoruz
*/

function test(){

    echo func_num_args() . '<br>';
    print_r(func_get_args()) .'<br>';
    echo func_get_arg(2);
}

test('Ferzender','Varli', 'Software Developer');

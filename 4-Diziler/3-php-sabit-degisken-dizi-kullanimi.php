<?php

define('UYE', [
    'ad' => 'Ferzender',
    'soyad' => 'Varli',
    'yas' => 24,
    'meslek' => 'Yazılım Geliştiricisi',
    'sporlar' => [
        'yüzme',
        'bisiklet'
    ]
]);
//print_r(UYE);
echo UYE['sporlar'][1];
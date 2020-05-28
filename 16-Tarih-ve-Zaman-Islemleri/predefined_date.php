<?php

date_default_timezone_set('Europe/Istanbul');

setlocale(LC_TIME, 'tr_TR');

// 29 Mayıs 2020, Cuma

echo strftime('%d %B %Y, %A - %T') . ' - ' . date_default_timezone_get();


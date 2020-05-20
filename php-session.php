<?php

session_start();

//$_SESSION['kullanici_adi'] = 'ferzender';
$_SESSION['parola'] = 'sifre';

unset($_SESSION['parola']);

print_r($_SESSION);

session_destroy();
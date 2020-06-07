<?php
$password = 'dsa5854!^W3ew';
$md5password = md5($password);

//echo password_hash($password, PASSWORD_DEFAULT);

$hash = '$2y$10$tFzzOwINNYwHE7/EF6VDn.PR2T1.f6QLFaARcqoqomT/6mO11YArq';

if(password_verify($password,$hash)){
    echo "password is correct";
}
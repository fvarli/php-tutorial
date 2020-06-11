<?php

if(isset($_SERVER['HTTP_REFERER'])){
    die('Bot banned!');
}

print_r($_SERVER);
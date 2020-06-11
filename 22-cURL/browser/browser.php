<?php

if (!isset($_SERVER['HTTP_USER_AGENT'])){
    die('Bot banned!');
}

echo $_SERVER['HTTP_USER_AGENT'];
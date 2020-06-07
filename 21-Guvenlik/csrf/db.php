<?php
session_start();
$db = new PDO('mysql: host=localhost;dbname=php_tutorial', 'root', '');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!isset($_POST['token']) || $_POST['token'] != $_SESSION['token']){
        die('Invalid CSRF Token');
    }
}
$_SESSION['token'] = uniqid();
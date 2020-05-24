<?php

//DELETE FROM table_name WHERE column_name = value

require 'header.php';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}


$query = $db->prepare('DELETE FROM pdo_process WHERE id = ?');

$query->execute([$_GET['id']]);

header('Location:index.php');
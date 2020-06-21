<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=php_tutorial', 'root','hyOP.28!dsEd');
}catch (PDOException $e){
    echo $e->getMessage();
}

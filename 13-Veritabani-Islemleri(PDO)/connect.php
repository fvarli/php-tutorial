<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=php_tutorial','root','');
}
catch(PDOException $e){
    echo $e->getMessage();
}
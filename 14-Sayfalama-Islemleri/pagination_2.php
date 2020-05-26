<?php


try {
    $db = new PDO('mysql:host=localhost;dbname=php_tutorial','root','');
}
catch(PDOException $e){
    echo $e->getMessage();
}

//limit
$limit = 10;

$start = isset($_GET['start']) && is_numeric($_GET['start']) && $_GET['start'] > -1 ? $_GET['start'] : 0;

if($start % $limit !== 0){
    header('Location:pagination_2.php');
}

$query = $db->query('SELECT * FROM pagination ORDER BY id DESC LIMIT ' . $start . ',' . $limit)->fetchAll(PDO::FETCH_ASSOC);

if(!$query){
    header('Location:pagination_2.php?start=' . ($start - $limit) . '&last=1');
}

foreach ($query as $qu){
    echo $qu['id'] . '<br>';
}

if($start > 0){
    echo '<a href="pagination_2.php?start=' . ($start - $limit ) .'">Previous</a>';
}
if(!isset($_GET['last'])){
    echo '<a href="pagination_2.php?start=' . ($start + $limit ) .'">Next</a>';
}
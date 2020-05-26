<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=php_tutorial','root','');
}
catch(PDOException $e){
    echo $e->getMessage();
}


//limit
$limit = 5;

//page number (where we are on)
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
if($page <= 0 ){
    $page = 1;
}
//total data
$total_data = $db->query('SELECT COUNT(id) as total_data FROM pagination')->fetch(PDO::FETCH_ASSOC)['total_data'];


// print_r($total_data);

//total page number
$total_page = ceil($total_data / $limit);

// where will data start

$start = ($page * $limit) - $limit;

// list the data

$query = $db->query('SELECT * FROM pagination ORDER BY id DESC LIMIT ' . $start . ',' . $limit)->fetchAll(PDO::FETCH_ASSOC);


foreach ($query as $qu){
    echo $qu['name']. ' ' . $qu['id'] . '<br>';
}

// list pages

$left = $page - 3;
$right = $page + 3;

if($page <= 3){
    $right = 7;
}

if($right>$total_page){
    $left = $total_page - 6;
}

echo '<div class="pagination">';
echo '<a href="pagination.php?page=' . ($page > 1 ? $page -1 : 1) . '">Previous</a>';
for($i = $left; $i < $right; $i++){
    if($i > 0 && $i <= $total_page){
         echo '<a ' . ($i==$page ? ' class="active"':null) . ' href="pagination.php?page=' . $i . '">' . $i . '</a>'; 
    }

}
echo '<a href="pagination.php?page='. ($page < $total_page ? $page +1: $total_page) .'">Next</a>';
echo '</div>';
?>

<style>
    .pagination a {
        display: inline-block;
        padding: 10px;
        background: #eee;
        margin-right: 4px;
        color: #333;
        text-decoration: none;
    }
    .pagination a.active {
        background: #333;
        color: #fff;
    }
</style>

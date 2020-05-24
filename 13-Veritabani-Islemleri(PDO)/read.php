<?php

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}

//$pdo_process = $db
//    ->query('SELECT pdo_process.id, pdo_process.title, pdo_process.status, categories.name as category_name FROM pdo_process INNER JOIN categories ON categories.id = pdo_process.category_id ORDER BY pdo_process.title')->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM pdo_process  WHERE id = ? && status = 1');
$query->execute([$_GET['id']]);

$pdo_process = $query->fetch(PDO::FETCH_ASSOC);

if(!$pdo_process){
    header('Location:index.php');
    exit;
}
?>

<h3><?php echo $pdo_process['title']?></h3>

<div>
    <?php $date_format = date("d/m/Y", strtotime($pdo_process['date'])) ?>
    <strong>Created At: </strong><?php echo $date_format?><br><br>
    <?php echo $pdo_process['content']?><br><br>
    <?php if($pdo_process['status'] == 1){echo "Yes";}else{echo "No";}?><br><br>
    <?php echo $pdo_process['category_id'];?>
</div>


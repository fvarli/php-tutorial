<?php
require 'header.php';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}

$query = $db->prepare('SELECT * FROM pdo_process WHERE id = ? && status = 1');
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
    <?php echo $pdo_process['content']?>
</div>


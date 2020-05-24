<?php
require 'header.php';
// UPDATE table_name SET column_name = value WHERE column_name = value
/*
$query = $db->prepare('UPDATE pdo_process SET
title = ?,
content = ?,
status = ?
WHERE id = ?');

$update  = $query->execute(['new title', 'new content', 1, 2]);

if($update){
    echo 'Data has been updated.';
}else{
    $error = @$query->errorInfo();
    echo "MYSQL Error: ".$error[2];
}
*/

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}

$query = $db->prepare('SELECT * FROM pdo_process WHERE id =?');

$query->execute([$_GET['id']]);

$pdo_process = $query->fetch(PDO::FETCH_ASSOC);

if(!$pdo_process){
    header('Location:index.php');
    exit;
}

//form send
if(isset($_POST['submit'])){
    $title = isset($_POST['title']) ? $_POST['title'] : $pdo_process['title'];
    $content = isset($_POST['content']) ? $_POST['content'] : $pdo_process['content'];
    $status= isset($_POST['status']) ? $_POST['status'] : 0;

    if(!$title){
        echo "Add Title";
    }elseif(!$content){
        echo "Add Content";
    }else{
        $query = $db->prepare('UPDATE pdo_process SET title = ?, content = ?, status = ? WHERE id = ?');
        $update  = $query->execute([$title, $content, $status, $pdo_process['id']]);

        if($update){
            header('Location:index.php?page=read&id='.$pdo_process['id']);
        }else{
            $error = @$query->errorInfo();
            echo "MYSQL Error: ".$error[2];
        }
    }
}

?>

<form action="" method="post"><br>
    Title: <br>
    <input type="text" value="<?php echo isset($_POST['title']) ? $_POST['title'] : $pdo_process['title']; ?>" name="title"><br><br>
    Content: <br>
    <textarea name="content" value=""  id="" cols="30" rows="10"><?php echo isset($_POST['content']) ? $_POST['content'] : $pdo_process['content'];?></textarea><br><br>
    Status
    <select name="status" id="">
        <option <?php echo $pdo_process['status'] == 0 ? 'selected': ''?> value="0">No</option>
        <option <?php echo $pdo_process['status'] == 1 ? 'selected': ''?> value="1">Yes</option>
    </select><br><br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Edit</button>
</form>

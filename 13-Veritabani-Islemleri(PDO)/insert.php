<?php
require 'header.php';
//$db->query('INSERT INTO pdo_process SET title="Baslik Test", content="Deneme Icerik", status=1');

/*
$query = $db->prepare('INSERT INTO pdo_process SET
title = ?,
content = ?,
status = ?');

$add = $query->execute(['test baslik', 'test icerik', 0]);

if($add){
    echo 'data has been added';
}else{
    print_r($query->errorInfo());
}
*/

//form send
if(isset($_POST['submit'])){
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $content = isset($_POST['content']) ? $_POST['content'] : null;
    $status= isset($_POST['status']) ? $_POST['status'] : 0;

    if(!$title){
        echo "Add Title";
    }elseif(!$content){
        echo "Add Content";
    }else{
        $query = $db->prepare('INSERT INTO pdo_process SET title = ?, content = ?, status = ?');
        $add = $query->execute([$title, $content, $status]);

        if($add){
            header('Location:/php-tutorial/13-Veritabani-Islemleri(PDO)');
        }else{
            $error = @$query->errorInfo();
            echo "MYSQL Error: ".$error[2];
        }
    }
}
?>

<form action="" method="post">
    Title: <br>
    <input type="text" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>" name="title"><br><br>
    Content: <br>
    <textarea name="content" value="<?php echo isset($_POST['content']) ? $_POST['content'] : ''; ?>"  id="" cols="30" rows="10"></textarea><br><br>
    Status
    <select name="status" id="">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select><br><br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Send</button>
</form>

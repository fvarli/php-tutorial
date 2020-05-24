<?php
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


$categories = $db->query('SELECT * FROM categories ORDER  BY name ASC')->fetchAll(PDO::FETCH_ASSOC);

#print_r($categories);

//form send
if(isset($_POST['submit'])){
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $content = isset($_POST['content']) ? $_POST['content'] : null;
    $status= isset($_POST['status']) ? $_POST['status'] : 0;
    $category_id= isset($_POST['category_id']) ? $_POST['category_id'] : null;

    if(!$title){
        echo "Add Title";
    }elseif(!$content){
        echo "Add Content";
    }elseif (!$category_id){
        echo "Select Category";
    }elseif (!$status){
        echo "Select Status";
    } else{
        $query = $db->prepare('INSERT INTO pdo_process SET title = ?, content = ?, status = ?, category_id = ?');
        $add = $query->execute([$title, $content, $status, $category_id]);

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
    Category: <br>
    <select name="category_id">
        <option value="">Select Category</option>
        <?php foreach ($categories as $ct):?>
            <option value="<?php echo $ct['id'];?>"><?php echo $ct['name'];?></option>
        <?php endforeach;?>
    </select><br><br>
    Status: <br>
    <select name="status" id="">
        <option value="">Select Status</option>
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select><br><br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Send</button>
</form>

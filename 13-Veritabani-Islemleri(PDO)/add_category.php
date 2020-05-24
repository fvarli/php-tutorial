<?php

if(isset($_POST['name'])){

    if(empty($_POST['name'])){
        echo "Please, enter category name";
    }else{
        // add category
        $query = $db->prepare('INSERT INTO categories SET name = ?');

        $add = $query->execute([$_POST['name']]);

        if($add){
            header('Location:index.php?page=categories');
        }else{
            $error = @$query->errorInfo();
            echo "MYSQL Error: ".$error[2];;
        }
    }
}
?>

<form action="" method="post">
    Category Name: <br>
    <input type="text" name="name"><br> <br>
    <button type="submit">Send</button>
</form>

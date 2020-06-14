<?php

if(isset($_POST['submit'])){
    if(!isset($_POST['user_name']) || !isset($_POST['password'])){
        echo "Enter user name or password";
    }elseif ($_POST['user_name'] == 'admin' && $_POST['password'] == 123456){
        //start session
        $_SESSION['login'] = true;
        header('Location: index.php');
    }else{
        echo "User name or password is not correct";
    }
}

?>

<form action="" method="post">
    User Name: <br>
    <input type="text" name="user_name"> <br> <br>
    Password: <br>
    <input type="password" name="password"> <br> <br>
    <button type="submit" name="submit" value="1">Login</button>
</form>
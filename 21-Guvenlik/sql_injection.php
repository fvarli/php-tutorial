<?php

require 'db.php';

/*
$id = "''; DROP TABLE xss_members;";
$sql = 'SELECT * FROM xss_members WHERE id = ' . $id;
echo $sql;
*/

if(isset($_POST['email'])){
    $email = $_POST['email'];
    /*$sql = 'SELECT * FROM xss_members WHERE email="'. $email .'"';
    echo $sql;*/
    $query = $db->prepare('SELECT * FROM xss_members WHERE email = ?');
    $query->execute([$email]);
    if($query->rowCount()){
        $member = $query->fetch(PDO::FETCH_ASSOC);
        print_r($member);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    E-mail address: <br><br>
    <input type="text" name="email"> <br><br>
    <button type="submit">Send</button>
</form>
</body>
</html>

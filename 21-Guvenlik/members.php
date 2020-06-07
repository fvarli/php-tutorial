<?php

require 'db.php';

function clean($str){
    return htmlspecialchars($str);
}

if(!isset($_GET['id'])){
    exit;
}

$query = $db->prepare('SELECT * FROM xss_members WHERE id = ?');

$query->execute([$_GET['id']]);

$member = $query->fetch(PDO::FETCH_ASSOC);

print_r($member);

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
<h3><?php echo clean($member['username']);?></h3>
<p><?php echo clean($member['about_me']);?></p>
</body>
</html>
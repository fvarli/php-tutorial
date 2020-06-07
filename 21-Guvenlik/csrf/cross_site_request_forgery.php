<?php

require 'db.php';

$id = 1;

$query = $db->prepare('SELECT * FROM xss_members WHERE id = ?');

$query->execute([$id]);

$member = $query->fetch(PDO::FETCH_ASSOC);

echo $_SESSION['token'];

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
<form action="form.php" method="post">
    About me: <br> <br>
    <textarea name="about_me" id="" cols="30" rows="10"><?php echo $member['about_me'];?></textarea> <br> <br>
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>">
    <button type="submit">Send</button>
</form>
</body>
</html>

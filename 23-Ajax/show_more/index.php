<?php
require 'db.php';

$data = $db->query('SELECT * FROM load_more ORDER BY id DESC LIMIT 0,7')->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show More</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app.js"></script>
</head>
<body>
<ul id="list">
    <?php foreach ($data as $dt):
        require 'comment.php';
    endforeach; ?>
</ul>
<button id="show_more">Show More</button>
</body>
</html>

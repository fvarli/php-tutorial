<?php
require 'db.php';
$cities = $db->query('SELECT * FROM cities ORDER BY id ASC');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax City - District</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app.js"></script>
</head>
<body>
<ul>
    <li>
        <div>City</div>
        <select name="city" id="city">
            <option value="">Select A City</option>
            <?php foreach ($cities as $city): ?>
                <option value="<?=$city['city_no'] ?>"><?=$city['city_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </li>
    <li>
        <div>District</div>
        <select name="district" id="district" disabled>
            <option value="">Select A District</option>
        </select>
    </li>
</ul>
</body>
</html>
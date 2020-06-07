<?php

include 'db.php';
$id =1;
$about_me = $_POST['about_me'];

$query = $db->prepare('UPDATE xss_members SET about_me = ? WHERE id = ?');
$query->execute([$about_me, $id]);


header('Location:cross_site_request_forgery.php');
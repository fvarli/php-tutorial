<?php
require 'db.php';

if(isset($_POST['city_code'])){
    $city_code = $_POST['city_code'];

    // find district

    $query = $db->prepare('SELECT * FROM districts WHERE city_no = ?');

    $query->execute([$city_code]);
    $districts = $query->fetchAll(PDO::FETCH_ASSOC);

    $html = '<option>Select A District</option>';
    foreach ($districts as $district){
        $html .= '<option value="'. $district['district_no'] .'">' . $district['district_name'] . '</option>';
    }

    echo $html;
}
<?php

$date = '2018-05-15 15:15:15';
$unix = strtotime($date);

echo date('Y-m-d H:i:s', $unix);

echo '<br>';
echo '<br>';

$new_time = strtotime('-12 day', time());

echo date('Y-m-d H:i:s', $new_time);
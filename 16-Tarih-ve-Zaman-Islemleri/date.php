<?php

/*
date()
getdate()
time()
*/

echo date('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

$date = getdate();
print_r($date);

echo '<br>';
echo '<br>';

$time = time() - ((60*60*24) *15 );

echo date('Y-m-d H:i:s',$time);

echo '<br>';
echo '<br>';


$old_date = getdate($time);
print_r($old_date);

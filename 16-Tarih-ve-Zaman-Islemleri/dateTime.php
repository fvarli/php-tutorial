<?php

$date = new dateTime();

// date ('Y-m-d H:i:s');

echo $date->format('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

echo $date->getTimestamp();

echo '<br>';
echo '<br>';

$date->setTimestamp(time());
echo $date->format('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

$date->modify('+3 day');
echo $date->format('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

$date->setTimezone(new DateTimeZone('Europe/Istanbul'));
echo $date->format('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

$new_format_date = new dateTime('now', new DateTimeZone('Europe/Istanbul'));
echo $new_format_date->format('Y-m-d H:i:s');

echo '<br>';
echo '<br>';

// Find difference between two date

$date_1 = new DateTime('1994-12-02 18:00:00');
$date_2 = new DateTime('now');

$difference = $date_1->diff($date_2);

//print_r($difference);

$find_difference = $difference->format('%y yıl %m ay %d gün %h saat %i dakika %s saniye');

echo $find_difference;

echo '<br>';
echo '<br>';

$find_difference = str_replace(
    ['0 yıl', '0 ay', '0 gün', '0 saat', '0 dakika'],
    '',
    $find_difference
);

echo $find_difference . ' ' . 'önce doğdum.';
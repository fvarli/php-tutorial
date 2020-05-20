<?php

$a = 7;



Switch ($a){

    case 5:
        echo 'a 5e eşit';
    break;

    case 6:
        echo 'a 6ya eşit';
    break;

    case $a % 4 == 3:
        echo '7\'yi 4e bölünce kalan 3\'tür.';
    break;

    default:
        echo 'Eşleşme bulunamadı';
    break;

}
?>
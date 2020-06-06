<?php

error_reporting(E_ALL ^ E_ERROR);

function fatal_error(){
    $error = error_get_last();
    if($error['type'] == 1){
        echo '<div style="background: darkred; padding: 10px; color: #fff;">' . $error['message'] . '</div>';
    }
}

register_shutdown_function('fatal_error');

a();

echo "test";
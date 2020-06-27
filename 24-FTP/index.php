<?php

// ftp_connect
// ftp_login
// error_get_last
// ftp_mkdir
// ftp_rmdir
// ftp_chdir
// ftp_pwd

// ftp_put
// ftp_nb_put

// ftp_get
// ftp_nb_get

$conn_id = ftp_connect('type host name');

if($conn_id){
    echo "connected.<br>";
    $login = ftp_login($conn_id,"type user name", "type your password");
    if($login){

        echo "you are in <br>";

        ftp_chdir($conn_id, './public_html');
        echo ftp_pwd($conn_id) .'<br>';

        /*
         * Rename folder
        $rename = ftp_rename($conn_id, 'test', 'test_new');
        if($rename){
            echo 'Folder renamed.';
        }else{
            echo show_error();
        }
        */

        /*
         * List files
         * $files = ftp_nlist($conn_id, '.');
        print_r($files);
        */

        /*
         * Delete file
        $delete = ftp_delete($conn_id, 'php_tutorial.html');
        if($delete){
            echo 'File deleted!';
        }else{
            echo show_error();
        }
        */

        /*
         * Download file
        $download = ftp_get($conn_id, 'php_tutorial_2.html', 'php_tutorial.html', FTP_BINARY);

        if($download){
            echo "Download completed!";
        }else{
            echo show_error();
        }
        */

        /*
         * Upload file
        $upload= ftp_put($conn_id, 'php_tutorial.html', __DIR__.'/php_tutorial.html', FTP_BINARY);

        if($upload){
            echo "File has been uploaded.";
        }else{
            echo show_error();
        }
        */

        /*
         * Create folder
        $create = ftp_mkdir($conn_id, 'test1');

        if ($create){
            echo "Folder has been created";
        }else{
            echo show_error();
        }
        */
        /*
        $delete = ftp_rmdir($conn_id, 'test1');
        if($delete){
            echo "Folder has been deleted.";
        }else{
            echo show_error();
        }
        */
        
    }else{
        echo show_error() . '. '. "You are out";
        /*$error = error_get_last();
        echo $error['message'];
        echo "you are out";*/
    }
}else{
    echo show_error();
    /*$error = error_get_last();
    echo $error['message'];
    var_dump($error);
    echo "error";*/
}

function show_error(){
    $error = error_get_last();
    if(isset($error['message'])){
        return $error['message'];
    }
}
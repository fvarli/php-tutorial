<?php

/*
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE);
$zip->addFile('add_to_zip.txt');
$zip->close();
*/

/*
$zip = new ZipArchive();
$zip->open('files.zip', ZipArchive::CREATE);
foreach (glob('*') as $file){
    if($file !=basename(__FILE__)){
        $zip->addFile($file);
    }
}
$zip->close();
*/

/*
function get_dir_list($dir){
    static $files = [];
    foreach (glob($dir) as $file) {
        if (is_dir($file)) get_dir_list($file . '/*');
        else {
            if ($file !== basename(__FILE__)) {
                $files[] = $file;
            }
        }
    }
    return $files;
}

$zip = new ZipArchive();
$zip->open('test_files.zip',ZipArchive::CREATE);
foreach (get_dir_list('test/*') as $file){
    $zip->addFile($file);
}
$zip->close();
*/

/*
$zip = new ZipArchive();
if($zip->open('test_files.zip') === true){
    $zip->addFile('add_to_zip.txt');
    $zip->close();
    echo 'File added';
}else{
    echo 'File could not open.';
}
*/

/*
$zip = new ZipArchive();
if($zip->open('test_files.zip') === true){
    // echo $zip->getFromName('test/sub_test/test.html');
    // $first_file = $zip->statIndex(0);
    // print_r($first_file);
    // echo $zip->numFiles;
    // $zip->renameIndex(0, 'test/sub_test/new_test.html');
    // $zip->renameName('test/test.js', 'test/new_test.js');
    // $zip->deleteName('test/new_test.js');

    //$zip->deleteIndex(1);

    for($i =0; $i<$zip->numFiles;  $i++){
        $files = $zip->statIndex($i);
        //print_r($files);
        echo $files['name']. ' (' . format_size_units($files['size']) . ')' . ' - ' .date('d/m/Y H:i:s' , $files['mtime']) . '<br>';
    }

    $zip->close();
}else{
    echo 'File could not open.';
}
*/

/*
$zip = new ZipArchive();
$zip->open('new_hash.zip', ZipArchive::CREATE);
$zip->addFile('file.zip');
$zip->setEncryptionName('file.zip', ZipArchive::EM_AES_256, '123456');
$zip->close();
*/

/*
$zip = new ZipArchive();
$zip->open('files.zip');
$zip->extractTo('test/file');
$zip->close();
*/

/*
$zip = new ZipArchive();
$zip->open('new_hash.zip');
$zip->setPassword('123456');
$zip->extractTo('test/hash');
$zip->close();
*/

function format_size_units($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

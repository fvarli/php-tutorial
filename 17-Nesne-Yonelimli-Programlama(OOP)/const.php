<?php

class const_file{
    const DIRECTORY = __DIR__;

    public function get_directory()
    {
        return self::DIRECTORY;
    }
}

class folder extends const_file {
    public function get_directory(){
        return parent::DIRECTORY;
    }
}

/*
$const_file = new const_file;
echo $const_file->get_directory();
*/

echo const_file::DIRECTORY;

echo '<br>';
echo '<br>';

$folder = new folder;
echo $folder->get_directory();


<?php

class staticTest{
    public $a = 'test';
    public static $b = 'test2';
    public static function hello()
    {
        //if in the same class, use self,
        //if in other class, use parent

        return self::$b;

        //return 'hello world';
    }
}

echo staticTest::hello();

echo '<br>';
echo '<br>';
echo '<br>';

class file{
    public static $file_name;
    public static function create($file_name, $text)
    {
        self::$file_name = $file_name;
        $file = fopen($file_name, 'w+');
        fwrite($file, $text);
        fclose($file);
    }

    public static function read($file_name = null)
    {
        if(!$file_name) $file_name = self::$file_name;
        return file_get_contents($file_name);
    }
}

File::create('text.txt', 'John Doe');
echo File::read('text.txt');
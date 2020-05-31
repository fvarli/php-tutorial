<?php

//public
//private
//protected

error_reporting(E_ALL);
ini_set('display_errors', true);

class Test {
    public $a = 'a';
    private $b = 'b';
    protected $c = 'c';

    public function return_b()
    {
        return $this->b;
    }

    protected function return_c(){
        return $this->c;
    }

}

$test = new Test;

echo $test->a;
echo '<br>';
echo $test->return_b();
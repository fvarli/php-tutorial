<?php

class Member {

    public $name;
    public $last_name = 'Varli';
    const Age = 25;

    public function show_name(){
        return $this->name;
    }
    public function show_last_name(){
        return $this->last_name;
    }

    public function show_age(){
        return self::Age;
    }

    public function sum($a, $b){
        return $a + $b;
    }

    public function add($a, $b)
    {
        return $this->sum($a, $b);
    }
}

$get_member = new Member;

echo $get_member->last_name;

echo '<br>';

echo Member::Age;

echo '<br>';

echo $get_member->show_last_name();

echo '<br>';

echo $get_member->sum(1, 3);

echo '<br>';

echo $get_member->add(4, 12);

echo '<br>';

echo $get_member->show_age();

echo '<br>';
$get_member->name ="Ferzender";
echo $get_member->show_name() . ' ' . $get_member->show_last_name();
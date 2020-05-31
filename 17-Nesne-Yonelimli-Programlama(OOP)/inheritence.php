<?php

class test_class{

    // public and protected can be used in extends class, but private can not.
    public $full_name = 'John Doe';
    protected $age = 25;

    public function hello()
    {
        return 'hello';
    }
}

class test_class_2 extends test_class{
    public function world()
    {
        return 'world';
    }

    public function full_name()
    {
        return $this->full_name;
    }

    public function age()
    {
        return $this->age;
    }
}


$test = new test_class_2;

echo $test->hello() . ' '. $test->world();

echo '<br>';
echo '<br>';

echo 'His name is ' . $test->full_name() . ', and his age is ' . $test->age();

class employees{
    public $salary;
    public $full_name;

    public function salary($salary)
    {
        $this->salary = $salary;
    }

    public function full_name($full_name)
    {
        $this->full_name = $full_name;
    }

    public function yearly_salary()
    {
        return '$' . ($this->salary * 12);
    }

}


class accounting extends employees {

}

class IT extends employees {
    public function yearly_salary()
    {
        return 'IT Employee ' . $this->full_name . ' has ' . parent::yearly_salary() . ' as yearly.';
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

$accounting = new accounting;
$accounting->full_name('John Doe');
$accounting->salary(2500);
echo 'Accounting yearly salary: ' . $accounting->yearly_salary();
echo '<br>';
echo '<br>';
$it = new IT;
$it->full_name('Ferzender Varli');
$it->salary(5000);
echo $it->yearly_salary();

echo '<br>';
echo '<br>';
echo '<br>';

class a{
    public function test()
    {
        return 'a:test';
    }
}

class b extends a{
    public function test()
    {
        return 'b:test';
    }
}

class c extends b{
    public function test()
    {
        return 'c:test';
    }

    public function get_test_methods()
    {
        return [
            'a' => a::test(),
            'b' => parent::test(),
            'c' => self::test()
        ];
    }
}

$c = new c;

print_r($c->get_test_methods());

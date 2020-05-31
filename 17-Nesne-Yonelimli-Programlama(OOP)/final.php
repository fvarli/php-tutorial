<?php

class Brand{

}

class Model extends Brand{

}

final class Series extends Model{

}

// Series class is the latest class to be extended. So Product can not be used for this way.
/*class Product extends Series{
    public function test()
    {
        return 'product';
    }
}

$product = new Product;
// echo $product->test();  - it doesn't work.
*/

class employee{
    //Using final is providing that can not be used following class which extends.
    final public function test()
    {
        return 'employee:test';
    }
}

/*class account extends employee {
    public function test()
    {
        return 'account:test';
    }
}*/

$employee = new employee;
echo $employee->test();
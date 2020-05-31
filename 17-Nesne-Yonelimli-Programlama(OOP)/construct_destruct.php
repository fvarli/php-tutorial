<?php

class  db{

    private $db;

    //construct method

    public function __construct($host, $u_name, $password)
    {
        $this->db = new PDO('mysql:host=' . $host, $u_name, $password);
    }

    public function get_data()
    {
        //$this->db->query();
        return 'data is from DB<br>';
    }

    //destruct method

    public function __destruct()
    {
        $this->db = null;
    }
}

$db = new db('localhost', 'root', '');
echo $db->get_data();
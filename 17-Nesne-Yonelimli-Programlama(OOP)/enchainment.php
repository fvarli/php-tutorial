<?php

class database_app{
     private $sql;

     public function from($table_name){
         $this->sql = 'SELECT * FROM ' . $table_name;
         return $this;
     }

     public function select($columns){
         $this->sql = str_replace('*', $columns, $this->sql);
         return $this;
     }

    public function get()
    {
        return $this->sql;
    }
}

$db = new database_app;

$query = $db->from('members')->select('member_id, user_name')->get();

echo $query;

//echo $db->from('members')->select()->get();
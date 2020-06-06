<?php

//hata bastırma operatörü
//@
/*
echo @$value;
*/

//try-catch
//throw new exception
//exception extend
//parametre olacak, değeri olacak, değeri sayı olacak, değer 10'a eşit olacak
/*
if(!isset($_GET['id'])){
    echo "id parametresi yok";
}elseif (empty($_GET['id'])){
    echo "id parametresi boş";
}elseif (!is_numeric($_GET['id'])){
    echo "id parametresi sayı değil";
}elseif ($_GET['id'] != 10){
    echo "id parametresi 10'a eşit değil";
}else{
    echo "id parametre değeri: " .  $_GET['id'];
}
*/

class err extends Exception{
    public function print_json()
    {
        $data = [
          'satir' => $this->line,
          'dosya' => $this->file,
          'mesaj' => $this->message
        ];

        return json_encode($data);
    }

    public function print_XML()
    {
        header('Content-type: text/xml');
        $xml = new SimpleXMLElement('<hata/>');
        $xml->addChild('satir', $this->line);
        $xml->addChild('dosya', $this->file);
        $xml->addChild('mesaj', $this->message);

        return $xml->asXML();
    }
}

try {
    if(!isset($_GET['id'])){
        throw new err('id parametresi yok');
    }elseif (empty($_GET['id'])){
        throw new err('id parametresi boş');
    }elseif (!is_numeric($_GET['id'])){
        throw new err('id parametresi sayı değil');
    }elseif ($_GET['id'] != 10){
        throw new err('id parametresi 10\'a eşit değil');
    }else{
        echo "id parametre değeri: " .  $_GET['id'];
    }
}catch (err $e){
    if(isset($_GET['type'])){
        if($_GET['type'] == 'xml'){
            echo $e->print_XML();
        }else{
            echo $e->print_json();
        }
    }else{
        echo $e->print_json();
    }
}
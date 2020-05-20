<?php
    /*
        Dizin oluşturma
        mkdir(dosya_adi, chmod)
        rmdir()
    */
    
    /*
        mkdir('Test');
        rmdir('Test');
    */
    //mkdir('Deneme', 0777);

    //Dizin ve Dosya Kontrol Et

    if(file_exists('test.txt')){
        echo 'test.txt dosyası mevcut.' . '<br>';
    }
    else {
        echo 'test.txt dosyası mevcut değil.'  . '<br>';
    }
    
    if(file_exists('Deneme')){
        echo 'Test klasörü mevcut.'  . '<br>';
        rmdir('Deneme');
        echo 'Dosya, başarılı bir şekilde silindi.'  . '<br>';
    }
?>
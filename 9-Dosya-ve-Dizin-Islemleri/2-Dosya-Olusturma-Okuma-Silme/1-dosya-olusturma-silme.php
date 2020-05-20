<?php

// dosya oluşturma - touch()

    /*touch('test.txt');
    touch('test2.txt', time()-20000); */

    /* dosya silme
    unlink('test2.txt');
    */
    
    /*
        fopen() - dosya açma
        fclose() - dosya kapama
        fwrite() - dosyaya bir şey yazma
        fread() - dosyanın tüm içeriğini okuma
        fgets() - dosyayı satır satır okuma
        feof() - dosyanın sonuna gelip gelinmediğini döndürür
        filesize() - dosya karakter sayısını döndür
        unlike() - dosyayı siler
    */

    /*
        Kipler;
            r - okumak için aç
            r+ - okumak ve yazmak için aç
            w - yazmak içi aç (dosya yoksa ise oluşturulur, varsa üzerine yazılır)
            w+ - okumak ve yazmak için aç
            a - yazmak için aç, dosyanın sonuna
            a+ - okumak ve yazmak için aç
    */

    /*
    $icerik = "Bu, yazı denemesidir. " . rand(0,1000) . "\n";
    $dosya_yaz_w = fopen('test.txt', 'w');
       fwrite($dosya_yaz_w, $icerik);
    fclose($dosya_yaz_w);
    
    
    $icerik = "Bu, yazı denemesidir. " . rand(0,1000) . "\n";
    $dosya_yaz_a = fopen('test.txt', 'a');
       fwrite($dosya_yaz_a, $icerik);
    fclose($dosya_yaz_a);
    
    */

    
    $icerik = "Bu, yazı denemesidir. " . rand(0,1000) . "\n";
    $dosya_yaz_a_arti = fopen('test.txt', 'a+');
    /*fwrite($dosya_yaz_a_arti, $icerik);
    fclose($dosya_yaz_a_arti); 
    */

    /*
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    echo fgets($dosya_yaz_a_arti) . '<br>';
    *

    print_r(feof($dosya_yaz_a_arti));

    fclose($dosya_yaz_a_arti);
    */
    
    while(!feof($dosya_yaz_a_arti)){

        echo  fgets($dosya_yaz_a_arti). '<br>';
       
    }

    fclose($dosya_yaz_a_arti);
    
    
    /*
    $degerler = file('test.txt');
    print_r($degerler);

    fclose($dosya_yaz_a);
    */

    /*
    $dosya_oku = fopen('test.txt', 'r');
        echo fread($dosya_oku, filesize('test.txt'));
    fclose($dosya_oku);
    */

    /*
    file_get_contents()
    file_put_contents()
    */

    /*
    $websitem_icerik = file_get_contents("https://ferzendervarli.com");
    echo $websitem_icerik;
    */

    /*
    file_put_contents('test.txt', 'Bu yeni eklenen', FILE_APPEND);
    */

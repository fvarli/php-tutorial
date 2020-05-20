<?php
    /*
        scandir();
        glob();
    */

    $dosyalar = scandir('.');
    print_r($dosyalar) . '<br>';

    $dosyalar = array_filter(scandir('.'), 'is_dir');
    print_r($dosyalar) . '<br>';

    $dosyalar = glob('*');
    print_r($dosyalar);

    //sadece dizinleri listele
    $dosyalar = glob('*', GLOB_ONLYDIR);
    print_r($dosyalar) . '<br>';

    //sadece dizinleri listele
    $dosyalar = glob('*/');
    print_r($dosyalar) . '<br>';

    //sadece php dosyalarını listele
    $dosyalar = glob('*.php');
    print_r($dosyalar) . '<br>';

    //sadece php ve txt dosyalarını listele
    $dosyalar = glob('*{php,txt}', GLOB_BRACE);
    print_r($dosyalar) . '<br>';

    function dosya_listele($dizin_adi)
    {
        $dosyalar = scandir($dizin_adi);
        echo '<ul>';
            foreach ($dosyalar as $dosya){
                if ( !in_array($dosya, ['.', '..']) ){
                    echo '<li>' . $dosya;
                    if ( is_dir($dizin_adi . '/' . $dosya) ){
                        dosya_listele($dizin_adi . '/' . $dosya);
                    }
                    echo '</li>';
                }
            }
        echo '</ul>';
    }

    dosya_listele('.');

    function listele($dizin_adi)
    {
        echo '<ul>';
            $dosyalar = glob($dizin_adi);
            foreach ($dosyalar as $dosya){
                echo '<li>' . $dosya;
                if (is_dir($dosya)){
                    listele($dosya . '/*');
                }
                echo '</li>';
            }
        echo '</ul>';
    }

    listele('*');
?>
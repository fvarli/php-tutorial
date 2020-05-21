<?php

function multi_upload($dosyalar)
{

    $sonuc = [];

    // hataları kontrol et
    foreach ($dosyalar['error'] as $index => $error){
        if ($error == 4){
            $sonuc['hata'] = 'Lütfen dosya seçin!!';
        } elseif ($error != 0){
            $sonuc['hata'][] = 'Dosya yüklenirken bir sorun oluştu #' . $dosyalar['name'][$index];
        }
    }

    // hata yoksa devam et
    if (!isset($sonuc['hata'])){

        // dosya uzantılarını kontrol et
        $gecerli_dosya_uzantilari = [
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif'
        ];

        foreach ($dosyalar['type'] as $index => $type){
            if (!in_array($type, $gecerli_dosya_uzantilari)){
                $sonuc['hata'][] = 'Dosya geçersiz bir formatta #' . $dosyalar['name'][$index];
            }
        }

        // boyutu kontrol et
        if (!isset($sonuc['hata'])){
            $maxBoyut = (1024 * 1024);

            foreach ($dosyalar['size'] as $index => $size){
                if ($size > $maxBoyut){
                    $sonuc['hata'][] = 'Dosya beklenenden fazla büyük boyutta #' . $dosyalar['name'][$index];
                }
            }

            // dosyaları yükle
            if (!isset($sonuc['hata'])){

                foreach ($dosyalar['tmp_name'] as $index => $tmp){
                    $dosyaAdi = $dosyalar['name'][$index];
                    $yukle = move_uploaded_file($tmp, 'uploads/' . $dosyaAdi);
                    if ($yukle){
                        $sonuc['dosya'][] = 'uploads/' . $dosyaAdi;
                    } else {
                        $sonuc['hata'][] = 'Dosya yüklenemedi! #' . $dosyaAdi;
                    }
                }

            }

        }

    }

    return $sonuc;

}

$sonuc = multi_upload($_FILES['dosya']);


if(isset($sonuc['dosya'])){
    print_r($sonuc['dosya']);
    if(isset($sonuc['hata'])){
        print_r($sonuc['hata']);
    }
}elseif(isset($sonuc['hata'])){
    if(is_array($sonuc['hata'])){
        echo implode('<br>',$sonuc['hata']);
    }else{
        print_r($sonuc['hata']);
    }
}
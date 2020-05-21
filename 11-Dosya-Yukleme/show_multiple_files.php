<?php

    function multi_upload($dosyalar){

        $sonuc = [];


        foreach ($dosyalar['error'] as $index=>$error) {
            // hataları kontrol et
            if ($error == 4) {
                $sonuc['hata'][] = "Lütfen dosya seçiniz!";
            } elseif ($error != 0) {
                $sonuc['hata'][] = "Lütfen dosya yüklenirken bir sorun oluştu!" . $dosyalar['name'][$index];
            }
        }

            //hata yoksa devam et

        if(isset($sonuc['hata'])){
            //dosya uzantılarını kontrol et
            $gecerli_dosya_uzantilari = [
                'image/jpeg',
                'image/jpg',
                'image/png',
                'image/gif'
            ];
            foreach ($dosyalar['type'] as $index=>$type){
                if(!in_array($type, $gecerli_dosya_uzantilari)){
                    $sonuc['hata'][] = "Dosya, geçersiz bir formatta.".$dosyalar['name'][$index];
                }
            }

            if(isset($sonuc['hata'])){
                //boyutu kontrol et
                $max_boyut = (1024 * 1024);
                foreach ($dosyalar['type'] as $index=>$size){
                    if($size > $max_boyut){
                        $sonuc['hata'][] = "Dosya boyutunuz büyük. Max: 1 MB".$dosyalar['name'][$index];
                    }
                }

                if(isset($sonuc['hata'])){
                    foreach ($dosyalar['tmp_name'] as $index=>$tmp_name){
                        $dosya_adi = $dosyalar['name'][$index];
                        $yukle = move_uploaded_file($tmp_name, 'uploads/'.$dosya_adi);
                        if($yukle){
                            $sonuc['dosya'][] = 'uploads/'.$dosya_adi;
                        }else{
                            $sonuc['hata'][] = "Dosya yüklenemedi".$dosya_adi;
                        }
                    }
                }
            }
        }

        return $sonuc;
    }

    $sonuc = multi_upload($_FILES['dosya']);


    if($sonuc['dosya']){
        print_r($sonuc['dosya']);
        if($sonuc['hata']){
            print_r($sonuc['hata']);
        }
    }elseif($sonuc['hata']){
        if(is_array($sonuc['hata'])){
            echo implode('<br>',$sonuc['hata']);
        }else{
            print_r($sonuc['hata']);
        }
    }
<?php
    //kendi kendini çağıran fonksiyon

        function say($sayi){
            echo $sayi;
            if ($sayi < 10) {
                say($sayi + 1);

            }
        }

         say(1);

        $kategoriler = [
            [
                'id' => 1,
                'parent' => 0,
                'ad' => 'Dersler'
            ],
            [
                'id' => 2,
                'parent' => 0,
                'ad' => 'Sınavlar',
            ],
            [
                'id' => 3,
                'parent' => 0,
                'ad' => 'Sonuçlar'
            ],
            [
                'id' => 4,
                'parent' => 1,
                'ad' => 'PHP'
            ],
        
            [
                'id' => 5,
                'parent' => 1,
                'ad' => 'Python'
            ],
            [
                'id' => 6,
                'parent' => 4,
                'ad' => 'Diziler'
            ],
            [
                'id' => 7,
                'parent' => 5,
                'ad' => 'Fonksiyonlar'
            ]
        ];

        function kategori_listele($kategoriler, $parent = 0){
            echo '<ul>';
            foreach ($kategoriler as $kategori){
                if ($kategori['parent'] == $parent) {
                    echo '<li>' . $kategori['ad'];
                    echo kategori_listele($kategoriler, $kategori['id']);
                    
                    echo '</li>';
                }
            }       
            echo '</ul>';
        }
        kategori_listele($kategoriler);

       $dizi_listele = [
           'ad' => 'Ferzender',
           'soyad' => 'Varli',
           'diller' =>[
               'Türkçe' => 'Ana dil',
               'İngilizce' => 'Gelişmiş',
               'Almanca' => 'Temel'
           ]
           ];

       function dizide_bul($dizi_listele, $anahtar)
       {

            foreach ($dizi_listele as $key => $value) {
                if ($key==$anahtar) {
                    return $value;
                }
                if (is_array($value)) {
                    $sonuc = dizide_bul($value, $anahtar);
                    if ($sonuc) {
                        return $sonuc;
                    }
                }
       
            }
            return false;
       }

        print_r(dizide_bul($dizi_listele, 'İngilizce'));
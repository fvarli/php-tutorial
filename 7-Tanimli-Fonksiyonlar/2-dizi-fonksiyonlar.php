<?php

    /*
        array_map() / dizi üzerinde oynama yeni bir şeyler ekleme
        array_filter()
        array_merge()
        array_rand()
        array_reverse()
        array_search()
        in_array()
        array_shift()
        array_pop()
        array_slice()
        array_sum()
        array_product()
        array_unique()
    */

        $dizi_islem =[1,2,3,4,5,6,7,8,9,10];
        $dizi_islemyap= array_map('islem', $dizi_islem);

        function islem($val){
        return $val*3;
        }
        print_r($dizi_islemyap);

        $dizi_filtre = ['Ferzender', '', 'Varli', ''];
        print_r($dizi_filtre);
        $filtrele=array_filter($dizi_filtre);
        print_r($filtrele);

        $arr = [1,2,3,4,5];
    $arr2 = array_filter($arr, function($item){
        return $item > 2 && $item < 5;
    });
    $arr2 = array_map(function($val){
        if ($val > 2 && $val < 5){
            return $val;
        }
    }, $arr);
    print_r($arr2);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr = array_merge($arr1, $arr2);
    print_r($arr) . '<br>';

    $arr = [
        'ad' => 'tayfun',
        'soyad' => 'erbilen',
        'yas' => 24,
        'site' => 'erbilen.net'
    ];
    $random = array_rand($arr, 2);
    $values = array_map(function($key) use($arr){
        return $arr[$key];
    }, $random);

    print_r($values) . '<br>';

    $arr = [1,2,3,4,5];
    print_r($arr) . '<br>';
    $arr = array_reverse($arr);
    print_r($arr) . '<br>';

    $arr = [
        'ad' => 'tayfun',
        'soyad' => 'erbilen',
        'a' => [
            'b' => [
                'c' => 'd'
            ]
        ]
    ];

    $test = array_search('d', $arr);

    function _array_search($cur_val, $arr)
    {
        foreach ($arr as $key => $val){
            if ($val == $cur_val){
                return true;
            }
            if (is_array($val)){
                return _array_search($cur_val, $val);
            }
        }
        return false;
    }

    $test = _array_search('d', $arr);
    echo $test . '<br>';

    $arr = [1,2,3,4];


    if (in_array('6', $arr))
    {
        echo '3 değeri var' . '<br>';
    } else {
        echo 'yok' . '<br>';
    }


    $arr = [1,2,3,4,5];
    $ilk_eleman = array_shift($arr);
    $son_eleman = array_pop($arr);
    print_r($arr) . '<br>';
    echo $son_eleman . '<br>';
    echo $ilk_eleman . '<br>';

    $arr = [1,2,3,4,5];

    //ilk 2 eleman hariç hepsi
    $arr2 = array_slice($arr, 2);
    print_r($arr2) . '<br>';

    $arr3 = array_slice($arr, 2, 2);
    print_r($arr3) . '<br>';

    $arr4 = array_slice($arr, -2);
    print_r($arr4) . '<br>';

    $arr = [1,2,3,4,5];
    $toplam = array_sum($arr);
    echo $toplam . '<br>';

    $carpim = array_product($arr);
    echo $carpim . '<br>';

    $arr = ['Ferzender','Varli','Ferzender','Varli','Mekatronik', 'Mühendisi'];
    print_r($arr);
    $arr2 = array_unique($arr);
    print_r($arr2);

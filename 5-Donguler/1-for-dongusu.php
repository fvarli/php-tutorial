<?php

for($i=1; $i<=10; $i++){
    echo $i . '<br>';
}

for($i=10; $i>=0; $i--){
     echo $i .'<br>';
}


$dizi=[
    'Galatasaray',
    'Fenerbahçe',
    'Beşiktaş',
    'Trabzonspor',
    'Bursaspor',
    'Karabükspor'
];

for ($i =0; $i <= ( count($dizi)-1); $i++){
     echo $dizi[$i] .'<br>';
}

for($i =(count($dizi)-1); $i>=0; $i--){
     echo $dizi[$i] .'<br>';
}
//Tek bir döngü çalıştırlırsa, yani tek satır, süslü paranteze gerek yok 
for($i=0; $i<=10; $i++):
    if($i ==3)   continue;
    echo $i .'<br>';
    if($i ==6)  break;
endfor; //end for da eklenebilir
?>
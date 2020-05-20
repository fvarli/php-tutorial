<?php

// arama kısmında
// üye kaydı
// uye-duzenle.php?id=5
//key=value&key=value
//?kelime=ferzender&id=5

print_r($_GET) . '<br>';


function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}

$_GET = array_map('form_filtrele', $_GET);

function get($name)
{
    if (isset($_GET[$name]))
        return $_GET[$name];
}




$id = (int) get('id');

if (!is_int($id) || !$id){
    echo 'ID sadece sayı olmalıdır';
    exit;
}


echo get('deneme');

echo request('kelime');

?>

<form action='' method='get'>
    Arama: <input type='text' name='kelime'>
</form>
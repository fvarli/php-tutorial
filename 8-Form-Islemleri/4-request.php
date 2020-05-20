<?php

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}

$_REQUEST = array_map('form_filtrele', $_REQUEST);

function request($name)
{
    if (isset($_REQUEST[$name]))
        return $_REQUEST[$name];
}




print_r($_REQUEST);

echo request('kelime');

?>

<form action="php-get.php?id=5" method="post">

    Arama:
    <input type="text" value="" name="kelime">
    <hr>

</form>
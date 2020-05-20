<?php

    print_r($_POST).  '<br>';

    echo $_POST['Ad'] .  '<br>';

    if (trim($_POST['Hakkimda'])==''){
        echo "Kendi hakkınızda bir şeyler ekeyin." . '<br>';
    }

    else {
        print_r($_POST). '<br>';
    }

   echo strip_tags($_POST['Hakkimda']) . '<br>';

   function form_filtrele($post)
   {
       return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
   }

   $_POST = array_map('form_filtrele', $_POST);

   function post($name)
   {
       if (isset($_POST[$name]))
           return $_POST[$name];
   }

   echo post('Hakkimda');

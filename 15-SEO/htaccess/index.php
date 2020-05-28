<a href="/php-tutorial/15-SEO/htaccess">Homepage</a> |
<a href="/php-tutorial/15-SEO/htaccess/about_us">About Us</a> |
<a href="/php-tutorial/15-SEO/htaccess/contact">Contact</a> |

<div style="background: yellow;">
<?php

if(!isset($_GET['page'])){
    $_GET['page'] = 'index';
}

switch ($_GET['page']){
    case 'index';
        require_once 'homepage.php';
    break;

    case 'about_us';
        require_once 'about_us.php';
        break;

    case 'contact';
        require_once 'contact.php';
        break;

    case 'category';
        require_once 'category.php';
        break;
}
?>
</div>
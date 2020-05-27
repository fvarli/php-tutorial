<a href="/">Homepage</a> |
<a href="index.php">About Us</a> |
<a href="index.php">Contact</a> |

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
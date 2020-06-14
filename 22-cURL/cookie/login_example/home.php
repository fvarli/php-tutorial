<?php

echo "Only users can see this page.";

echo '<br>';

if(isset($_POST['about_me'])){
    print_r($_POST);
}

?>

<form action="" method="post">
    <textarea name="about_me" id="" cols="30" rows="10"></textarea> <br> <br>
    <button type="submit" name="submit">Send</button>
</form>

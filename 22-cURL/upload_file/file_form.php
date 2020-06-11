<?php
    if(isset($_FILES['file']['name'])){
        print_r($_POST);
        echo '<br>';
        print_r($_FILES);
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    Full Name: <br>
    <input type="text" name="full_name"> <br> <br>
    CV: <br>
    <input type="file" name="file"> <br> <br>
    <button type="submit">Upload</button>
</form>

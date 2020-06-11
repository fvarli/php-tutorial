<?php
if(isset($_POST['submit'])){
    print_r($_POST);
}
?>

<form action="" method="post">
    Name: <br> <input type="text" name="name"> <br> <br>
    Surname: <br> <input type="text" name="surname"> <br> <br>
    Profession: <select name="profession">
        <option value="Engineer">Engineer</option>
        <option value="Developer">Developer</option>
    </select> <br> <br>
    <button type="submit" name="submit" value="1">Send</button>
</form>

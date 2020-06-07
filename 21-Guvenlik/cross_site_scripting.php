<?php

// XSS - Cross-site Scripting
// <script>js code</script>
//htmlspecialchars();
/*
if(isset($_POST['about_me'])){
    echo htmlspecialchars($_POST['about_me']);
}
*/

setcookie('test', 'fvarli', strtotime('+1 day'));
?>

<!--
<form action="" method="post">
    About me: <br><br>
    <textarea name="about_me" id="" cols="30" rows="10"></textarea><br><br>
    <button type="submit">Send</button>
</form>
-->
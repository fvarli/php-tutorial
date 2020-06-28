<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP E-mail</title>
</head>
<body>
<form action="send_email_by_form.php" method="post" enctype="multipart/form-data">
    <input type="text" name="email_address" placeholder="Type Email Address"><br><br>
    <input type="text" name="subject" placeholder="Type Email Subject"><br><br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="Type Your Message"></textarea><br><br>
    <input type="file" name="attachment"><br><br>
    <button type="submit">Send Email</button>
</form>
</body>
</html>
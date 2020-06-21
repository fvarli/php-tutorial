<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app.js"></script>
    <style>
        #success{
            padding: 10px;
            background: green;
            color: #fff;
            display: none;
        }
        #error{
            padding: 10px;
            background: red;
            color: #fff;
            display: none;
        }
    </style>
</head>

<div id="success"></div>
<div id="error"></div>

<body>
<form action="" method="post" id="contact-form" onsubmit="return false;">
    Full Name: <br>
    <input type="text" placeholder="Type Your Full Name" name="full_name" id="full_name"> <br> <br>
    E-mail: <br>
    <input type="email" placeholder="Type Your E-mail Address" name="email" id="name"> <br> <br>
    Your Message: <br>
    <textarea name="message" cols="30" rows="10" id="message"></textarea> <br> <br>
    <button type="submit" id="btn-send">Send</button>
</form>
</body>
</html>
<?php
?>
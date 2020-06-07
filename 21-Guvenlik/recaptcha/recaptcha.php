<script>
    var onloadCallback = function () {
        grecaptcha.render('security',{
            'sitekey': '6LfYMwEVAAAAAJEeEXKzDQE-eeEJI4Jisj2MIEdy'
        })
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=tr" async defer></script>

<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Your Name"> <br> <br>
    <div id="security"></div> <br><br>
    <button type="submit">Send</button>
</form>

<!--<div class="g-recaptcha" data-sitekey="6LfYMwEVAAAAAJEeEXKzDQE-eeEJI4Jisj2MIEdy"></div>-->
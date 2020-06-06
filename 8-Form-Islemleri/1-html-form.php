<form action ="2-gonder.php" method="post" enctype="multippart/form-data">

<!--
    input
    textarea
    file
    select
    redio
    checkbox
    multiple select
    button

-->

Ad: <br>
<!-- <input type="Text" name='Ad' readonly value="Ferzender Varli"> -->
<input type="Text" name='Ad'>
<br><br>
<hr>

Hakkımda: <br>
<textarea name="Hakkimda"  id="" cols="25" rows="10" placeholder="Hakkında bir şeyler yaz..."></textarea>
<br><br>

<hr>

Meslek: <br>
<select name="Meslek">
    <option>Seç</option>
    <option value="Muhendis">Mühendis</option>
    <option value="Doktor">Doktor</option>
    <option value="Ogretmen">Öğretmen</option>
</select>
<br><br>
<hr>

Cinsiyet: <br>
<label> <input type="radio" checked name="cinsiyet" value="Erkek">Erkek</label><br>
<label> <input type="radio" name="cinsiyet" value="Kadin">Kadın</label>
<br><br>
<hr>

İlgili Alanları: <br>
<label><input type="checkbox" name="ilgi_alanlari[]" value="Muzik">Müzik</label><br>
<label><input type="checkbox" checked name="ilgi_alanlari[]" value="Dans">Dans</label><br>
<label><input type="checkbox" name="ilgi_alanlari[]" value="Yuzme">Yüzme</label>
<br><br>
<hr>
Fotoğraf: <br>
<input type="file" name="fotograf">
<br><br>
<hr>
Gezdiği Ülkeler: <br>
<select name="Ulkeler[]" multiple size=6>
    <option value="Slovenya">Slovenya</option>
    <option value="Italya" selected>İtalya</option>
    <option value="Almanya">Almanya</option>
    <option value="Avusturya">Avusturya</option>
    <option value="Hirvatistan">Hırvatistan</option>
    <option value="Macaristan">Macaristan</option>
</select>
<br><br>
<hr>

<button type="submit">Gönder</button>

</form>

<?php


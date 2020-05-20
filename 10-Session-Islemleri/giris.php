<?php
    if(isset($_POST['submit'])){
        $kullanici_adi = $_POST['kullanici_adi'];
        $sifre = $_POST['sifre'];

        if(!$kullanici_adi || !$sifre){
            $hata = "Kullanıcı adı veya şifre giriniz";
        }elseif ($kullanici_adi !=$uye['kullanici_adi']){
            $hata = "Kullanıcı adınız hatalı.";
        }elseif ($sifre !=$uye['sifre']){
            $hata = "Şifreniz hatalı.";
        }else{

            $_SESSION['zaman'] = time()+30;
            $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];

            //header()
            header('Location:/php-tutorial/10-Session-Islemleri');
        }
    }
?>

<form action="" method="post">
    Kullanıcı Adı: <br>
    <input type="text" name="kullanici_adi">
    <hr>
    Şifre: <br>
    <input type="password" name="sifre" id="">
    <hr>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Giris Yap</button>
</form>

<hr>

<?php if (isset($hata)): ?>
    <div style="border: 1px solid red">
        <?php echo $hata;?>
    </div>
<?php endif; ?>

<?php
session_start();
if(isset($_SESSION["adi"])){
    header("Location: cerez.php");
}
if(isset($_POST["btn2"])){
    $_SESSION["kadi"]=$_POST["kullanici2"];
    $_SESSION["sifre"]=$_POST["sifre2"];
    $_SESSION["ad"]=$_POST["adsoyad"];

    if(isset($_POST["benihatirla"])){
        setcookie("adisoyadi",  $_SESSION["ad"], time()+(60*60*24));
        setcookie("benihatirla", $_POST["benihatirla"], time()+(60*60*24));
    }

    header("Location: giris.php");
}
if(isset($_POST["btn"])){
    if(empty($_POST["kullanici"] or $_POST["sifre"])){
        echo "Kullanıcı adı veya şifre boş bırakılamaz.";
    }
    elseif($_POST["kullanici"]==$_SESSION["kadi"] and $_POST["sifre"]==$_SESSION["sifre"]){
        if($_COOKIE["benihatirla"]=="hatirla"){
            $_SESSION["adi"]=$_COOKIE["adisoyadi"];
            }
        $_SESSION["adi"]=$_SESSION["ad"];
            header("Location: cerez.php");
    }
    elseif($_POST["kullanici"]==$kadi2 and $_POST["sifre"]==$sifre2){
        $_SESSION["adi2"]=$ad2;
        header("Location: cerez.php");
    }
    else{
        echo "Kullanıcı adı veya şifre yanlış";
    }
}
$kadi2="ahmet";
$sifre2="6789";
$ad2="Ahmet Yılmaz";
?>
<html>
    <body style="background-color: <?=$_COOKIE["bg"];?>;">
    <form action="giris.php" method="POST">
        <input type="text" name="kullanici" placeholder="Kullanıcı adı">
        <input type="password" name="sifre" placeholder="Şifre"><br><br>
        <input type="submit" name="btn" value="Giriş Yap">
    </form>
    </body  style="background-color: <?=$_COOKIE["bg"];?>;">
    <?php include("menu.php"); ?>
</html>

<?php
session_start();
if(isset($_POST["btn"])){
        $bgrenk=$_POST["renk"];
        setcookie("bg", $bgrenk, time()+(60*60*24), "/");
}
else if(isset($_COOKIE["bg"])){
$bgrenk=$_COOKIE["bg"];
}
?>
<html>
    <head>
        <title>Anasayfa</title>
    </head>
    <body style="background-color: <?=$bgrenk?>;">
    <?php include("menu.php"); ?>
        <form action="cerez.php" method="POST">
            <input type="radio" name="renk" value="red">Kırmızı<br>
            <input type="radio" name="renk" value="yellow">Sarı<br>
            <input type="radio" name="renk" value="aqua">Açık mavi<br>
            <input type="submit" name="btn" value="Rengi Seç">
        </form>
    </body>
</html>
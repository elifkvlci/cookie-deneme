<html>
<body>
<a href="cerez.php">Anasayfa</a>
<a href="iletisim.php">İletişim</a>
</body>
</html>
<?php
    if(isset($_SESSION["adi"])){
        echo "<a href='hesap.php'>".$_SESSION["adi"]."</a>";
        echo "<a href='cikis.php'>Çıkış</a>";
    }
    elseif(isset($_SESSION["adi2"])){
        echo "<a href='hesap.php'>".$_SESSION["adi2"]."</a>";
        echo "<a href='cikis.php'>Çıkış</a>";
    }
    else{
        echo "<a href='giris.php'>Giriş</a>";
        echo "<a href='uyeol.php'>Üye ol</a>";
    }
?>
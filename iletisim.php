<?php
session_start();
$rengimiz=$_COOKIE["bg"];
?>
<html>
    <body style="background-color: <?=$rengimiz?>;">
    <?php include("menu.php"); ?>
        iletişim
    </body>
</html>

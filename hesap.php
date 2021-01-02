<?php
session_start();
if(empty($_SESSION["adi"]) and empty($_SESSION["adi2"])){
    header("Location: cerez.php");
}
?>
<html>
    <head>
        <title>
            <?php
                if(isset($_SESSION["adi"])){
                    echo $_SESSION["adi"];
                }
                elseif(isset($_SESSION["adi2"])){
                    echo $_SESSION["adi2"];
                }
            ?>
        </title>
    </head>
    <body style="background-color: <?=$_COOKIE["bg"];?>;">
    <?php include("menu.php"); ?>
    Hesabım
    </body>
</html>
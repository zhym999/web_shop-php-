<?php
$dbHost = "127.0.0.1";
$dbUser = "root";
$dbPass = "root";
$dbName = "web_shop";
$dbPort = 3306 ;
$set = "utf-8";
$conn= new mysqli($dbHost, $dbUser, $dbPass,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">

    <title>demo_zhu</title>

    </head>
    <body>
    <?php include "top_login.php"  ?>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1> Votre meilleure gouvernante économique</h1>
    </div>

    <div class="container">
        <div class="row">

                <?php include ("middle.php") ?>

            </div>
        </div>
    </div>


    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Ci-dessous la vente aux enchères </h1>
    </div>

    <foot>
        <?php
        include ("foot.html")
        ?>
    </foot>
    </body>
</html>

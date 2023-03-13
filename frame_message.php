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
    <link rel="stylesheet" href="css/xiaomi.css">

</head>
<body>
<?php include "top_login.php"  ?>
<?php include "message.php" ?>

<foot>
    <?php
    include ("foot.html")
    ?>
</foot>
</body>
</html>





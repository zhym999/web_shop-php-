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
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/xiaomi.css">
</head>
<body>

<?php
include("top_login.php");
?>

<br>
<br>

<?php
$field = $_GET['act'];
if ($field != ""){
    $sql = "SELECT * FROM goods WHERE typeid='$field' ";
    $result=$conn->query($sql);
}
?>

<div class="danpin center">

    <div class="biaoti center">Product List
        <div class="main center">
            <?php
            while ($row = $result->fetch_assoc()) { ?>

                <div class="mingxing fl mb20" style="border:2px solid #fff;width:230px;cursor:pointer;" onmouseout="this.style.border='2px solid #fff'" onmousemove="this.style.border='2px solid red'">
                    <div class="sub_mingxing"><a href="#" target="_blank"><img src="product_img/new/<?php echo $row['picture'] ?>" >  </a></div>
                    <div class="pinpai"><a href="#" target="_blank"><?php echo $row['goodsname'] ?></a></div>
                    <div class="youhui"><?php echo $row['detail'] ?></div>
                    <div class="jiage">€<?php echo $row['price'] ?></div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>





</body>
</html>

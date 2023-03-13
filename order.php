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
    <title>info</title>
    <link rel="stylesheet" href="css/xiaomi.css">
    <style></style>

</head>
<body>
<br>
<br>
<br>

<?php
session_start();
error_reporting(5);
$email = $_SESSION['login'];
$sql = "SELECT * FROM userss U JOIN carts C ON u.uid =C.buyerid JOIN goods g on C.goodsid = g.goodsid  WHERE U.email ='$email' AND C.state=1";
$result=$conn->query($sql) or die(mysqli_error());
//$row = $result->fetch_assoc();

?>

<div class="grzxbj">
    <div class="selfinfo center">
        <div class="lfnav fl">
            <div class="ddzx">Order center</div>
            <div class="subddzx">
                <ul>
                    <li><a href="#" style="color:#ff6700;font-weight:bold;">My order</a></li>
                    <li><a href="">Evaluate</a></li>
                    <li><a href="">XXX</a></li>
                    <li><a href="">XXXXXXXX</a></li>
                </ul>
            </div>
            <div class="ddzx">My account</div>
            <div class="subddzx">
                <ul>
                    <li><a href="#" >Personal information</a></li>
                    <li><a href="">Message</a></li>
                    <li><a href="sale.php">Sale</a></li>
                    <li><a href="">XXXXXXX</a></li>
                </ul>
            </div>
        </div>
        <div class="rtcont fr">
            <div class="ddzxbt">Trade order</div>
            <?php
            while ($row = $result->fetch_assoc()) { ?>
            <div class="ddxq">
                <div class="ddspt fl"><img style="height: 80px ;width: 80px" src="product_img/new/<?php echo $row['picture'] ?>"></div>
                <div class="ddbh fl">ORDER ID:<?php echo $row['orderid'] ?></div>
                <div class="ztxx fr">
                    <ul>
                        <li>Already paid</li>
                        <li>€ <?php echo $row['price'] ?></li>
                        <li style="font-size: 15px"><?php echo $row['date'] ?></li>
                        <li><a href="">detail&gt;</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <?php } ?>

                <div class="clear"></div>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div>


</body>
</html>


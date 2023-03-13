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


<?php include 'top_login.php'?>

<?php
session_start();
error_reporting(5);
    if ($_SESSION['uid']){
        $uid = $_SESSION['uid'];
    }
    $sql = "SELECT * FROM notification WHERE uid='$uid'  ";
    $result=$conn->query($sql) or die(mysqli_error());
    $row = $result->fetch_assoc();
?>

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

<?php ?>

<div class="grzxbj">
    <div class="selfinfo center">
        <div class="lfnav fl">
            <div class="ddzx">Order center</div>
            <div class="subddzx">
                <ul>
                    <li><a href="frame_order.php">My order</a></li>
                    <li><a href="">Evaluate</a></li>
                    <li><a href="">XXX</a></li>
                    <li><a href="">XXXXXXXX</a></li>
                </ul>
            </div>
            <div class="ddzx">My account</div>
            <div class="subddzx">
                <ul>
                    <li><a href="frame_info.php" >Personal information</a></li>
                    <li><a href="frame_message.php" >Message</a></li>
                    <li><a href="sale.php">Sale</a></li>
                    <li><a href="notification.php" style="color:#ff6700;font-weight:bold;">Notification</a></li>
                </ul>
            </div>
        </div>
        <div class="rtcont fr">
            <div class="ddzxbt">Message</div>
            <div style="height: 30%;width: 80% ;margin-top:50px;margin-bottom:50px;margin-right:50px;margin-left:50px; ">
                <br>
                <br>
                <p style="font-size: 30px ;line-height: 1em">
                    <?php echo $row['notification']?>
                </p>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <div class="clear"></div>
</div>
</div>


</body>
</html>


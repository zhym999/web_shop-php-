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
$sql = "SELECT * FROM userss WHERE email='$email' ";
$result=$conn->query($sql) or die(mysqli_error());
$row = $result->fetch_assoc();

?>

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
                    <li><a href="#" style="color:#ff6700;font-weight:bold;">Personal information</a></li>
                    <li><a href="frame_message.php">Message</a></li>
                    <li><a href="sale.php">Sale</a></li>
                    <li><a href="">XXXXXXX</a></li>
                </ul>
            </div>
        </div>
        <div class="rtcont fr">
            <div class="grzlbt ml40">Personal information</div>
            <div class="subgrzl ml40"><span>Uname</span><span><?php echo $row['uname'] ?></span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Phone</span><span><?php echo $row['uphone'] ?></span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Password</span><span>************</span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Email</span><span><?php echo $row['email'] ?></span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Address1</span><span><?php echo $row['address'] ?></span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Address2</span><span><?php echo $row['address2'] ?></span><span><a href="">Edit</a></span></div>
            <div class="subgrzl ml40"><span>Address3</span><span> <?php echo $row['address3'] ?></span><span><a href="">Edit</a></span></div>

        </div>
        <div class="clear"></div>
    </div>
</div>


</body>
</html>

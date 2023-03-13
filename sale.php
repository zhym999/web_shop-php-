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
    <div class="selfinfo center" style="height: 600px">
        <div class="lfnav fl" style="height: 550px">
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
                    <li><a href="frame_message.php">Message</a></li>
                    <li><a href="" style="color:#ff6700;font-weight:bold;">Sale</a></li>
                    <li><a href="">XXXXXXX</a></li>
                </ul>
            </div>
        </div>

        <form action="sale_act.php" method="post" enctype="multipart/form-data">
        <div class="rtcont fr" style="height: 550px">
            <div class="grzlbt ml40">I list products</div>
            <div class="subgrzl ml40"><span>name </span> <input id="name" type="text" style="width: 300px ;height: 30px; font-size: 25px""></div>
            <div class="subgrzl ml40"><span>
                <label for="type" >type</label></span>
                    <select name="type" id="type" style="width: 100px ;height: 30px; font-size: 15px"">
                        <option value="phone">phone</option>
                        <option value="book">book</option>
                        <option value="clothing">clothing</option>
                        <option value="pc">pc</option>
                        <option value="food">food</option>
                        <option value="cosmetic">cosmetic</option>
                        <option value="other">other</option>
                    </select>
                </div>
            <div class="subgrzl ml40"><span>intro</span> <input id="intro" type="text" style="width: 300px ;height: 30px; font-size: 25px""></div>
            <div class="subgrzl ml40"><span>price</span> <input id="price" type="text" style="width: 300px ;height: 30px; font-size: 25px""></div>
            <div class="subgrzl ml40"><span>details</span> <input id="details" type="text" style="width: 300px ;height: 30px; font-size: 25px""></div>
            <div class="subgrzl ml40"><span >image</span> <input id="inage" type="file" style="width: 300px ;height: 30px; font-size: 15px""></div>
            <div class="subgrzl ml40"><span>address</span> <input id="address" type="text" style="width: 300px ;height: 30px; font-size: 25px" ></div>
            <div class="subgrzl ml40"><span>
                <label for="status" >statue</label></span>
                <select name="status" id="status" style="width: 100px;height: 30px ; font-size: 15px">
                    <option value="phone">new</option>
                    <option value="phone" >user</option>
                </select>
                <input type="submit" value="submit">
            </div>
        </div>
        </form>
        <div class="clear"></div>
    </div>
</div>

</body>
</html>

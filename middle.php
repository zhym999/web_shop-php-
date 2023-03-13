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
    <title>middle</title>

<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/xiaomi.css">

</head>
<body>
        <?php
        $sql = "SELECT * FROM goods WHERE hot=1 order by 'goodsid' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        ?>


<div class="danpin center"><div></div>

    <div class="biaoti center">Hot Product
        <div class="main center">
            <?php
            for ($i=0;$i<5;$i++){ ?>


                <div class="mingxing fl mb20" style="border:2px solid #fff;width:230px;cursor:pointer;" onmouseout="this.style.border='2px solid #fff'" onmousemove="this.style.border='2px solid red'">
                    <div class="sub_mingxing"><a href="product.php?key_id=<?php echo  $row['goodsid']?>" target="_blank"><img src="product_img/new/<?php echo $row['picture'] ?>" >  </a></div>
                    <div class="pinpai"><a href="product.php?key_id=<?php echo  $row['goodsid']?>" target="_blank"><?php echo $row['goodsname'] ?></a></div>
                    <div class="youhui"><?php echo $row['detail'] ?></div>
                    <div class="jiage">€<?php echo $row['price'] ?></div>
                </div>

            <? $result++;$row = $result->fetch_assoc();?>

    <?php } ?>
        </div>
    </div>
</div>



</body>
</html>

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
}

session_start();
error_reporting(5);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/xiaomi.css">
<!--    <script src="js/panier2.js"></script>-->
<!--    <script src="jquery/jquery-3.6.3.js"></script>-->

    <!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
</head>
<body>

<?php include "top_login.php" ?>
<br>
<br>
<br>




<div class="gwcxqbj" style="height: 800px">
    <div class="gwcxd center" >
        <div class="top2 center">
            <div class="sub_top fl" style="font-size: 19px">
                <input type="checkbox" value="quanxuan" class="quanxuan" id="all" >Total
            </div>
            <div class="sub_top fl" style="font-size: 19px">Name</div>
            <div class="sub_top fl" style="font-size: 19px">price</div>
            <div class="sub_top fl" style="font-size: 19px">num</div>
            <div class="sub_top fl" style="font-size: 19px">Total</div>
            <div class="sub_top fr" style="font-size: 19px">option</div>
            <div class="clear"></div>
        </div>
        <form >
            <?php
            $uid = $_SESSION['uid'];
            $sql = "select * from carts c join goods g on c.goodsid = g.goodsid where buyerid='$uid' ";
            $result=$conn->query($sql) or die(mysqli_error());
            $num = $result->num_rows;
            ?>
            <input type="hidden" id="count" name="count" value="<?php echo $num?> ">

            <?php
            for ($i=0;$i<$num; $i++){
                $row = $result->fetch_assoc();
                ?>
                <div class="content2 center">

                    <div class="sub_content fl ">
                        <input type="checkbox" name="checkbox[]" class="quanxuan single">
                    </div>

                    <div class="sub_content fl"><img style="height: 80px;width: 80px" src="product_img/<?php echo $row['status'] ?>/<?php echo $row['picture']  ?>  "></div>
                    <div class="sub_content fl ft20"> <?php echo $row['goodsname']?> </div>
                    <div class="sub_content fl " >
                        <span  class="price" date-price=<?php echo $row['price']?>" > <?php echo $row['price']?></span></div>
                    <div class="sub_content fl">
                        <input class="shuliang" type="number"   min="1" value="1">
                    </div>
                    <div class="sub_content fl " >
                        <span  class="xiaoprice" > <?php echo $row['price']?></span></div>
                    <div class="sub_content fl"><a href="panier2.php?del=<?php echo $row['orderid']; ?>×</a></div>
                    <div class="clear"></div>
                </div>

            <?php } ?>
    </div>

    <?php
         if (isset($_GET['del'])){
             $oid = $_GET['del'];
             $sql4 = "delete from carts where orderid = '".$oid. "'  ";
             $result4=$conn->query($sql4) or die(mysqli_error());
             echo ('<script type="text/javascript"> 
                     window.location.href="panier2.php";
                    </script> ' );

         }
    ?>

    <div class="jiesuandan mt20 center">
        <div class="tishi fl ml20">
            <ul>
                <li><a href="index.php">Back</a></li>
                <li>|</li>
                <li>Total<span id=""> <?php echo $num?></span>Selected<span id="allnum" class="allnum">0</span></li>
            </ul>
        </div>
        <div class="jiesuan fr">
            <div class="jiesuanjiage fl">TOTAL：<span id="allprice" class="allprice">0.0</span></div>
            <div class="jsanniu fr"><input class="jsan" type="submit" name="jiesuan" value="PAY"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    </form>
</div>


<?php include "foot.html " ?>
</body>

<script type="text/javascript" src="js/2.js"></script>

</html>

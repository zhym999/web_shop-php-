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
    <script src="js/panier.js"></script>
    <script src="jquery/jquery-3.6.3.js"></script>

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
                <input type="checkbox" value="quanxuan" class="quanxuan" >Total
            </div>
            <div class="sub_top fl" style="font-size: 19px">Name</div>
            <div class="sub_top fl" style="font-size: 19px">price</div>
            <div class="sub_top fl" style="font-size: 19px">num</div>
            <div class="sub_top fl" style="font-size: 19px">Total</div>
            <div class="sub_top fr" style="font-size: 19px">option</div>
            <div class="clear"></div>
        </div>
        <form action="pay.php" method="post" name="f">
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
                        <input type="checkbox" name="checkbox[]" value="<?php echo $i ?>" id="checkbox<?php echo $i ?>"
                               onclick="checkbox() " onchange="amoney()">
                    </div>

                    <input type="hidden" name="goodsid<?php echo $i ?>"   value=" <?php echo $row['c.goodsid']?> ">
                    <input type="hidden" name="salerid<?php echo $i ?> " value=" <?php echo $row['salerid']?> ">
                    <input type="hidden" name="goodsname<?php echo $i ?>"  value=" <?php echo $row['goodsname']?> ">
                    <input type="hidden" name="price<?php echo $i ?>"  value=" <?php echo $row['price']?> ">


                    <div class="sub_content fl"><img style="height: 80px;width: 80px" src="product_img/<?php echo $row['status'] ?>/<?php echo $row['picture']  ?> "></div>
                    <div class="sub_content fl ft20"> <?php echo $row['goodsname']?> </div>
                    <div class="sub_content fl " >   <span  id="price <?php echo $i ?>" > <?php echo $row['price']?></span></div>
                    <div class="sub_content fl">
                        <input class="shuliang" type="number" value="1"  min="1" onclick="amoney()" onkeyup="amoney()"
                                        name="number<?php echo $i ?>" onchange="comp(<?php echo $i ?>)" id="num<?php echo $i ?>" >
                    </div>
                    <div class="sub_content fl"> <span ><?php echo $row['price'] ?> </span></div>
                    <div class="sub_content fl"><a href="">×</a></div>
                    <div class="clear"></div>
                </div>

            <?php } ?>
    </div>
    <div class="jiesuandan mt20 center">
        <div class="tishi fl ml20">
            <ul>
                <li><a href="index.php">Back</a></li>
                <li>|</li>
                <li>Total<span id=""> <?php echo $num?></span>Selected<span id="allnum">0</span></li>
            </ul>
        </div>
        <div class="jiesuan fr">
            <div class="jiesuanjiage fl">合计（不含运费）：<span id="allprice">0.0</span></div>
            <div class="jsanniu fr"><input class="jsan" type="submit" name="jiesuan" value="去结算"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    </form>
</div>


<?php include "foot.html " ?>
</body>


</html>
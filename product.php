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


session_start();
error_reporting(5);
ob_start();

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
$goodskey_id=$_GET['key_id'];
if ($goodskey_id != ""){
    $sql = "SELECT * FROM goods WHERE goodsid=$goodskey_id ";
    $result=$conn->query($sql) or die(mysqli_error());
    $row = $result->fetch_assoc();
}


if (isset($_GET['sessionID'])){
    if (!isset($_SESSION['login'])){
        header('location:http://localhost/1erphp/login/login.php');
        ob_end_flush();
    }
    if(isset($_GET['delete'])){
        unset($_SESSION['login']);
        header("location:http://localhost/1erphp/index.php");
    }
}
//buyer
$email = $_SESSION['login'];
$query_B ="SELECT * FROM userss WHERE email='$email'" ;
$result_B =$conn->query($query_B) or die(mysqli_error());
$row_B = $result_B->fetch_assoc();
$email_B =$row_B['uid'];



//saler
$query_S ="SELECT * FROM userss WHERE uid= '".$row['userid']. "'   ";
$result_S =$conn->query($query_S) or die(mysqli_error());
$row_S = $result_S->fetch_assoc();
print $row_S;


//verify cart  这里加几个条件
if (isset($_GET['sessionID'])) {
    $goodskey_id1 = $_GET['sessionID'];
    $query_C = "SELECT * FROM carts WHERE goodsid = '$goodskey_id1' and buyerid ='$email_B'  ";
    $result_C = $conn->query($query_C) or die(mysqli_error());
    if ($result_C) {
        $row_C = $result_C->fetch_assoc();
        if ($row_C) {
            echo('<script type="text/javascript">
                    alert("Do not resubmit orders!");
                    window.location.href=" product.php?key_id= ' . $row_C['goodsid'] . ' "
                    </script>');
            exit();
        }else {
//insert data
            $sql2 = "INSERT INTO carts (buyerid,buyername,salerid,cost,goodsid,date)
              values ('" . $row_B['uid'] . "' , '" . $row_B['uname'] . "','" . $row_S['uid'] . "','" . $row['price'] . "','" . $row['goodsid'] . "',now()) ";
            $result_D = $conn->query($sql2) or die(mysqli_error());
            if ($result_D) {
                echo('<script type="text/javascript">
                        alert("success");
                        window.location.href=" product.php?key_id= '. $goodskey_id1.' "
                        </script>');
                exit();
            }
        }
    }
}


?>

<br>
<br>

<form action="" method="">
    <div class="xiangqing">
        <div class="neirong w">
<!--            <div class="xiaomi6 fl">--><?php //  echo  $row['goodsname']  ?><!--</div>-->
            <nav class="fr">
                <li><a href="#">Overview</a></li>
                <li>|</li>
                <li><a href="#">zhu yiming </a></li>
                <li>|</li>
                <li><a href="#">Parameters</a></li>
                <li>|</li>
                <li><a href="#comment">User Evaluation</a></li>
                <div class="clear"></div>
            </nav>
            <div class="clear"></div>
        </div>
    </div>

    <div class="jieshao mt20 w">
        <div class="left fl"><img  width="560px" height="560px"  src="product_img/<?php echo $row['status'] ?>/<?php echo $row['picture']  ?> "></div>
        <div class="right fr">
            <div class="h3 ml20 mt20"><?php   echo  $row['goodsname']  ?></div>
            <br>
            <div class="jianjie mr40 ml20 mt10"><?php   echo  $row['intro']  ?></div>
            <br>
            <div class="jianjie mr40 ml20 mt10"><?php   echo  $row['dedail']  ?></div>
            <br>

            <div class="jiage ml20 mt10"><span class="glyphicon glyphicon-euro"></span> <?php   echo  $row['price']  ?></div>
            <div class="ft20 ml20 mt20">choice</div>
            <div class="xzbb ml20 mt10">
                <div class="banben fl">
                    <a>
                        <span> Small </span>
                        <span><span class="glyphicon glyphicon-euro"></span> <?php   echo  $row['price']  ?></span>
                    </a>
                </div>
                <div class="banben fr">
                    <a>
                        <span>  Big </span>
                        <span><span class="glyphicon glyphicon-euro"></span> <?php   echo  $row['price']*1.2  ?></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="ft20 ml20 mt20">status</div>
            <div class="xzbb ml20 mt10">
                <div class="banben">
                    <a>
                        <span class="yuandian"></span>
                        <span class="yanse"><?php   echo  $row['status']  ?></span>
                    </a>
                </div>

            </div>
            <div class="ft20 ml20 mt20">address:<?php   echo $row['address']  ?> </div>

            <div class="xiadan ml20 mt20">
                <a href=""><input class="jrgwc" type="button" name="jrgwc" value="Buy"></a>
                <a href="product.php?key_id=<?php echo $goodskey_id;?>&sessionID=<?php echo $goodskey_id; ?>"><input class="jrgwc" type="button" name="jrgwc" value="Shopping cart"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</form>

<br>
<br>
<?php include "P_comment.php"?>


<?php //  print $row_B['uname']."000".$row_S['uname']."002".$email_B."11111100".$row_C['orderid'];
//?>

<?php  include "foot.html" ?>
<?php
//
//$sql2 = "INSERT INTO carts (buyerid,buyername,salerid,cost,goodsid)
//          values ('".$row_B['uid']."' , '".$row_B['uname']."','".$row_B['uid']."','".$row_S['uid']."','".$row['price']."','".$row['goodsid']."') ";
//$conn->query($sql2) or die(mysqli_error());
//echo ('<script type="text/javascript">
//                alert("Do not resubmit orders!");
//                window.location.href=" product.php?key_id= '.$goodskey_id.' ";
//                </script>'); exit() ;
//
//
//?>

</body>
</html>

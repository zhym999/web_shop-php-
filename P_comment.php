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
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>comment</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<br>
<br>
<hr>


            <div class="container" id="comment" >
                <h1>Evaluation</h1>
            <?php
            $goodskey_id=$_GET['key_id'];
            $sql = "SELECT * FROM comment JOIN goods g ON comment.goodsid = g.goodsid WHERE g.goodsid='$goodskey_id' ";
            $result=$conn->query($sql) or die(mysqli_error());
            $row = $result->fetch_assoc();
            ?>


                <div class="row ">

                    <div class="col-md-3 bg-success"  >
                        <h3>UID: <?php  echo $row['userid']  ?></h3>
                        <h4>Detail</h4>
                        <p><?php  echo $row['detail']  ?></p>
                        <h4>Note</h4>
                        <p> <?php  echo $row['level']  ?> <span class="glyphicon glyphicon-star"></span></p>
                    </div>

                    <div class="col-md-5" >
                                <p style="font-size: 18px"> <?php  echo $row['value']  ?> </p>
                    </div>

                </div>

            </div>
            <br>
            <hr>


</body>
</html>


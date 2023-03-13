<?php
session_start();
$dbHost = "127.0.0.1";
$dbUser = "root";
$dbPass = "root";
$dbName = "web_shop";
$dbPort = 3306 ;
$conn= new mysqli($dbHost, $dbUser, $dbPass,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(5);
if(isset($_GET['delete'])){
    unset($_SESSION['login']);
    header("index.php");
}
?>
<!DOCTYPE html>

<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">

    <title>demo_zhu</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="/jquery/jquery-3.6.3.js" type="text/javascript " charset="utf-8"></script>
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript " charset="utf-8"></script>
    <style>
        .navbar-header img{width: 100px;height: 45px}
    </style>

</head>

<body>



<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>


</div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="img/logo.png" alt="ece" class="img-circle">
        </div>
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"> -agora</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">XXXX</a></li>
                <li><a href="#">XXXX</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        XXXX <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">jmeter</a></li>
                        <li><a href="#">EJB</a></li>
                        <li><a href="#">Jasper Report</a></li>
                        <li class="divider"></li>
                        <li><a href="#">分离的链接</a></li>
                        <li class="divider"></li>
                        <li><a href="#">另一个分离的链接</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Category <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="class.php?act=1">phone</a></li>
                        <li><a href="class.php?act=2">pc</a></li>
                        <li><a href="class.php?act=3">clothing</a></li>
                        <li><a href="class.php?act=4">food</a></li>
                        <li><a href="class.php?act=5">book</a></li>
                        <li><a href="class.php?act=6">cosmetic</a></li>



                    </ul>
                </li>
            </ul>


            <form class="navbar-form navbar-left" role="search" method="get" name="search" action="search.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search" id="search">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>


            <?php
            $sql = "SELECT * FROM userss WHERE email= '".$_SESSION['login']."'  ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
                if(isset($_SESSION['login'])){
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?delete=1"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                <li><a href="panier2.php"><span class="glyphicon glyphicon-shopping-cart"></span> panier</a></li>
<!--                <li><a href="#"><span class="glyphicon glyphicon-home"></span > votre compte</a></li>-->
                <li><a href="frame_info.php"><span class="glyphicon glyphicon-user"></span> <?php echo $row['uname'] ?></a></li>
                <li><a href="sale.php"><span class="glyphicon "></span> sale</a></li>
            </ul>
            <?php }else{?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login/register.php"><span class="glyphicon glyphicon-user"></span> register</a></li>
                <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
            </ul>
            <?php }?>
        </div>
    </div>
</nav>


<!--<div style="width: 1200px;height: 2000px;border:1px solid red; margin: 0 auto; margin-top:30px"></div>-->

</body>
</html>

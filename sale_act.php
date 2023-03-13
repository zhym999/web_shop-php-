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

<?php
session_start();
error_reporting(5);


        if ($_SESSION['uid']){
            $uid = $_SESSION['uid'];
        }
        $name=$_POST['name'];
        $intro=$_POST["intro"];
        $price=$_POST["price"];
        $details=$_POST["details"];
        $address=$_POST["address"];
        $status=$_POST["status"];
        $type=$_POST["type"];
//
//
        if($intro==null or $price==null or $details==null or $address==null ){
                    die("Veuillez entrer  info");
                }
//
//        $pword=md5($pword);
        $query="insert into goods ( goodsname, category, intro, detail, price, userid,address, status ,picture) value ('$name','$type', '$intro' , '$details' , '$price' ,'$uid' ,'$status','xiaomi12.png' )";
        $result = $conn->query($query);

        if ($result){
            echo ('<script type="text/javascript">alert("success");
                                    window.location.href="../index.php"
                                    </script>
                                    ');
        }else{
            echo ('<script type="text/javascript">alert("defaut")</script>');}


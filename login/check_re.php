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


            error_reporting(0);
            $email=$_POST["email"];
            $pword=$_POST["pword1"];
            $uname=$_POST["name"];
            $uphone=$_POST["num"];

            $query = "SELECT * FROM userss WHERE email='$email'";
            $result = $conn->query($query);
            print_r($result);
            if ($result){
                $row = $result->fetch_assoc();
                if ($row){
                    echo ('<script type="text/javascript">alert("email existe déjà")</script>');
                }else{
                $pword=md5($pword);
                $query="INSERT INTO userss(email,password,uname,uphone) VALUES ('$email','$pword','$uname','$uphone')";
                $result2 = $conn->query($query);

                if ($result2){
                    echo ('<script type="text/javascript">alert("success");
                            window.location.href="../index.php"
                            </script>
                            ');
                }else{
                    echo ('<script type="text/javascript">alert("defaut")</script>');}
                    }
            }



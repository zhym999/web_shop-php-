<?php
$dbHost = "127.0.0.1";    //数据库地址
$dbUser = "root";        //此处直接赋值为root，实际使用应该是用户登录输入自己的账号。
$dbPass = "root";        //此处直接赋值为root，实际使用应该是用户登录输入自己的密码。
$dbName = "web_shop";
$dbPort = 3306 ;
//$CharSet="gb2312";

$conn= new mysqli($dbHost, $dbUser, $dbPass,$dbName);
//mysqli_query($conn,"SET NAMES 'UTF8'" ) ;
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT * FROM userss";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['uname']

//if ($result->num_rows > 0) {
//    // 输出数据
//    while($row = $result->fetch_assoc()) {
//        echo "Email: " . $row["uname"]. " - Password: " . $row["password"]. " - SMTP: " . $row["smtp"]. "<br>";
//    }
//} else {
//    echo "0 结果";
//}
//$conn->close();
?>



<script type="text/javascript">
    // console.log($row[1]);
</script>
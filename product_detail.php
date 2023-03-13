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
    <title>deta</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<?php
$sql = "SELECT * FROM goods WHERE hot=1 order by 'goodsid' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>




</body>
</html>

<?php
session_start();
require '../conf.php';
error_reporting(5);

    $email=$_POST["email"];
    $pword=$_POST["pword"];
    if($email==null or $pword==null){
        die("Veuillez entrer le mot de passe du compte");
    }

    $pword=md5($pword);
    $query="SELECT * FROM userss WHERE email='$email'AND password='$pword'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if($row){
        echo('<script type="text/javascript">
                window.location.href ="../index.php";
                </script>');
        echo "<script>alert('登录成功')</script>";

            $_SESSION['login'] = $email;
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['uid'] = $row['uid'];

        exit();
    }
    else{
              echo ('<script type="text/javascript">alert("Erreur de compte ou de mot de passe");
    window.location.back;
</script>') ;
        }








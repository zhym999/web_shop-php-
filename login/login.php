<?php
require "../conf.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">

    <title>login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="/jquery/jquery-3.6.3.js" type="text/javascript " charset="utf-8"></script>
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript " charset="utf-8"></script>
    <style>
        .navbar-header img{width: 100px;height: 45px}
        body{
            background: #0e84b5 url("img/bizi2.jpg")center/cover no-repeat;
            height: 100vh;
            overflow: hidden;
            color: black;
        }
    </style>
</head>
<body>

<div></div>
<br>
<div></div>
<br><div></div>
<br>
<div></div>
<br>
<div></div>
<br><div></div>
<br>



<form class="form-horizontal" role="form" method="post" action="check.php">
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">email</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="email" placeholder="entre uaname" name="email">
        </div>
    </div>
    <div class="form-group">
        <label for="pword" class="col-sm-2 control-label">password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="pword" placeholder="entre password" name="pword">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">se souvenir du mot de passe
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">login</button>
            <a href="register.php" class="btn btn-default"> register</a>
        </div>
    </div>

</form>

<!-- /.modal -->


</body>
</html>
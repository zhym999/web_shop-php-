<?php
require "../conf.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">

    <title>register</title>
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

<form name="form_reg" class="form-horizontal" role="form" method="post" action="check_re.php"  >
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">uname</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="entre uaname" >
        </div>
    </div>
    <div class="form-group">
        <label for="pword1" class="col-sm-2 control-label">password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="pword1" name="pword1" placeholder="entre password" >
        </div>
    </div>
    <div class="form-group">
        <label for="pword2" class="col-sm-2 control-label">confirmer password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="pword2" name="pword2" placeholder="confirmer password" >
        </div>
    </div>
    <div class="form-group">
        <label for="num" class="col-sm-2 control-label">Numéro de téléphone</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="num" name="num" placeholder="entre Numéro de téléphone(Facultatif)" >
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">email</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="email" name="email" placeholder="entre email" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" onclick="return check();">confirmer</button>
        </div>
    </div>

</form>

<script type="text/javascript">
    function check() {
        var upword1 = document.forms["form_reg"]["pword1"].value;
        if (upword1 == null || upword1 == "")
        {
            alert("enter code");
            document.form_reg.pword1.focus();
            return false;
        }
        var a = /^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/;
        if (!a.test(upword1)) {
            alert("mauvais format");
            document.getElementById("pword1").value = "";
            document.form_reg.pword1.focus();
            return false
        }
        var upword2 = document.forms["form_reg"]["pword2"].value;
        if (upword2 == null || upword2 == "") {
            alert("confirmer password")
            document.form_reg.pword2.focus();
            return false;
        }
        if (upword1 != upword2) {
            alert("diff");
            document.getElementById("pword2").value = "";
            document.form_reg.pword2.focus();
            return false;
        }
        var uname = document.forms["form_reg"]["name"].value;
        if (uname == null || upword1 == "") {
            alert("enter uname");
            document.form_reg.name.focus();
            return false;
        }
        var b = /^.{2,12}$/;
        if (!(b.test(uname))) {
            alert("uname mauvais format");
            document.getElementById("name").value = "";
            document.form_reg.name.focus();
            return false;
        }
        var unum = document.forms["form_reg"]["num"].value;
        if (unum == null || unum == "") {
            alert("enter number");
            document.form_reg.num.focus();
            return false;
        }
        var c = /^0[6|7]\d{8}$/;
        if (!(c.test(unum))) {
            alert("uphone mauvais format");
            document.getElementById("num").value = "";
            document.form_reg.num.focus();
            return false;
        }
    }
</script>

</body>
</html>
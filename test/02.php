
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            var y = document.forms.myForm.fname.value;
            if (y == null || y == "") {
                alert("需要输入名字。");
                return false;
            }
        }
    </script>
</head>
<body>

<form name="myForm" action="demo_form.php"
      onsubmit="return validateForm()" method="post">
    名字: <input type="text" name="fname">
    <input type="submit" value="提交">
</form>

</body>
</html>
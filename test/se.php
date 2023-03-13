


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/panier.js"></script>
    <!--    <link rel="stylesheet" href="../jquery/jquery-3.6.3.js">-->
</head>
<body>
<?php
for ($i=0;$i<5; $i++){

    ?>

    <div>
        <input type="checkbox" name="checkbox[]" value="<?php echo $i ?>" id="checkbox<?php echo $i ?>"
               onclick="checkbox()" onchange="">

        <p id="111">dasdasd <?php echo $i ?></p>
    </div>


<?php } ?>

<p id="allnum">0</p>
</body>

<script>
    // function cc() {
    //     var checkbox = document.getElementsByName("checkbox[]");
    //     var count = 0;
    //     for (var i=0;i<checkbox.length;i++){
    //         if (checkbox[i].checked){
    //             count++;
    //         }
    //     }
    //     document.getElementById('allnum').innerText=count;
    // }
    // function checkbox(){
    //     var checkbox = document.getElementsByName("checkbox[]");
    //     var checkbox_count = 0;
    //     for (var i=0; i<checkbox.length;i++){
    //         if (checkbox[i].checked){
    //             checkbox_count++;
    //         }
    //     }
    //     document.getElementById("allnum").innerText=checkbox_count;
    // }
</script>
</html>

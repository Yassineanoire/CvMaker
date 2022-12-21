<?php

session_start();
include 'config.php';


if(isset($_POST['btn1'])){
    header("location:cv1.php");
}
if(isset($_POST['btn2'])){
    header("location:style.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/style2.css">
    <title>Document</title>
</head>
<body>
    <h1>choose ur style</h1>
    <div class="style">
        
        <img src="../images/Screenshot_10.png" alt="">
        <form method="post">
        <button  name="btn1">this theme</button>
</form>

        <img src="../images/Screenshot_9.png" alt="">
        <form method="post">
        <button name="btn2" >this theme</button>
        </form>
    </div>
    </div>
</body>
</html>
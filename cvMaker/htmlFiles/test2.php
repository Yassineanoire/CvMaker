<?php 
include_once('config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv</title>
</head>
<body>
   
<img src="../images/<?php 
    echo $row['imgs'];
?>"
 alt="">
 <?php

 $sql1="DELETE FROM `img` LIMIT 1";
 $result = $conn->query($sql1);
 
 ?>
</body>
</html>
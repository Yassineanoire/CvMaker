<?php 
session_start();
include 'config.php';

   
$sql = "select * from img limit 1";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc()
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cssFiles/test2.css">
    <title>cv</title>
</head>
<body>
    <section class="main">
    <div class="firstc">
        <img src=" ../images/<?php 
    echo $row['imgs'];
?>" alt="" id="fimg">
      
    </div>

    <hr>
    <section class="ec">
    <h1>informations</h1>
    <h1 id="jj">Education</h1>
</section>
    <section class="inf">
        <div class="infor2">
        <div class="infor">
       <div class="name"> Fname : <?php echo $_SESSION['fname']; ?></div>
       <div class="prenom"> lname: <?php echo $_SESSION['lname']; ?></div>
       <div class="phone">phone:<?php echo $_SESSION['phone']; ?> </div>
       <div class="email">email:<?php echo $_SESSION['email']; ?></div>
    </div>
</div>
    <div class="infor3">
    
        
        <div class="infor">
        <div class="name"> <?php echo $_SESSION['date1']; ?>:<?php echo $_SESSION['college']; ?></div>
        <div class="prenom"> <?php echo $_SESSION['date2']; ?>:<?php echo $_SESSION['highs']; ?></div>
        <div class="phone"><?php echo $_SESSION['date3']; ?>:<?php echo $_SESSION['university']; ?></div>
        <div class="email"></div>
    </div>
    </div>
    </section>
    <section class="skills">
        <h1>Skills</h1>
        <div class="infor2">
        
      <p><?php echo $_SESSION['skills']; ?></p>
      <?php

 $sql1="DELETE FROM `img` LIMIT 1";
 $result = $conn->query($sql1);
 
 ?>
    </div> 
    </section>
</section>
</body>
</html>
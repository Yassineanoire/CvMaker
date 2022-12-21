<!DOCTYPE html>
<?php 
session_start();
include 'config.php';

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../cssFiles/anothers.css">
    </head>
    <body>
      <div class="img" >
<div class="myname">
    <h1 class="name"><?php echo $_SESSION['fname']; ?> <?php echo " "; ?> <?php echo $_SESSION['lname']; ?> </h1>
    <img class="jsp" src="../images/<?php echo $_SESSION['name']; ?>" alt="">
    <p>
      Nom : <?php echo $_SESSION['fname']; ?>
      <br>
      prenom: <?php echo $_SESSION['lname']; ?>
      <br>
      <!-- phone:<?php echo $_SESSION['phone']; ?> -->
      <br>
      email:<?php echo $_SESSION['email']; ?>
    </p>
</div>
<div class="exp">
    <h1>my experiences</h1>
    <p>
    <?php echo $_SESSION['date1']; ?>:<?php echo $_SESSION['college']; ?>
        <br>
        <?php echo $_SESSION['date2']; ?>:<?php echo $_SESSION['highs']; ?>
        <br>
        <?php echo $_SESSION['date3']; ?>:<?php echo $_SESSION['university']; ?>
    </p>
</div>
<div class="skills">
    <h1>my skills</h1>
<div class="label" for=""><?php echo $_SESSION['skills']; ?></div>
</div>
      </div>
        
        <script src="" async defer></script>
    </body>
</html>
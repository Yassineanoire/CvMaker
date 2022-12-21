<?php 
session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/cv.css">
    <title>CV</title>
</head>
<body>
    <div class="cv-page">
        <header>
            <img src="../images/<?php 
           echo $_SESSION['name'];
?>" alt="" alt="profile image">
            <div class="info">
                <h1 class="name">:<?php echo $_SESSION['fname'] ?> <?php echo " " ?> <?php echo $_SESSION['lname']; ?> </h1>
                <p class="phone"><?php echo $_SESSION['phone']; ?>  </p>
                <p class="email"><?php echo $_SESSION['email']; ?>  </p>
            </div>
        </header>

        <main>
            <div class="college">
                <h1>college</h1>
                <h2><?php echo $_SESSION['college']; ?></h2>
                <h4><?php echo $_SESSION['date1']; ?></h4>
                
            </div>
            <div class="lycee">
                <h1>lycee</h1>
                <h2><?php echo $_SESSION['highs']; ?></h2>
                <h4> <?php echo $_SESSION['date2']; ?></h4>
                
            </div>
            <div class="university">
                
                <h1>university</h1>
                <h2><?php echo $_SESSION['university']; ?></h2>
                <h4><?php echo $_SESSION['date3']; ?></h4>
            </div>
            <div class="skills">
                
                <h1>skills</h1>
                <P><?php echo $_SESSION['skills']; ?></P>
            </div>
        </main>

    </div>

</body>
</html>



<!--
    name
    num
    emil
    date name coleg 
    lycee 
    iniversity
    skills
-->

<?php 
session_start();
include 'config.php';
if(isset($_POST['submit1'])){
  $_SESSION['fname']=$_POST['Fname'];
  $_SESSION['lname']=$_POST['Lname'];
  $_SESSION['phone']=$_POST['Phone'];
  $_SESSION['email']=$_POST['Email'];
  $img_name=$_FILES['profile']['name'];
  $_SESSION['name']=$_FILES['profile']['name'];
$sql=mysqli_query($conn,"INSERT INTO img (imgs) VALUES ('{$img_name}')");
header("location:page2.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV MAKER page1 </title>
    <link rel="stylesheet" href="../cssFiles/mainStyle.css" />
  </head>

  <body>
    <div class="container">
      <div class="leftside">
        <h2>CV GENERATOR</h2>
        <ol>
          <li class="curent">Your info</li>
          <li>Education</li>
          <li>Experiences</li>
        </ol>
        <span>Respo X Chinwi</span>
      </div>

      <div class="rightside">
        <div class="page page1">
          <h2>INFOS</h2>
          <form action="#" method="post" id="form1" enctype="multipart/form-data" >
            <section>
              <label for="Fname">First Name</label><br />
              <input id="Fname" type="text" name="Fname" />
            </section>
            <section>
              <label for="Lname">Last Name</label><br />
              <input id="Lname" type="text" name="Lname" />
            </section>
            <section>
              <label for="Phone">Phone number</label><br />
              <input id="Phone" type="tel" name="Phone" />
            </section>
            <section>
              <label for="Email">Email Address</label><br />
              <input id="Email" type="email" name="Email" />
            </section>
            <section>
              <label for="profile">choose profile image</label>
              <input id="profile" type="file" name="profile" />
            </section>
            <section>
              <button name="submit1" class="nex1t next" onclick="next()" >NEXT</button>
            </section>
          </form>
        </div>

      </div>
    </div>

    <script src="../script/script.js"></script>
  </body>
</html>

<!-- 




    education
    experiences
    skills
-->

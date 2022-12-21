<?php
   include 'config.php';
   session_start();
if (isset($_POST ['submit2'])){
  $_SESSION['skills']=$_POST['tx'];
  header("location:style1.php");

}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CV MAKER page1</title>
        <link rel="stylesheet" href="../cssFiles/mainStyle.css">
    </head>

    <body>

        <div class="container">
            <div class="leftside">
                <h2>CV GENERATOR</h2>
                <ol>
                    <li>Your info</li>
                    <li class="current">Education</li>
                    <li class="current2">Experiences</li>
                </ol>
                <span>Respo X Chinwi</span>
            </div>
            

            <div class="rightside">

                <h2 class="title">EXPERIENECES</h2>
                <form action="#" method="post" id="form3">
                    <label for=""> skills:</label>
                    <div id="pos">
       
        <textarea name="tx" id="" cols="30" rows="10" placeholder="enter ur skills"></textarea>
    </div>
                      </section>
                     
                    <button class="next next2" name="submit2" >NEXT</button>
                   
                  
                  </form>
                  
                    
                  </body>
    </html>
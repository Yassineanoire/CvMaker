<?php
   include 'config.php';
   session_start();
if (isset($_POST ['submit'])){
  $_SESSION['college']=$_POST['college'];
  $_SESSION['date1']=$_POST['date1'];
  $_SESSION['highs']=$_POST['highs'];
  $_SESSION['date2']=$_POST['date2'];
  $_SESSION['university']=$_POST['university'];
  $_SESSION['date3']=$_POST['date3'];
  header("location:page3.php");

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
                    <li class="curent">Education</li>
                    <li>Experiences</li>
                </ol>
                <span>Respo X Chinwi</span>
            </div>

            <div class="rightside">


                <h2>EDUCATION</h2>
                <form action="#" method="post" id="form2">
                    <section id="jj">
                      <label for="">college</label><br />
                      <input id="Fname" type="text" name="college" placeholder="enter ur college"/>
                    </section>
                    <section>
                      <label for="">DATE</label><br />
                      <input id="Lname" type="date" name="date1" />
                    </section>
                    <section id="jj">
                      <label for="Phone">high school</label><br />
                      <input id="Phone" type="tel" name="highs" />
                    </section>
                    <section>
                      <label for="Email">date</label><br />
                      <input id="Email" type="date" name="date2" />
                    </section>
                    <section id="jj">
                        <label for="Phone">university</label><br />
                        <input id="Phone" type="tel" name="university" />
                      </section>
                      <section>
                        <label for="Email">date</label><br />
                        <input id="Email" type="date" name="date3" />
                      </section>
                      <input type="submit" class="next" name="submit">
                    <!-- <button class="next next2" name="submit2" onclick="next()">NEXT</button> -->
                   
                  
                  </form>
                <!-- <div class="page page2">
                    <form method="POST" id="form2">
                        
                        <label>college</label>
                        <div class="one">
                        <input type="text" name="" id="firts-in" placeholder="enter ue college">
                        <input type="date" name="" id="" id="kk">
                    </div>
                        <section class="sectionP">
                            <button class="next next2" name="submit2" onclick="next()">NEXT</button>
                            
                            <p>


                            </p>
                        </section>
                    </form> -->

                </div>
            </div>
        </div>

        <script src="../script/script.js"></script>
    </body>

    </html>
<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>view notes</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subjectclass.css">
  </head>
  <body>
    <header>
     <a href="http://localhost/aalearning/index.php" class="header-logo">aaLearning</a>
     <nav>
       <ul>
        <a href="http://localhost/aalearning/index.php"><li>Home</li></a>
        <a href="http://localhost/aalearning/profile.php"><li>User profile</li></a>
       </ul>
     </nav>
    </header>
    <main>
      <section class="panel">
        <div class="container1">
          <h1>Choose a subject</h1>
          </div>
          <div class="container2">
          <section class="panel1">
          <a href="class1English.php">
            <div class="box01">
              <img src="img/img01.jpg" alt="English" class="image01">
              <h3>English</h3>
            </div>
          </a>
          <a href="class1Kiswahili.php">
            <div class="box01">
              <img src="img/img07.png" alt="Kiswahili" class="image01">
                <h3>Kiswahili</h3>
            </div>
          </a>
          <a href="class1Maths.php">
            <div class="box01">
              <img src="img/img03.jpg" alt="Maths" class="image01">
              <h3>Maths</h3>
            </div>
          </a>
          <a href="class1Science.php">
            <div class="box01">
              <img src="img/img04.png" alt="Science" class="image01">
              <h3>Science</h3>
            </div>
          </a>
          <a href="class1SStudies.php">
            <div class="box01">
              <img src="img/img05.jpg" alt="Social Studies" class="image01">
              <h3>Social Studies</h3>
            </div>
          </a>
          <a href="class1CRE.php">
            <div class="box01">
              <img src="img/img06.jpg" alt="C.R.E" class="image01">
              <h3>C.R.E</h3>
            </div>
          </a>
          </section>
        </div>
      </section>
    </main>
    <footer>
      <ul>
        <a href="http://localhost/aalearning/index.php"><li></li>Home</a>
        <a href="http://localhost/aalearning/student.php"><li></li>View notes</a>
        <a href="http://localhost/aalearning/profile.php"><li></li>User profile</a>
      </ul>
      <div class="contactSM">
        <a href="#">
          <img src="img/img08.png" alt="facebook icon">
        </a>
        <a href="#">
          <img src="img/img09.png" alt="twitter icon">
        </a>
        <a href="#">
          <img src="img/img12.png" alt="whatsapp icon">
        </a>
        <a href="#">
          <img src="img/img13.png" alt="instargram icon">
        </a>
      </div>
    </footer>
  </body>
</html>

<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>view notes</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student.css">
  </head>
  <body>
    <header>
     <a href="index.php" class="header-logo">aaLearning</a>
     <nav>
       <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="profile.php"><li>User profile</li></a>
       </ul>
     </nav>
    </header>
    <main>
      <section class="panel">
        <div class="container1">
          <h1>Choose level of education</h1>
          </div>
          <div class="container2">
          <section class="panel1">
          <a href="class.php">
            <div class="box01">
              <img src="img/img16.jpg" alt="primary school" class="image01">
              <h3>primary school</h3>
            </div>
          </a>
          <a href="form.php">
            <div class="box01">
              <img src="img/img15.jpg" alt="secondary school" class="image01">
                <h3>secondary school</h3>
            </div>
          </a>
          <!--<a href="courses">
            <div class="box03">
              <h3>online classes</h3>
            </div>
          </a>-->
          </section>
        </div>
      </section>
    </main>
    <footer>
      <ul>
        <a href="index.php"><li></li>Home</a>
        <a href="student.php"><li></li>View notes</a>
        <a href="profile.php"><li></li>User profile</a>
      </ul>
      <div class="contactSM">
        <a href="https://web.facebook.com/Demba-Jr-Techdev-619066981920240/">
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

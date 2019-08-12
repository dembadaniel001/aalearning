<?php
include_once 'other/db.php';
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>aalearning</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i">
<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
     <a href="index.php" class="header-logo">aaLearning</a>
     <nav>
      <?php
      if (isset($_SESSION['u_id'])) {
        echo '<form action="logout.php" method="post">
          <button type="submit" name="submit">Log out</button>
        </form>';
      }else {
        echo '<ul>
         <a href="index.php"><li>Home</li></a>
         <a href="sign_in.php"><li>Register</li></a>
         <a href="login.php"><li>Log in</li></a>
        </ul>';
      }
       ?>
     </nav>
    </header>
    <main>
      <section class="about">
        <div class="box01">
          <h1>ABOUT AALEARNING</h1>
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Magna etiam tempor orci eu lobortis. Vel quam elementum pulvinar etiam non. Pellentesque massa placerat duis ultricies lacus sed turpis. Ut tortor pretium viverra suspendisse potenti nullam ac. </h2>
        </div>
      </section>
      <div class="container1">
      <section class="about2">
        <div class="box02">
          <h3>books</h3>
        </div>
        <div class="box03">
          <h3>teachers</h3>
        </div>
        <div class="box02">
          <h3>notes</h3>
        </div>
        <div class="box03">
          <h3>tutorial videos</h3>
        </div>
        <div class="box03">
          <h3>online classes</h3>
        </div>
      </section>
    </div>
    </main>
    <footer>
      <?php
      if (isset($_SESSION['u_id'])) {
        echo '
        <ul>
            <a href="index.php"><li></li>Home</a>
            <a href="student.php"><li></li>View notes</a>
        </ul>';
      }else {
        echo '
        <ul>
          <a href="index.php"><li></li>Home</a>
          <a href="sign_in.php"><li></li>Register</a>
          <a href="login.php"><li></li>Log in</a>
        </ul>
        ';
      }
       ?>
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

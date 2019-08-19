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
        echo '
        <form action="logout.php" method="post">
          <button type="submit" name="submit">Log out</button>
        </form>
        <ul>
         <a href="index.php"><li>Home</li></a>
         <a href="student.php"><li>View notes</li></a>
        </ul>
        ';
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
        <?php
        include_once 'other/db.php';
        $conn = mysqli_connect("localhost", "root", "", "learn");

        if (isset($_POST['upload'])) {
          $level_education_id = $_POST['level_education_id'];
          $class_id = $_POST['class_id'];
          $subject_id = $_POST['subject_id'];
          $filename = $_POST['filename'];

          $image=addslashes($_FILES['image']['tmp_name']);
          $imagename=addslashes($_FILES['image']['name']);
          $image=file_get_contents($image);
          $image=base64_encode($image);

          $sql= "INSERT INTO learning_materials(level_education_id, class_id, subject_id, filename, image) VALUES ('$level_education_id', '$class_id', '$subject_id', '$filename', '$image')";
          mysqli_query($conn, $sql);
          header("location: index.php?upload=success");
          exit();
             }
         ?>
         <?php
         if (isset($_GET['upload'])) {
           if ($_GET['upload'] == "success") {
             // code...
             echo '<h2>You have successfully uploaded a file!</h2>';
           }
           else {
             // code...
             echo '<h2>There was an error uploading a file!</h2>';
           }
         }
         ?>
        <?php
        if (isset($_SESSION['u_id'])) {
          echo '
          <div class="upload">
            <h1>Upload files</h1>

            <form action="index.php" method="post" enctype="multipart/form-data">
              <tr>
                <select class="select" name="level_education_id">
                  <option>Level of Education</option>
                  <option value="1">Primary School</option>
                  <option value="2">Secondary School</option>
                </select>
                <br/><br/>
              </tr>
              <tr>
                <select class="select" name="class_id">
                  <option>Select Class</option>
                  <option value="1">Class 1</option>
                  <option value="2">Class 2</option>
                  <option value="3">Class 3</option>
                  <option value="4">Class 4</option>
                  <option value="5">Class 5</option>
                  <option value="6">Class 6</option>
                  <option value="7">Class 7</option>
                  <option value="8">Class 8</option>
                  <option value="9">Form 1</option>
                  <option value="10">Form 2</option>
                  <option value="11">Form 3</option>
                  <option value="12">Form 4</option>
                </select>
                <br/><br/>
              </tr>
              <tr>
                <select class="select" name="subject_id">
                  <option>Select Subject</option>
                  <option value="1">Primary School English</option>
                  <option value="2">Primary School Kiswahili</option>
                  <option value="3">Primary School Maths</option>
                  <option value="4">Primary School Science</option>
                  <option value="5">Primary School Social Studies</option>
                  <option value="6">Primary School C.R.E</option>
                  <option value="7">Secondary School English</option>
                  <option value="8">Secondary School Kiswahili</option>
                  <option value="9">Secondary School Maths</option>
                  <option value="10">Secondary School Biology</option>
                  <option value="11">Secondary School Chemistry</option>
                  <option value="12">Secondary School Physics</option>
                  <option value="13">Secondary School Geography</option>
                  <option value="14">Secondary School History</option>
                  <option value="15">Secondary School C.R.E</option>
                  <option value="16">Secondary School Agriculture</option>
                  <option value="17">Secondary School Computer Studies</option>
                  <option value="18">Secondary School Business Studies</option>
                </select>
                <br/><br/>
              </tr>
              <tr>
                 <input type="file" name="image" id="image"><br/><br/>
              </tr>
              <input type="text" name="filename" id="filename" placeholder="File description"><br/><br/>
              <input type="submit" name="upload" value="upload" id="upload">
            </form>
          </div>
          ';
        }else {
          echo '
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
          ';
        }
         ?>
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

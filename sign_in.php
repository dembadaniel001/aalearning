<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>aalearning</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i">
<link rel="stylesheet" href="signin.css">
  </head>
  <body>
    <header>
     <a href="index.php" class="header-logo">aaLearning</a>
     <nav>
       <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="login.php"><li>Log in</li></a>
       </ul>
     </nav>
    </header>
      <div class="container01">
        <div class="login">
          <form method="post" action="sign_in.php">
            <?php
            include_once 'other/db.php';

            session_start();

            //$db = mysqli_connect("localhost" , "root" , "" , "learn");

            if (isset($_POST['submit'])) {
              $fname = mysqli_real_escape_string($conn, $_POST['fname']);
              $lname = mysqli_real_escape_string($conn, $_POST['lname']);
              $username = mysqli_real_escape_string($conn, $_POST['username']);
              $email = mysqli_real_escape_string($conn, $_POST['email']);
              $phone = mysqli_real_escape_string($conn, $_POST['phone']);
              $level_education_id = mysqli_real_escape_string($conn, $_POST['level_education_id']);
              $school = mysqli_real_escape_string($conn, $_POST['school']);
              $city = mysqli_real_escape_string($conn, $_POST['city']);
              $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
              $gender = mysqli_real_escape_string($conn, $_POST['gender']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);
              $password1 = mysqli_real_escape_string($conn, $_POST['password1']);

              if ($password == $password1) {
                //create user
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT); //encrypt password for security
                $sql = "INSERT INTO students(fname, lname, username, email, phone, level_education_id, school, city, DOB, gender, password) VALUES('$fname', '$lname', '$username', '$email', '$phone', '$level_education_id', '$school', '$city', '$DOB', '$gender', '$hashedpassword')";
                mysqli_query($conn, $sql);
                $_SESSION['message'] = "You have been succesfully registered";
                $_SESSION['username'] = $username;
                header("location: sign_in.php?signup=success");
                exit();
                }else {
                //failed
                header("location: sign_in.php?error=passwordnotmatch");
                exit();
              }
            }

            ?>
            <table>
              <h2>Sign up here</h2>
              <?php
              if (isset($_GET['error'])) {
                if ($_GET['error'] == "passwordnotmatch") {
                  // code...
                  echo '<h1>Passwords do not match!</h1>';
                }
              }elseif (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                  echo '<h3>You have been successfully registered you can now login!</h3>';
                }
              }
              ?>
              <tr>
                <input type="text" name="fname" placeholder="first name">
              </tr>
              <tr>
                <input type="text" name="lname" placeholder="last name">
              </tr>
              <tr>
                <input type="text" name="username" placeholder="username">
              </tr>
              <tr>
                <input type="email" name="email" placeholder="email">
              </tr>
              <tr>
                <input type="text" name="phone" placeholder="phone number">
              </tr>
              <tr>
                <select class="select" name="level_education_id">
                  <option>Level of Education</option>
                  <option value="1">Primary School</option>
                  <option value="2">Secondary School</option>
                </select>
              </tr>
              <tr>
                <input type="text" name="school" placeholder="school">
              </tr>
              <tr>
                <input type="text" name="city" placeholder="city">
              </tr>
              <tr>
              <input type="date" name="DOB" placeholder="date of birth">
              </tr>
              <tr>
              <select class="select" name="gender">
                <option>Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
              </select>
              </tr>
              <tr>
                <input type="password" name="password" placeholder="password">
              </tr>
              <tr>
                <input type="password" name="password1" placeholder="confirm password">
              </tr>
              <tr>
                <button type="submit" name="submit">sign up</button>
              </tr>
              <h2>Already registered?<br>Click here to log in</h2>
               <a href="login.php">login</a>
            </table>
          </form>
        </div>
      </div>
      <footer>
      <ul>
        <a href="index.php"><li></li>Home</a>
        <a href="login.php"><li></li>Log in</a>
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

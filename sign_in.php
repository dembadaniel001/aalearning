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
              $school = mysqli_real_escape_string($conn, $_POST['school']);
              $city = mysqli_real_escape_string($conn, $_POST['city']);
              $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);
              $password1 = mysqli_real_escape_string($conn, $_POST['password1']);

              if ($password == $password1) {
                //create user
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT); //encrypt password for security
                $sql = "INSERT INTO students(fname, lname, username, email, phone, school, city, DOB, password) VALUES('$fname', '$lname', '$username', '$email', '$phone', '$school', '$city', '$DOB', '$hashedpassword')";
                mysqli_query($conn, $sql);
                $_SESSION['message'] = "You have been succesfully registered";
                $_SESSION['username'] = $username;
                echo "you have been succesfullyregistered you can now login into the program";
                exit();
                //header("location: index.php");
                }else {
                //failed
                $_SESSION['message'] = "The two passwords do not match";
                echo "The two passwords do not match";
                exit();
              }
            }

            ?>
            <table>
              <h2>Sign up here</h2>
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
                <input type="text" name="email" placeholder="email">
              </tr>
              <tr>
                <input type="text" name="phone" placeholder="phone number">
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
        <a href="#"><li></li>Home</a>
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

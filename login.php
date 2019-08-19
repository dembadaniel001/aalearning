<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>aalearning</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i">
<link rel="stylesheet" href="login.css">
  </head>
  <body>
    <header>
     <a href="index.php" class="header-logo">aaLearning</a>
     <nav>
       <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="sign_in.php"><li>Register</li></a>
       </ul>
     </nav>
    </header>
      <div class="container01">
        <div class="login">
          <form method="post" action="login.php">
            <?php
            include_once 'other/db.php';

            session_start();

            //$db = mysqli_connect("localhost" , "root" , "" , "learn");

            if (isset($_POST['submit'])) {
              $username = mysqli_real_escape_string($conn, $_POST['username']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);

              if (empty($username) || empty($password)) {
                //Error handler
                echo "You have not filled some of the required boxes";
              }else {
                $sql = "SELECT * FROM students WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck < 1) {
                  header("Location: login.php?error=wronguser");
                  exit();
                }else {
                  if ($row = mysqli_fetch_assoc($result)) {
                    // Dehashing the password
                    $hashedpasswordCheck = password_verify($password, $row['password']);
                    if ($hashedpasswordCheck == false) {
                      header("Location: login.php?error=wrongpass");
                      exit();
                    }elseif ($hashedpasswordCheck == true) {
                        // Login the user
                        $_SESSION['u_id'] = $row['id'];
                        $_SESSION['u_fname'] = $row['fname'];
                        $_SESSION['u_lname'] = $row['lname'];
                        $_SESSION['u_username'] = $row['username'];
                        $_SESSION['u_email'] = $row['email'];
                        $_SESSION['u_school'] = $row['school'];
                        $_SESSION['u_city'] = $row['city'];
                        $_SESSION['u_DOB'] = $row['DOB'];
                        header("location: index.php");
                    }
                  }
                }
              }
            }

            ?>
            <table>
              <h2>Login here</h2>
              <?php
              if (isset($_GET['error'])) {
                if ($_GET['error'] == "wronguser") {
                  // code...
                  echo '<h1>Username do not exist!</h1>';
                }
              }elseif (isset($_GET['error'])) {
                if ($_GET['error'] == "wrongpass") {
                  echo '<h1>You have entered a wrong password!</h1>';
                }
              }
              ?>
              <tr>
                <input type="text" name="username" placeholder="username">
              </tr>
              <tr>
                <input type="password" name="password" placeholder="password">
              </tr>
              <tr>
                <button type="submit" name="submit">Log in</button>
              </tr>
              <h2>Are you a new user?<br>Click here to register</h2>
               <a href="sign_in.php">Register</a>
            </table>
          </form>
        </div>
      </div>
      <footer>
      <ul>
        <a href="#"><li></li>Home</a>
        <a href="sign_in.php"><li></li>Register</a>
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

<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "learn");

    $sql = "SELECT * FROM learning_materials WHERE level_education_id=1 && class_id=1 && subject_id=6";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
      echo "<h2>".$row['filename']."</h2>";
      echo "<img src='".$row['image']."'";
    }
    ?>
  </body>
</html>

<?php
$insert = false;
if (isset($_POST['name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting to database
  $con = mysqli_connect($server, $username, $password);
  if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
  }
  //uploading data
  $full_name = $_POST['name'];
  $email = $_POST['email'];
  $phone_num = $_POST['phone'];
  $sql = "INSERT INTO `technical`.`tech1` (`Name`, `Email`, `Phone`) VALUES ('$full_name', '$email', '$phone_num')";
  $new = "SELECT * from `technical`.`tech1` where email = '$email'";
  // $new2 = "SELECT * from `jobs`.`register` where phone = '$phone_num'";
  $res = mysqli_query($con, $new);
  if (mysqli_num_rows($res) == true) {
    // echo "Already present email";
  } else {
    if ($con->query($sql) == true) {
      $insert = true;
    }
  }
  // $insert = false;
  // $res2 = mysqli_query($con, $new2);
  // if ($_POST['full_name'] != "") {
  //     if ($password == $con_password) {
  //         if (mysqli_num_rows($res) == true or mysqli_num_rows($res2) == true) {
  //         } else {
  //             if ($con->query($sql) == true) {
  //                 $insert = true;
  //                 echo "<div class='alert alert-success' role='alert'>You have been successfully Registered <a href='./login.php'>Login</a></div>";
  //             } else {
  //                 echo "ERROR: $sql <br> $con->error";
  //             }
  //         }
  //         $con->close();
  //     } else {
  //         echo "<div class='alert alert-danger' role='alert'>Passwords do not match!</div>";
  //     }
  // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Register</title>
</head>

<body>
  <form action="registration.php" method="post">
    <div class="center">
      <label for="name">Full Name:</label>
      <input name="name" type="text" placeholder="Name" required>
      <label for="email">Email:</label>
      <input name="email" type="email" placeholder="Email" required>
      <label for="phone">Phone:</label>
      <input name="phone" type="number" placeholder="Phone" required>
      <!-- <label for="name">Password:</label>
      <input name="name" type="text" placeholder="Name" required>
      <label for="name">Name:</label>
      <input name="name" type="text" placeholder="Name" required> -->
      <button type="submit">Register</button>
    </div>
  </form>
</body>

</html>
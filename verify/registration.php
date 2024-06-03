<?php

include('db.php');

include('sendEmail.php');



if (isset($_POST['submit']) && isset($_POST['email'])) {

  $name = $_POST['name'];

  $email = $_POST['email'];

  $phone = $_POST['phone'];

  $code = rand();

  $sql = "INSERT INTO `technical`.`tech1` (`Name`, `Email`, `Phone`, `code`) VALUES ('$name', '$email', '$phone', '$code')";

  $new = "SELECT * from `technical`.`tech1` where email = '$email'";


  $res = mysqli_query($conn, $new);
  if (mysqli_num_rows($res) == true) {
    echo "Already present email";
  } else {
    $result = mysqli_query($conn, $sql);

    if ($result) {

      echo "Registration successfull. Please verify your email.";

      $sendMl->send($code);
    }
  }
}



?>



<!DOCTYPE html>

<html lang="en">

<head>

  <title>Registration</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>



  <div class="container">

    <h2>Reg form</h2>

    <form action="" method="post">
      <div class="form-group">

        <label for="name">Full Name:</label>

        <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">

      </div>

      <div class="form-group">

        <label for="email">Email:</label>

        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

      </div>

      <div class="form-group">

        <label for="phone">Phone:</label>

        <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone">

      </div>

      <!-- <div class="form-group">

        <label for="pwd">Password:</label>

        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">

      </div> -->

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>

  </div>



</body>

</html>
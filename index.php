<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);


if(!$con){
    die("Connection to this database failed due to " . mysqli_connect_error());
}
// echo "Success connecting to the database";

$name = $age = $gender = $email = $phone = $desc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) $name = $_POST['name'];
    if (isset($_POST['age'])) $age = $_POST['age'];
    if (isset($_POST['gender'])) $gender = $_POST['gender'];
    if (isset($_POST['email'])) $email = $_POST['email'];
    if (isset($_POST['phone'])) $phone = $_POST['phone'];
    if (isset($_POST['desc'])) $desc = $_POST['desc'];
}

$sql = "INSERT INTO `tint tech tour`.`tech tour` (`Name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


if($con->query($sql)==true){
  // echo "Succesfully inserted";
  $insert = true;

}
else{
  echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to travel form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <img class="bg" src="TINT.jpg" alt="Techno International NewTown">
  <div class="container">
  <h3>Welcome to Techno International NewTown </h3>
  <p> Enter your details and submit this form to confirm your participation in the trip</p>
  <?php
  if($insert==true){
  echo "<p class=sbmtmsg>Thanks for submitting your form.
  your form has been saved succesfully</p>";
  }
  ?>

  <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter Your name">
    <input type="text" name="age" id="age" placeholder="Enter Your age">
    <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your Phone number">
    <textarea name="desc" id="desc" cols="30" rows="30" placeholder="Enter queries"></textarea>
    <button class="btn">Submit</button>
  
  </form>
</div>
<script src="index.js"></script>
</body>
</html>

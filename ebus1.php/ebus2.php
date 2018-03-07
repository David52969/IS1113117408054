<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION["name"] = ($_POST["name"]);
  $_SESSION["email"] = ($_POST["email"]);
  $_SESSION["contact"] = ($_POST["contact"]);
    $_SESSION["total"] = $_POST["total"];
}
    ?>

<center>
<h2>Personal Details</h2>
<form method="post" action="ebus3.php">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Contact Number: <input type="text" name="contact">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</center>
</body>
</html>
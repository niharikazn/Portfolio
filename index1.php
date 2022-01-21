<?php

$servername = "portfolioniha.database.windows.net";
$username = "Niharika";
$password = "Niha14";
$dbname = "Humanity";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   
$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["Subject"];
$me=$_POST["mesage"];
$sql = "INSERT INTO `contact` (`name`, `email`,`subject`,`mesage`)
VALUES ('$name','$email','$sub','$me')";

if ($conn->query($sql) === TRUE) {
//echo"success";
header("Location:thankyou3.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

$con=mysqli_init();

mysqli_real_connect($conn, "humanityy.mysql.database.azure.com", "niharika@humanityy", "12345Niha", "Humanity", 3306);
// Create connection
//$conn = new mysqli("tcp:humanityser.database.windows.net,1433", $username, $password, $dbname);
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

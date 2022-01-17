<?php


header("Location:thankyou3.html");

try {
    $conn = new PDO("sqlsrv:server = tcp:humanityser.database.windows.net,1433; Database = Humanity", "CloudSA616db234", "10A16F35K8281J8Q$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA616db234", "pwd" => "10A16F35K8281J8Q$", "Database" => "Humanity", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:humanityser.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
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

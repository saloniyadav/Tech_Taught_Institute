<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="user";
$username=$_POST['uname'];
$password=$_POST['psw'];
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected successfully";

}

$sql = "INSERT INTO Login (username,password)
VALUES ($username,$password)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
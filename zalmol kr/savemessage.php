<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo $name;
$sql = "INSERT INTO messageus (name, email, message)
VALUES ('namevalue', 'emailvalue', 'messagevalue')";

$sql = str_replace("namevalue",$name,$sql);
$sql = str_replace("emailvalue",$email,$sql);
$sql = str_replace("messagevalue",$message,$sql);


echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

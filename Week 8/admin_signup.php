<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isosceles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Insert Admin Sign-up Data from here:

$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];

$sql = "INSERT INTO admin_sign_up (Email,Password,Repeat_Password)
VALUES ('$email', '$psw', '$psw_repeat')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






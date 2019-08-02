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
//Insert Patient Sign-up Data from here:

$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];




$sql = "INSERT INTO patient_sign_up (Email,Password,Repeat_Password,First_Name,Last_name,Age,Phone,Address,Gender)
VALUES ('$email', '$psw', '$psw_repeat', '$first_name', '$last_name', '$age', '$phone', '$address', '$gender' )";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






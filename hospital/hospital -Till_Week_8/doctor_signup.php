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
//Insert Doctor Sign-up Data from here:

$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$experts = $_POST['experts'];





$sql = "INSERT INTO doctor_sign_up (Email,Password,Repeat_Password,First_Name,Last_name,Gender,Designation,Expert)
VALUES ('$email', '$psw', '$psw_repeat', '$first_name', '$last_name', '$gender', '$designation', '$experts' )";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






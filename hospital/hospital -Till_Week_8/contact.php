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

//Insert contact form

$fullname = $_POST['fullname'];
$emailid = $_POST['emailid'];
$mobileno = $_POST['mobileno'];
$description = $_POST['description'];

$sql = "INSERT INTO contact (Name,email,Mobile_no,Description)
VALUES ('$fullname', '$emailid', '$mobileno', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


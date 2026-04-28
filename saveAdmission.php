<?php
// Database connection
$servername = "localhost";
$username   = "root";      // your DB username
$password   = "";          // your DB password
$dbname     = "school_db"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$grade = $_POST['grade'];

// Insert into database
$sql = "INSERT INTO admissions (name, email, phone, grade) 
        VALUES ('$name', '$email', '$phone', '$grade')";

if ($conn->query($sql) === TRUE) {
  echo "Application submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'vstar';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['Name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['datafield'];
$comment = $_POST['Comment'];

// Insert data into the database
$sql = "INSERT INTO contact_form (Name, Email, Password, Gender, Comment) VALUES ('$name', '$email', '$password', '$gender', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

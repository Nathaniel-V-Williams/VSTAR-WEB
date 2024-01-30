<?php
session_start(); // Start the session

// Database connection details
$servername = "localhost";
$username = "root";
$password = '';
$database = "vstar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to verify login
function verifyLogin($username, $password, $conn) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM registration_form WHERE username = ? AND password = ?");
    
    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password);

    // Execute the query
    $stmt->execute();

    // Check for errors in execution
    if ($stmt->errno) {
        die("Error in executing statement: " . $stmt->error);
    }

    // Store the result
    $result = $stmt->get_result();

    // Check if a matching user is found
    if ($result->num_rows == 1) {
        return true; // Login successful
    } else {
        return false; // Login failed
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Verify login
    if (verifyLogin($enteredUsername, $enteredPassword, $conn)) {
        // Set session variables
        $_SESSION["username"] = $enteredUsername;

        // Redirect the user to the profile page
        header('Location: profile.php');
        exit();
    } else {
        echo "Login failed. Please check your username and password.";
    }
}

// Close the database connection
$conn->close();
?>

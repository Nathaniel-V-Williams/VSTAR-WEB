<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // If not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

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

// Retrieve user information using the session username
$sessionUsername = $_SESSION["username"];
$sql = "SELECT * FROM registration_form WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $sessionUsername);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "User not found.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .profile-container {
            display: flex;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        img {
            max-width: 50%;
            height: auto;
            border-radius: 8px 0 0 8px;
        }

        div {
            width: 100%;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="photos/<?php echo $row['images']; ?>" alt="Profile image">
        <div>
            <h1><?php echo $row['fname'] . ' ' . $row['lname']; ?></h1>
            <table>
                <tr>
                    <th>Date of Birth:</th>
                    <td><?php echo $row['dob']; ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <th>Phone Number:</th>
                    <td><?php echo $row['phone_number']; ?></td>
                </tr>
                <tr>
                    <th>Position:</th>
                    <td><?php echo $row['position']; ?></td>
                </tr>
                <tr>
                <th>height:</th>
                    <td><?php echo $row['height']; ?></td>
                    </tr>
                    <tr><th>gender:</th>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

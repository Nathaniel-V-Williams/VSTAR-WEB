<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vstar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']); // Make sure 'gender' is consistent with your HTML form
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$Age = mysqli_real_escape_string($conn, $_POST['Age']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$Omane = mysqli_real_escape_string($conn, $_POST['Omane']);
$mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
$father_name = mysqli_real_escape_string($conn, $_POST['father_name']);

// File upload handling
if (isset($_FILES["profile_picture"])) {
    $targetDirectory = "images/";
    $targetFile = $targetDirectory . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
    if ($check === false) {
        echo "File is not a valid image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $targetFile = $targetDirectory . uniqid() . '_' . basename($_FILES["profile_picture"]["name"]);
    }

    // Check file size
    if ($_FILES["profile_picture"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["profile_picture"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert data into the registration_form table with the image name
    $sql = "INSERT INTO registration_form (fname, lname, username, password, dob, gender, email, phone_number, position, Age, height, Omane, mother_name, father_name, images) VALUES ('$fname', '$lname', '$username', '$password', '$dob', '$gender', '$email', '$phone_number', '$position', '$Age', '$height', '$Omane', '$mother_name', '$father_name', '" . basename($targetFile) . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Profile picture not set.";
}

// Close connection
$conn->close();
?>

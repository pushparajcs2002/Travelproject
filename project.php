<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (Replace placeholders with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO project (name, email, datetime, destination, special_request) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $datetime, $destination, $special_request);

    // Set parameters and execute the statement
    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $datetime = $_POST['sdatetime'];
    $destination = $_POST['sselect'];
    $special_request = $_POST['sspecialrequest'];

    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
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

    // Retrieve form data
    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $datetime = $_POST['sdatetime'];
    $destination = $_POST['sselect'];
    $special_request = $_POST['sspecialrequest'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO project (name, email, datetime, destination, special_request)
            VALUES ('$name', '$email', '$datetime', '$destination', '$special_request')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>

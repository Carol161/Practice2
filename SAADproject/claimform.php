<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_of_service = $_POST['date_of_service'];
    $type_of_service = $_POST['type_of_service'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $total_hours = $_POST['total_hours'];
    $manager_name = $_POST['manager_name'];
    $approval_status = $_POST['approval_status'];
    $manager_comments = $_POST['manager_comments'];

    // Database connection parameters (adjust as needed)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the form data into the database
    $sql = "INSERT INTO claim_form (date_of_service, type_of_service, start_time, end_time, total_hours, manager_name, approval_status, manager_comments)
    VALUES ('$date_of_service', '$type_of_service', '$start_time', '$end_time', '$total_hours', '$manager_name', '$approval_status', '$manager_comments')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

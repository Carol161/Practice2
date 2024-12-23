<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $salary = $_POST['salary'];
    $job_title = $_POST['job_title'];
    $department = $_POST['department'];
    $contact_info = $_POST['contact_info'];
    $tax_withholding = $_POST['tax_withholding'];

    // Database connection (replace with your actual database credentials)
    $conn = new mysqli("localhost", "username", "password", "database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update employee information
    $sql = "UPDATE employees SET salary='$salary', job_title='$job_title', department='$department', contact_info='$contact_info', tax_withholding='$tax_withholding' WHERE employee_id='$employee_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee information updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

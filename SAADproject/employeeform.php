<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $job_title = $_POST['job_title'];
    $department = $_POST['department'];
    $start_date = $_POST['start_date'];
    $salary = $_POST['salary'];
    $tax_number = $_POST['tax_number'];
    $bank_name = $_POST['bank_name'];
    $account_number = $_POST['account_number'];

    // You can then save this data into your database.
    // Example using PDO (PHP Data Objects) for database interaction:

    $dsn = 'mysql:host=your_host;dbname=your_dbname';
    $username = 'your_username';
    $password = 'your_password';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO employees (name, address, contact, job_title, department, start_date, salary, tax_number, bank_name, account_number) 
                VALUES (:name, :address, :contact, :job_title, :department, :start_date, :salary, :tax_number, :bank_name, :account_number)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':job_title', $job_title);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':salary', $salary);
        $stmt->bindParam(':tax_number', $tax_number);
        $stmt->bindParam(':bank_name', $bank_name);
        $stmt->bindParam(':account_number', $account_number);
        
        $stmt->execute();
        echo "New employee record created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null;
}
?>

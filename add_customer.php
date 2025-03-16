<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    $sql = "INSERT INTO customers (name, email, phone, company) 
            VALUES ('$name', '$email', '$phone', '$company')";

    if ($conn->query($sql) === TRUE) {
        echo "Customer added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
include 'db_connect.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

$customers = [];
while ($row = $result->fetch_assoc()) {
    $customers[] = $row;
}

echo json_encode($customers);
$conn->close();
?>
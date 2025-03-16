<?php
include 'db_connect.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

echo "<h2>Customer List</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Company</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['company']."</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>

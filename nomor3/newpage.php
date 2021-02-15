<?php

$conn = new mysqli("172.18.0.2","root","password123","Trucorp");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "Jumlah user: ";
echo ($result->num_rows);

$conn->close();


?>

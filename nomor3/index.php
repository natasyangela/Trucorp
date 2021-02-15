<?php
$conn = new mysqli("172.18.0.2","root","password123","Trucorp");

echo "Welcome\n";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
  echo $row['ID'];
  echo " ";
  echo $row['Nama'];
  echo " ";
  echo $row['Kantor'];
  echo "\n";
 }
}

$conn->close();

?>

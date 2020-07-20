<?php
include '../1/index.php';
?>
<br>
<?php

$sql = "SELECT id, code, name, price FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - " . $row["code"]. " " . $row["name"]. " " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>

<?php
include '../1/index.php';

$sql = "create table products(id INT AUTO_INCREMENT, code VARCHAR(8) NOT NULL, name VARCHAR(20) NOT NULL, price DECIMAL(16, 2), primary key (id))";

if(mysqli_query($conn, $sql)){
         echo " | Table created successfully";
         } else {
            echo " | Table is not created successfully ";
	 }
         mysqli_close($conn);

?>

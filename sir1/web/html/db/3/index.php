<?php
include '../1/index.php';

$product_code = 'P1234';
$product_name = '42 inch TV';
$product_price = 699.95;

$query = "INSERT INTO products (code, name, price) VALUES(?, ?, ?)";
$statement = $conn->prepare($query);

$statement->bind_param('ssd', $product_code, $product_name, $product_price);

if($statement->execute()){
	print ' | Success! ID of last inserted record is : ' .$statement->insert_id .'<br />'; 
}else{
	die(' | Error : ('. $conn->errno .') '. $conn->error);
}
$statement->close();

?>

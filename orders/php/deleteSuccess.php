<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM orders WHERE Order_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "Order successfully deleted";
echo $success;
?>

<form action="../order_HomePage.html">
<button type="submit" name="return" onclick="../order_HomePage.html">Return</button>
</form>
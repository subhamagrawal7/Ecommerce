<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM products WHERE Prod_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "Product successfully deleted";
echo $success;
?>

<form action="../product_HomePage.html">
<button type="submit" name="return" onclick="../product_HomePage.html">Return</button>
</form>
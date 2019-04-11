<?php
//   include_once 'php/dbh.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM customers WHERE Cust_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "User successfully deleted";
echo $success;
//echo "HIIIIII";
?>

<form action="../customer_HomePage.html">
<button type="submit" name="return" onclick="../customer_HomePage.html">Return</button>
</form>
<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM payments WHERE Pay_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "Payment successfully deleted";
echo $success;
?>

<form action="../payments.html">
<button type="submit" name="return" onclick="../payments.html">Return</button>
</form>
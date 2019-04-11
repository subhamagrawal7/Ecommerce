<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM suppliers WHERE Suppl_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "User successfully deleted";
echo $success;
?>

<form action="../supplier_HomePage.html">
<button type="submit" name="return" onclick="../supplier_HomePage.html">Return</button>
</form>
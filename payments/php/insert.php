<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  $payID = $_POST['payid'];
  $payType = $_POST['payType'];
  $sql = "INSERT INTO payments(Pay_ID,Pay_type) VALUES ('$payID', '$payType');";
  $result = mysqli_query($conn, $sql);
  
  header("Location: /Ecommerce/payments/payments.html");
?>

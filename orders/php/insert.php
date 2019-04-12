<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  $orderid = $_POST['orderid'];
  $custid = $_POST['custid'];
  $prodid = $_POST['prodid'];
  $orderPrice = $_POST['orderPrice'];
  $quantity = $_POST['quantity'];
  $orderDate = $_POST['orderDate'];
  $payID = $_POST['payID'];
  $sql = "INSERT INTO orders(Order_ID, Cust_ID, Prod_ID, Price, Quantity, Order_date, Pay_ID) VALUES ('$orderid', '$custid', '$prodid', '$orderPrice', '$quantity', '$orderDate', '$payID');";
  $result = mysqli_query($conn, $sql);
  
  header("Location: /Ecommerce/orders/order_HomePage.html");
?>

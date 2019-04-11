<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  $supplid = $_POST['supplid'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $sql = "INSERT INTO suppliers(Suppl_ID, First_name, Last_name, Address, City, State, Phone, Email) VALUES ('$supplid', '$firstname', '$lastname', '$address', '$city', '$state', '$phone', '$email');";
  $result = mysqli_query($conn, $sql);
  
  header("Location: /Ecommerce/suppliers/supplier_HomePage.html");
?>

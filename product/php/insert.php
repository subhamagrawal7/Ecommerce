<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  $prodid = $_POST['prodid'];
  $prodname = $_POST['prodName'];
  $prodPrice = $_POST['prodPrice'];
  $supplid = $_POST['supplID'];
  $prodCat = $_POST['prodCategory'];
  $sql = "INSERT INTO products(Prod_ID, Prod_name, Prod_price, Suppl_ID, Category) VALUES ('$prodid', '$prodname', '$prodPrice', '$supplid', '$prodCat');";
  $result = mysqli_query($conn, $sql);
  
  header("Location: /Ecommerce/product/products.html");
?>

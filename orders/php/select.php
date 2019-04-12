<html>
  <head>
    <title>Orders View</title>
    <meta charset="utf-8" />
    <title>View Orders</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  </body>
</html>

<?php
//   include_once 'php/dbh.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  error_reporting(E_ALL & ~E_NOTICE);

  //$query = $_POST['query'];
  $sql = 'SELECT * FROM orders';
  $result = mysqli_query($conn, $sql);

  $output = "";
  $output .= "<div class='container'><h1 class='display-1'>ALL Orders...</h1>
  <br><table class='table table-hover'><thead class='thead-light'>";

  $temp = 1;

  while ($row = mysqli_fetch_assoc($result))
  {
    while($temp)
    {
      $output .= "<tr>";
      if ($row['Order_ID'] != NULL)
      {$output .= "<th scope='col'>".'Order_ID'. "</th>";}
      if ($row['Cust_ID'] != NULL)
      {$output .= "<th scope='col'>".'Customer ID'. "</th>";}
      if ($row['Prod_ID'] != NULL)
      {$output .= "<th scope='col'>".'Product ID'. "</th>";}
      if ($row['Price'] != NULL)
      {$output .= "<th scope='col'>".'Price'. "</th>";}
      if ($row['Quantity'] != NULL)
      {$output .= "<th scope='col'>".'Quantity'. "</th>";}
      if ($row['Order_date'] != NULL)
      {$output .= "<th scope='col'>".'Order Date'. "</th>";}
      if ($row['Pay_ID'] != NULL)
      {$output .= "<th scope='col'>".'Payment ID'. "</th>";}
      $output .= "</tr>";
      $temp = 0;
    }
  }
  $output .= "</thead><tbody>";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result))
  {
    $output .= "<tr>";
    if ($row['Order_ID'] != NULL)
      {$output .= "<th scope='row'>".htmlentities($row['Order_ID']). "</th>";}
    if ($row['Cust_ID'] != NULL)
      {$output .= "<td>".htmlentities($row['Cust_ID']). "</td>";}
    if ($row['Prod_ID'] != NULL)
      {$output .= "<td>".htmlentities($row['Prod_ID']). "</td>";}
    if ($row['Price'] != NULL)
      {$output .= "<td>".htmlentities($row['Price']). "</td>";}
    if ($row['Quantity'] != NULL)
      {$output .= "<td>".htmlentities($row['Quantity']). "</td>";}
    if ($row['Order_date'] != NULL)
      {$output .= "<td>".htmlentities($row['Order_date']). "</td>";}
    if ($row['Pay_ID'] != NULL)
      {$output .= "<td>".htmlentities($row['Pay_ID']). "</td>";}
    $output .= "</tr>";
  }
  $output .= "</tbody></table><br><form action='../orders.html'>
  <div class='form-group row'>
    <div class='col-sm-10'>
      <button type='submit' class='btn btn-primary' name='return' onclick='../orders.html'>Return</button>
    </div>
  </div>
</form></div>";
  echo $output;

?>

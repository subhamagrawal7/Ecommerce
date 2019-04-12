<html>
  <head>
    <title>Payments View</title>
    <meta charset="utf-8" />
    <title>View Payments</title>
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
  $sql = 'SELECT * FROM payments';
  $result = mysqli_query($conn, $sql);

  $output = "";
  $output .= "<div class='container'><h1 class='display-1'>ALL Payments...</h1>
  <br><table class='table table-hover'><thead class='thead-light'>";

  $temp = 1;

  while ($row = mysqli_fetch_assoc($result))
  {
    while($temp)
    {
      $output .= "<tr>";
      if ($row['Pay_ID'] != NULL)
      {$output .= "<th scope='col'>".'Payment ID'. "</th>";}
      if ($row['Pay_type'] != NULL)
      {$output .= "<th scope='col'>".'Payment Type'. "</th>";}
      $output .= "</tr>";
      $temp = 0;
    }
  }
  $output .= "</thead><tbody>";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result))
  {
    $output .= "<tr>";
    if ($row['Pay_ID'] != NULL)
      {$output .= "<th scope='row'>".htmlentities($row['Pay_ID']). "</th>";}
    if ($row['Pay_type'] != NULL)
      {$output .= "<td>".htmlentities($row['Pay_type']). "</td>";}
    $output .= "</tr>";
  }
  $output .= "</tbody></table><br><form action='../payment.html'>
  <div class='form-group row'>
    <div class='col-sm-10'>
      <button type='submit' class='btn btn-primary' name='return' onclick='../payment.html'>Return</button>
    </div>
  </div>
</form></div>";
  echo $output;

?>

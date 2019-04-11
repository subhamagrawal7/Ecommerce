<html>
  <head>
    <title>Customer Update</title>
    <meta charset="utf-8" />
    <title>Add User</title>
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
  $sql = 'SELECT * FROM customers';
  $result = mysqli_query($conn, $sql);

  $output = "";
  $output .= "<div class='container'><h1 class='display-1'>ALL Customer...</h1>
  <br><table class='table table-hover'><thead class='thead-light'>";

  $temp = 1;

  while ($row = mysqli_fetch_assoc($result))
        {
          while($temp)
          {
          $output .= "<tr>";
          if ($row['Cust_ID'] != NULL)
          {$output .= "<th scope='col'>".'CUST_ID'. "</th>";}
          if ($row['First_name'] != NULL)
          {$output .= "<th scope='col'>".'First Name'. "</th>";}
          if ($row['Last_name'] != NULL)
          {$output .= "<th scope='col'>".'Last Name'. "</th>";}
          if ($row['Address'] != NULL)
          {$output .= "<th scope='col'>".'Address'. "</th>";}
          if ($row['City'] != NULL)
          {$output .= "<th scope='col'>".'City'. "</th>";}
          if ($row['State'] != NULL)
          {$output .= "<th scope='col'>".'State'. "</th>";}
          if ($row['Phone'] != NULL)
          {$output .= "<th scope='col'>".'Phone'. "</th>";}
          if ($row['Email'] != NULL)
          {$output .= "<th scope='col'>".'Email'. "</th>";}
          $output .= "</tr>";
          $temp = 0;
        }
        }
  $output .= "</thead><tbody>";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result))
        {
          $output .= "<tr>";
          if ($row['Cust_ID'] != NULL)
            {$output .= "<th scope='row'>".htmlentities($row['Cust_ID']). "</th>";}
          if ($row['First_name'] != NULL)
            {$output .= "<td>".htmlentities($row['First_name']). "</td>";}
          if ($row['Last_name'] != NULL)
            {$output .= "<td>".htmlentities($row['Last_name']). "</td>";}
          if ($row['Address'] != NULL)
            {$output .= "<td>".htmlentities($row['Address']). "</td>";}
          if ($row['City'] != NULL)
            {$output .= "<td>".htmlentities($row['City']). "</td>";}
          if ($row['State'] != NULL)
            {$output .= "<td>".htmlentities($row['State']). "</td>";}
          if ($row['Phone'] != NULL)
            {$output .= "<td>".htmlentities($row['Phone']). "</td>";}
          if ($row['Email'] != NULL)
            {$output .= "<td>".htmlentities($row['Email']). "</td>";}
          $output .= "</tr>";
        }
  $output .= "</tbody></table><br><form action='../customer_HomePage.html'>
  <div class='form-group row'>
    <div class='col-sm-10'>
      <button type='submit' class='btn btn-primary' name='return' onclick='../customer_HomePage.html'>Return</button>
    </div>
  </div>
</form></div>";
  echo $output;

?>

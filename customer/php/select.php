<?php
//   include_once 'php/dbh.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

  error_reporting(E_ALL & ~E_NOTICE);

  //$query = $_POST['query'];
  $sql = 'SELECT * FROM customers';
  $result = mysqli_query($conn, $sql);

  $output = "";
  $output .= "<table border=1 cellspacing=0 cellpading=0>";

  $temp = 1;

  while ($row = mysqli_fetch_assoc($result))
        {
          while($temp)
          {
          $output .= "<tr>";
          if ($row['Cust_ID'] != NULL)
          {$output .= "<th>".'CUST_ID'. "</th>";}
          if ($row['First_name'] != NULL)
          {$output .= "<th>".'First Name'. "</th>";}
          if ($row['Last_name'] != NULL)
          {$output .= "<th>".'Last Name'. "</th>";}
          if ($row['Address'] != NULL)
          {$output .= "<th>".'Address'. "</th>";}
          if ($row['City'] != NULL)
          {$output .= "<th>".'City'. "</th>";}
          if ($row['State'] != NULL)
          {$output .= "<th>".'State'. "</th>";}
          if ($row['Phone'] != NULL)
          {$output .= "<th>".'Phone'. "</th>";}
          if ($row['Email'] != NULL)
          {$output .= "<th>".'Email'. "</th>";}
          $output .= "</tr>";
          $temp = 0;
        }
        }

  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result))
        {
          $output .= "<tr>";
          if ($row['Cust_ID'] != NULL)
            {$output .= "<td>".htmlentities($row['Cust_ID']). "</td>";}
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
  $output .= "</table>";
  echo $output;

?>

<form action="../customer_HomePage.html">
<button type="submit" name="return" onclick="../customer_HomePage.html">Return</button>
</form>

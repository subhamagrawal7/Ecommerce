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

include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

$id = $_GET['id'];
$id = (int)$id;
//echo var_dump($id);
$sql = "DELETE FROM orders WHERE Order_ID = $id";
$result = mysqli_query($conn, $sql);
$success = "Order successfully deleted";
echo $success;
?>

<form action="../orders.html">
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" name="return" onclick="../orders.html" class="btn btn-primary">Return</button>
    </div>
</div>
</form>
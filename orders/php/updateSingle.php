<html>
  <head>
    <title>Orders Update</title>
    <meta charset="utf-8" />
    <title>Update Orders</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <script src='./../../js/order.js' type="text/javascript"></script>
  </body>
</html>
    <?php

    if(isset($_POST['submit']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

        $orderid = $_POST['Order_ID'];
        $custid = $_POST['Cust_ID'];
        $prodid = $_POST['Prod_ID'];
        $orderPrice = $_POST['Price'];
        $quantity = $_POST['Quantity'];
        $orderDate = $_POST['Order_date'];
        $payID = $_POST['Pay_ID'];

        $orderid = (int)$orderid;
        $custid = (int)$custid;
        $prodid = (int)$prodid;
        $payID = (int)$payID;
        $quantity = (int)$quantity;
        $orderPrice = (int)$orderPrice;
        
        $sql = "UPDATE orders SET 
        Order_ID = $orderid,
        Cust_ID = '$custid',
        Prod_ID = '$prodid',
        Price = '$orderPrice',
        Quantity = '$quantity',
        Order_date = '$orderDate',
        Pay_ID = '$payID' WHERE Order_ID = $orderid";

        $result = mysqli_query($conn, $sql);
    }

    if(isset($_GET['id']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";
        $id = $_GET['id'];
        $id = (int)$id;
        $sql = "SELECT * FROM orders WHERE Order_ID = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit']) && $result)
    {
        echo "User Updated successfully";
        header("Location: /Ecommerce/orders/php/update.php");
    }

    $output = "";
    $output .= "<div class='container'><h1 class='display-1'>UPDATE Orders...</h1>
                <br><form method='post' onsubmit='return formValidate(event)'>";

    foreach ($row as $key => $value) {
        //echo $key;
        $output .="<div class='form-group row'><label for='$key' class='col-sm-2 col-form-label'>".htmlentities($key).": </label>";
        $temp = htmlentities($key === 'Order_ID' ? 'readonly' : null);
        //echo var_dump($temp);
        $output .="<div class='col-sm-10'><input type='text' name='$key' required class='form-control' value='$value' $temp/></div>";
        $output .="</div>";
    }
    $output .="<div class='form-group row'><div class='col-sm-10'><input type='submit' name='submit' value='Submit' class='btn btn-primary'></div></div>";
    $output .="</form>";
    echo $output;
    ?>

    <form action=" /Ecommerce/orders/php/update.php">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" name="return" class="btn btn-primary"  value="Return">
        </div>
    </div>
    </form>
    
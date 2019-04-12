<html>
  <head>
    <title>Payments Update</title>
    <meta charset="utf-8" />
    <title>Update Payments</title>
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

    if(isset($_POST['submit']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

        $payID = $_POST['Pay_ID'];
        $payType = $_POST['Pay_type'];

        $payID = (int)$payID;
        
        $sql = "UPDATE payments SET 
        Pay_ID = '$payID',
        Pay_type = '$payType' WHERE Pay_ID = $payID";

        $result = mysqli_query($conn, $sql);
    }

    if(isset($_GET['id']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";
        $id = $_GET['id'];
        $id = (int)$id;
        $sql = "SELECT * FROM payments WHERE Pay_ID = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit']) && $result)
    {
        echo "User Updated successfully";
        header("Location: /Ecommerce/payments/php/update.php");
    }

    $output = "";
    $output .= "<div class='container'><h1 class='display-1'>UPDATE Payments...</h1>
                <br><form method='post'>";

    foreach ($row as $key => $value) {
        //echo $key;
        $output .="<div class='form-group row'><label for='$key' class='col-sm-2 col-form-label'>".htmlentities($key).": </label>";
        $temp = htmlentities($key === 'Pay_ID' ? 'readonly' : null);
        //echo var_dump($temp);
        $output .="<div class='col-sm-10'><input type='text' name='$key' class='form-control' value='$value' $temp/></div>";
        $output .="</div>";
    }
    $output .="<div class='form-group row'><div class='col-sm-10'><input type='submit' name='submit' value='Submit' class='btn btn-primary'></div></div>";
    $output .="</form>";
    echo $output;
    ?>

    <form action=" /Ecommerce/payments/php/update.php">
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" name="return" class="btn btn-primary" onclick=" /Ecommerce/payments/php/update.php">Return</button>
        </div>
    </div>
    </form>

<html>
  <head>
    <title>Supplier Update</title>
    <meta charset="utf-8" />
    <title>Add Supplier</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <script src='./../../js/updatesupp.js' type="text/javascript"></script>
  </body>
</html>
    <?php

    if(isset($_POST['submit']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

        $supplid = $_POST['Suppl_ID'];
        $firstname = $_POST['First_name'];
        $lastname = $_POST['Last_name'];
        $address = $_POST['Address'];
        $city = $_POST['City'];
        $state = $_POST['State'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];

        $supplid = (int)$supplid;
        $phone = (int)$phone;

        $sql = "UPDATE suppliers SET 
        Suppl_ID = $supplid,
        First_name = '$firstname',
        Last_name = '$lastname',                       
        Address = '$address',
        City = '$city',
        State = '$state',
        Phone = '$phone',
        Email = '$email' WHERE Suppl_ID = $supplid";

        $result = mysqli_query($conn, $sql);
    }

    if(isset($_GET['id']))
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";
        $id = $_GET['id'];
        $id = (int)$id;
        $sql = "SELECT * FROM suppliers WHERE Suppl_ID = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit']) && $result)
    {
        echo "User Updated successfully";
        header("Location: /Ecommerce/suppliers/php/update.php");
    }

    $output = "";
    $output .= "<div class='container'><h1 class='display-1'>UPDATE Supplier...</h1>
                <br><form method='post' onsubmit='return formValidate(event)'>";

    foreach ($row as $key => $value) {
        //echo $key;
        $output .="<div class='form-group row'><label for='$key' class='col-sm-2 col-form-label'>".htmlentities($key).": </label>";
        $temp = htmlentities($key === 'Suppl_ID' ? 'readonly' : null);
        //echo var_dump($temp);
        $output .="<div class='col-sm-10'><input type='text' name='$key' id='$key' required class='form-control' value='$value' $temp/></div>";
        $output .="</div>";
       
    }
    $output .="<div class='form-group row'><div class='col-sm-10'><input type='submit' name='submit' value='Submit' class='btn btn-primary'></div></div>";
    $output .="</form>";
    echo $output;
    ?>

    <form action=" /Ecommerce/suppliers/php/update.php">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" name="return" class="btn btn-primary" value="Return">
        </div>
    </div>
    </form>

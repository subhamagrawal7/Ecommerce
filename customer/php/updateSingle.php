<?php

if(isset($_POST['submit']))
{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";

    $custid = $_POST['Cust_ID'];
    $firstname = $_POST['First_name'];
    $lastname = $_POST['Last_name'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];

    $custid = (int)$custid;
    $phone = (int)$phone;

    $sql = "UPDATE customers SET 
    Cust_ID = $custid,
    First_name = '$firstname',
    Last_name = '$lastname',                       
    Address = '$address',
    City = '$city',
    State = '$state',
    Phone = '$phone',
    Email = '$email' WHERE Cust_ID = $custid";

    $result = mysqli_query($conn, $sql);
}

if(isset($_GET['id']))
{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/Ecommerce/php/dbh.php";
    $id = $_GET['id'];
    $id = (int)$id;
    $sql = "SELECT * FROM customers WHERE Cust_ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit']) && $result)
{
    echo "User Updated successfully";
    header("Location: /Ecommerce/customer/php/update.php");
}

$output = "";
$output .= "<form method='post'>";

foreach ($row as $key => $value) {
    //echo $key;
    $output .="<label for='$key'>".htmlentities($key).": </label>";
    $temp = htmlentities($key === 'Cust_ID' ? 'readonly' : null);
    //echo var_dump($temp);
    $output .="<input type='text' name='$key' value='$value' $temp/>";
    $output .="<br />"."<br />";
}
$output .="<input type='submit' name='submit' value='Submit'>";
$output .="</form>";
echo $output;
?>

<form action=" /Ecommerce/customer/php/update.php">
<button type="submit" name="return" onclick=" /Ecommerce/customer/php/update.php">Return</button>
</form>
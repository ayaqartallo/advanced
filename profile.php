<?php
$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'appstore' ) or die(mysqli_error($db));
session_start();
global $fullname;
if(isset($fullname)){
    $fullname=$_POST['f'];

}

$query=mysqli_query($db,"SELECT * FROM users where fullname='$fullname'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

if(isset($_POST["submit"])) {

    $email = $_POST['e'];
    $phone = $_POST['p'];
    $country = $_POST['c'];
    $query = "UPDATE users SET fullname = '$fullname', email = '$email', phone = $phone, country = '$country'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
}
?>

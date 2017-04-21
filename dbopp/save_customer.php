<?php

$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$name = $_POST['name'];


$connect=mysqli_connect("localhost","root","") or die("could not connect to localhost");
mysqli_select_db($connect,"dbopp") or die("could not select database");
$query = "INSERT INTO `dbopp`.`customers` (`state`, `zip`, `country`, `phone`, `name`) VALUES ('$state', '$zip', '$country', '$phone', '$name');";



mysqli_query($connect, $query) or die("Cannot insert into table");

 header('Location: http://myhost:8080/dbopp/customers.php');
?>

<?php 
$Id = $_GET['Id'];
$connect=mysqli_connect("localhost","root","") or die("could not connect to localhost");
mysqli_select_db($connect, "dbopp") or die("could not select database");

$query = "delete from customers where custid=$Id";

mysqli_query($connect, $query);

 header('Location: http://myhost:8080/dbopp/customers.php');

?>
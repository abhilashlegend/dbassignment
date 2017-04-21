<?php
$customer_id = $_POST['custid'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$name = $_POST['name'];



$connect=mysqli_connect("localhost","root","") or die("could not connect to localhost");
mysqli_select_db($connect, "dbopp") or die("could not select database");
$sql = "UPDATE `dbopp`.`customers` SET `state` = '$state', `zip` = '$zip', `country` = '$country', `phone` = '$phone', `name` = '$name' WHERE `customers`.`custid` = $customer_id;"; 
		
			//submit the query
			$done = mysqli_query($connect, $sql) or die(mysql_error($connect)); 
				var_dump($done);
			header('location: http://myhost:8080/dbopp/customers.php');
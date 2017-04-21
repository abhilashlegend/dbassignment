<?php
$connect = mysqli_connect("localhost","root","") ;
if(!$connect) { die("could not connect "); }
mysqli_select_db($connect, "dbopp") or die("could not select database");


					
$customer_id = $_GET['Id'];
$query = "select * from customers where custid = '$customer_id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

$row = mysqli_fetch_assoc($result);
if(array_key_exists('update', $_POST)) 
{
	//prepare expected items for insertion into database
	foreach($_POST as $key => $value)
	{
		if(in_array($key, $expected)) 
		{
			${$key} = mysql_real_escape_string($value);
			// prepare the SQL query
			
			echo "<script>alert('Record updated');</script>";	
		
		}
	}
} 

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Edit Customer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

	<!-- Awesome font -->
	 <link href="css/font-awesome.min.css" rel="stylesheet">

	 
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>

 <body>

<div class="container">
		<div class="row">
			<div class="col-sm-12">	
				<form name="editcont" method="post" action="update_customer.php" enctype="multipart/form-data">
				<div class="form-group row">
					<label for="customer" class="col-2 col-form-label">Customer ID:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="custid" readonly="readonly" value="<?php echo $row['custid']  ?>" />
					</div> 
				</div>
				<div class="form-group row">
					<label for="state" class="col-2 col-form-label">State:</label>
					<div class="col-10">
						<input type="text" name="state" class="form-control" value="<?php echo $row['state'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label for="zip" class="col-2 col-form-label">Zip Code:</label>
					<div class="col-10">
						<input type="text" name="zip" class="form-control" value="<?php echo $row['zip'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label for="country" class="col-2 col-form-label">Country:</label>
					<div class="col-10">
						<input type="text" name="country" class="form-control" value="<?php echo $row['country'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-2 col-form-label">Phone:</label>
					<div class="col-10">
						<input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-2 col-form-label">Name:</label>
					<div class="col-10">
						<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label> &nbsp; </label>
					<div class="offset-sm-2 col-sm-10">
						<input type="submit" class="btn btn-primary" name="update" value="Update" />
						<input type="reset" name="reset" class="btn btn-danger" value="Clear" />
					</div>
				</div>
				</form>
			</div> <!-- End of col sm 12 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->




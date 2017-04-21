<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Add Customer</title>

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
				<form name="addcont" method="post" action="save_customer.php" enctype="multipart/form-data">
				<div class="form-group row">
					<label for="state" class="col-2 col-form-label">State:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="state" />
					</div> 
				</div>
				<div class="form-group row">
					<label for="zip" class="col-2 col-form-label">Zip:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="zip" />
					</div> 
				</div>
				<div class="form-group row">
					<label for="country" class="col-2 col-form-label">Country:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="country" />
					</div> 
				</div>
				<div class="form-group row">
					<label for="country" class="col-2 col-form-label">Phone:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="phone" />
					</div> 
				</div>
				<div class="form-group row">
					<label for="name" class="col-2 col-form-label">Name:</label>
					<div class="col-10">
						<input type="text" class="form-control" name="name" />
					</div> 
				</div>
				<div class="form-group row">
					<label> &nbsp; </label>
					<div class="offset-sm-2 col-sm-10">
						<input type="submit" class="btn btn-primary" name="save" value="Save" />
						<input type="reset" name="reset" class="btn btn-danger" value="Clear" />
					</div>
				</div>
				
				</form>
			</div> <!-- End of col - sm - 12 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->
	



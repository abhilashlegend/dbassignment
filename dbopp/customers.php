<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Customers</title>

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
				<button onclick="window.location='add_customer.php'" class="btn btn-primary">Add</button>
				<button onclick="window.location='tcpdf/report/pdf_report.php'" class="btn btn-primary">Print</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			<div class="table-responsive" style="margin-top:40px;">
					<table class="table">
						<tr>
							<th>Customer</th><th>State</th><th>ZIP Code</th><th>Country</th><th>Phone</th><th>Name</th><th>Action</th>
						</tr>
						<?php
						$connect=mysqli_connect("localhost","root","") or die("could not connect to localhost");
						mysqli_select_db($connect, "dbopp") or die("could not select database");
						$query = "select custid,state,zip, country, phone, name from customers"; 
						$result=mysqli_query($connect, $query) or die(mysqli_error($connect));
						while($rows=mysqli_fetch_row($result))
						{
						
						echo"<tr>";
						foreach($rows as $field)
						{
						echo "<td>$field";
						echo "</td>" ;
						}
						echo "<td><a href='edit_customer.php?Id=$rows[0]'> Edit</a> | ";
								echo "<a href='delete_customer.php?Id=$rows[0]'> Delete</a></td>";
						echo '<tr/>';
						}
					
						?>
					</table>
				</div> <!-- End of table responsive -->
			</div> <!-- End of col sm 12 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->
 </body>
</html>
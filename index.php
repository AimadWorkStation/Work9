<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Work 9</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container text-center">
		<h4>Search by UserName : </h4>
		<input type="text" id="search" class="w-50 ml-5 mt-5 mb-5 form-control" autocomplete="off">
		<div class="table-responsive-sm">
		  <table class="table">
		  	<thead>
		    	<tr>
				  <td class="table-active">UserID</td>
				  <td class="table-primary">User Name</td>
				  <td class="table-secondary">Password</td>
				  <td class="table-success">Email</td>
				  <td class="table-danger">Full Name</td>
				  <td class="table-warning">Adress</td>
				  <td class="table-info">City</td>
				</tr>
			</thead>
			<tbody id='tbody'>
				
			</tbody>
		  </table>
		</div>

	</div>	
	



	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/plugins.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Civi Cart</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Civi Cart</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Products</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-8" id="signup_msg">
					<!-- alert from sign up msg   -->
				</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Sign Up Form</div>
					<div class="panel-body">
						<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-Enter Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile No</label>
								<input type="number" id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="textarea" id="address1" name="address1" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 2</label>
								<input type="textarea" id="address2" name="address2" class="form-control">
							</div>
						</div>
						<p></br></p>
						<div class="row">
							<div class="col-md-12">
								<input type="button" style="float:right;" value="Sign Up" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
							</div>
						</div>
						</form>
					</div>
				<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
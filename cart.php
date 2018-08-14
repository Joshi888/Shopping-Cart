<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
?>
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
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Contact Us</a></li>
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2"><b>Action</b><br><br></div>
							<div class="col-md-2"><b>Product Image</b></div>
							<div class="col-md-2"><b>Product Name</b></div>
							<div class="col-md-2"><b>Quantity</b></div>
							<div class="col-md-2"><b>Product Price</b></div>
							<div class="col-md-2"><b>Price</b></div>
						</div>
						<div id="cart_checkout">
						</div>
						<!--<div class="row">
							<div class="col-md-2">
									<div class="btn-group">
										<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
							</div>
							<div class="col-md-2"><img src="product_images/hibond.jpg" width="100px" height="90px"></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
							<div class="col-md-2"><input type="text" class="form-control" value="1"></div>
							<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
						</div>-->
						<!--<div class="row">
							<div class="col-md-8"></div>
								<div class="col-md-4">
									<b>Sub Total 5000</b>
								</div>
						</div>-->
					</div>
					<div class="panel-footer" align="center">&copy; 2018-www.civicart.com</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
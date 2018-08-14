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
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Products</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Contact Us</a></li>
				<li style="width:300px; left:10px; top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="left:20px; top:10px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sr.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price:</div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
									<!--<div class="row">
										<div class="col-md-3">Sr.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price:</div>
									</div>-->
									</div>
								</div>
								<div class="panel-footer" align="center">&copy; 2018-www.civicart.com</div>
							</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;
					<?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-icon-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-icon-decoration:none; color:blue;">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-icon-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">	
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">	
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brands</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>-->
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--here we get product with jquery and ajax request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Ambuja Cement</div>
								<div class="panel-body">
									<img src="product_images/sandhi_cement.jpg" width="220px">
								</div>
								<div class="panel-heading">$500.00
									<button style="float:right;" class="btn btn-danger btn-xs">Add To Cart</button>
								</div>
							</div>
						</div>-->
					</div>
					<div class="row">
						<div class="col-md-12">
							<center>
							<ul class="pagination" id="pageno">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
							</center>
						</div>
					</div>
					<div class="panel-footer" align="center">&copy; 2018-www.civicart.com</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
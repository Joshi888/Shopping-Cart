<?php
session_start();

$trx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["amt"];
$cc = $_GET["cc"];
$cm = $_GET["cm"];
if($_COOKIE["ta"] == $amt && $p_st == "completed" && $_cm == $_SESSION["uid"])
{
	echo "Ok";
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
	<style>
		table tr td {padding: 10px;}
	</style>
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
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Thank For Shopping</h1>
						<hr/>
						<p>Hello <?php echo $_SESSION["name"]; ?>,Your Payment process successfully completed Your Transaction Id is <b><?php echo $trx_id; ?></b><br>
						You Can Continue Shopping</br></p>
						<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
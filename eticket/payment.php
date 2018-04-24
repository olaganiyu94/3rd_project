<?php
session_start();
if (!isset($_SESSION['userid'])){
header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Payment Page</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- Custom styles for this template -->
	<link href="css/heroic-features.css" rel="stylesheet">
	
</head>
<body>
	<div id="app">
		<?php
		include "includes/navar.php";
		?>
		<!-- Page Content -->

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4" style="margin:  auto;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Payment Details
							</h3>
							<div class="checkbox pull-right">
								<label>
									<input type="checkbox" />
									Remember
								</label>
							</div>
						</div>
						<div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label for="cardNumber">
									CARD NUMBER</label>
									<div class="input-group">
										<input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
										required autofocus />
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-7 col-md-7">
										<div class="form-group">
											<label for="expityMonth">
											EXPIRY DATE</label>
											<div class="col-xs-6 col-lg-6 pl-ziro">
												<input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
											</div>
											<div class="col-xs-6 col-lg-6 pl-ziro">
												<input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
											</div>
										</div>
										<div class="col-xs-5 col-md-5 pull-right">
											<div class="form-group">
												<label for="cvCode">
												CV CODE</label>
												<input type="password" class="form-control" id="cvCode" placeholder="CV" required />
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
							</li>
						</ul>
						<br/>
						<a href="confirmPayment.php" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
					</div>
				</div>
			</div>
			<footer class="py-5 bg-dark">
				<div class="container">
					<p class="m-0 text-center text-white">Assignment</p>
				</div>
				<!-- /.container -->
			</footer>

			<!-- Bootstrap core JavaScript -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		</body>

		</html>

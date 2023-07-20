<?php
// Turn off error reporting
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		.calu{
			width: 100%;
			padding: 40px;
		}
		.image{
			width: 100%;
			position: absolute;
			z-index: -1;
			height: 100%;
		}
		h5{
			padding: 50px;
			margin-top: -50px;
			font-size: 16px;
			color: white;
		}
		.form-label{
			color: white;
		}
		.looks{
			color: red;
		}
		.place{
			font-size: 13px;
			font-weight: 600;
		}
		.kilo{
			color: white; background: red; width: 650px;
			padding: 30px;
			font-size: 17px;
		}
		#demo{
			margin-top: 20px; background: green;color: white; width: 650px;
			padding: 30px;
			font-size: 17px;
		}
		@media screen and (max-width: 600px) {
			.kilo{
			color: white; background: red; width: 380px;text-align: center;padding: 20px;font-size: 16px;
		}
		#demo{
			margin-top: 15px; background: green; width: 380px;text-align: center;padding: 20px;color: white;font-size: 16px;
		}
		}
		@media screen and (max-width: 400px) {
			.kilo{
			color: white; background: red; width: 280px;text-align: center;padding: 20px;font-size: 15px;margin-top: -40px;
		}
		#demo{
			margin-top: 15px; background: green; width: 280px;text-align: center;padding: 20px;color: white;font-size: 15px;
		}
		}
	</style>
</head>
<body>
	<img src="https://images.pexels.com/photos/3602009/pexels-photo-3602009.jpeg?cs=srgb&dl=pexels-sergio-souza-3602009.jpg&fm=jpg" class="image">
	<h3 style="text-align: center;  color: red;font-size: 18px;padding: 20px;">Fuel topup</h3>
<form class="row g-3  calu" action="" method="post">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Your car mileage</label>
    <input type="text" class="form-control is-valid  place" id="validationServer01"  required name="carmileage" placeholder="Enter your car mileage">
    <div class="valid-feedback" class="looks">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Kilometer you want to go</label>
    <input type="text" class="form-control is-valid  place" id="validationServer02"  required name="kilometer" placeholder="Enter your kilometer you want to go">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Petrol Or Diseal Price</label>
    <input type="text" class="form-control is-valid  place" id="validationServer02"  required name="fuel" placeholder="Enter your Petrol Or Diseal Price">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

<h5>Your car mileage is: <?php echo $_POST['carmileage'];?></h5>

<h4 class="kilo">Kilometer you want to go: <?php echo $_POST['kilometer'];?> Km</h5>

<h4 id="demo" ></h5>
<script type="text/javascript">
	var a = <?php echo $_POST['kilometer']; ?>;
	var b = <?php echo $_POST['carmileage'];?>;
	var c = <?php echo $_POST['fuel'];?>;
	var d = a / b * c;
	document.getElementById("demo").innerHTML = "Fuel top-up:  ₹" + d ;
</script>
</body>
</html>
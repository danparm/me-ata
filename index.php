<!DOCTYPE html>
<html>
<head>
	<title>Me-ata</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<!-- Styles -->
	<link rel="stylesheet/less" type="text/css" href="styles/style.less">
	<!-- Scripts -->
	<script type="text/javascript" src="scripts/less.js"></script>
	<script type="text/javascript" src="scripts/moment.min.js"></script>
	<script type="text/javascript" src="scripts/forecast.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<img src="/pix/source/logo.svg" width="300" />
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<script>
						var latitude = '52.4308';
	        			var longitude = '13.2588';

	        			var forecast = new GetForecast();

	        			var condition = forecast.getCurrentConditions(latitude, longitude);

				        $(function () {
				        	$('#currentTemp').text(condition.daily.data.length)
				        });

        			</script>

        			<ul id="weeklyTemps">

        			</ul>

					
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<img class="pull-right" src="/pix/source/logo.svg" width="100" />
		</div>
	</div>
</body>

</html>
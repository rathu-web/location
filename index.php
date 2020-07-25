<!DOCTYPE html>
<html>
<head>
  <title>RATHU-USERLOCATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
			<div class="container p-3 text-center bg-success">
			<h4 class="pl-5 text-white  ">User's latitude and longitude</h4>
			</div>
			</br>

		<div class="container  bg-primary p-2">



			<p>Click here to get the latitude and longitude</p>
			<div class="container">

			<button onclick="getLocation()">location</button>
			</div>
			</br>
		<div class="container-fluid bg-warning">
			<p id="demo"></p>
			</div>
			
			<script>
				var x = document.getElementById("demo");

				function getLocation() {
  					if (navigator.geolocation) {
    					navigator.geolocation.getCurrentPosition(showPosition);
  					} else { 
    					x.innerHTML = "Geolocation is not supported by this browser.";
  					}
				}

				function showPosition(position) {
  					x.innerHTML = "Latitude: " + position.coords.latitude + 
  					"<br>Longitude: " + position.coords.longitude;
				}
			</script>



		</div>		

	<div class="container p-3 text-center bg-danger">
			<h4 class="pl-5 text-white  ">Designed by Rathu-17ITR075</h4>
			</div>
	</div>
</body>
</html>
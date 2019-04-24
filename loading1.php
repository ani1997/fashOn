<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="refresh" content="3;url=men.php" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Merienda|Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Sacramento|Satisfy" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="index.css">

	<title>WELCOME</title>

</head>
<body onload="document.body.style.opacity='1'">

	<div class="myntra-overlay-men">

		<div class="myntra-overlay-icon">
			
			<img class="myntra-overlay-icon-1" src="images/gif/animat-campfire-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-chop-wood-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-compass-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-customize-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-day-night-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-diamond-color.gif" height="75px" width="75px">

		</div>

		<div class="myntra-overlay-icon-parent">
			
			<img class="myntra-overlay-icon-1" src="images/gif/animat-swiss-knife-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-grill-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-image-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-lightbulb-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-linechart-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-pencil-color.gif" height="75px" width="75px">

		</div>

		<div class="myntra-overlay-icon-parent">
			
			<img class="myntra-overlay-icon-1" src="images/gif/animat-responsive-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-road-trip-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-rocket-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-search-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-sign-post-color.gif" height="75px" width="75px">
			<img class="myntra-overlay-icon-2" src="images/gif/animat-tent-color.gif" height="75px" width="75px">

		</div>
		
	</div>

	<div id="cssload-pgloading">

		<div class="cssload-loadingwrap">

			<ul class="cssload-bokeh">

				<li></li>
				<li></li>
				<li></li>
				<li></li>
			
			</ul>
		
		</div>

		<div>

			<p style="position: absolute;top: 20px; text-align: center; left: 300px;font-size: 70px;font-weight: bold;text-shadow: 4px 5px black;z-index: 2;color: #76d7c4;font-family: 'Sacramento', cursive;"><br>Men's Fashion Shop - Myntra</p>
			
			<p style="position: absolute; top: 500px; left: 550px; opacity: 1; font-size: 50px; color:  #fff; z-index: 1; opacity: .8;text-shadow: 2px 2px black;font-family: 'Satisfy', cursive; font-weight: bold;" class="loading-text"><b>Just a Moment...</b></p>

		</div>
	
	</div>

	<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		  if (prevScrollpos > currentScrollPos) {
		    document.getElementById("navbar").style.top = "-50px";
		  } else {
		    document.getElementById("navbar").style.top = "-120px";
		  }
		  prevScrollpos = currentScrollPos;
		}
	</script>

</body>
</html>
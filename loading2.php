<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="refresh" content="3;url=about.php" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Merienda|Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Satisfy|Ropa+Sons" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="index.css">

	<title>Please be Patient...</title>

</head>
<body onload="document.body.style.opacity='1'">

	<div class="myntra-overlay">

		<div class="myntra-overlay-icon">
			
			<img class="myntra-overlay-icon-1" src="images/icons/icons8-clothes-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-trousers-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-skirt-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-winter-boots-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-wedding-dress-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-apple-watch-128.png" height="70px" width="70px">

		</div>

		<div class="myntra-overlay-icon-parent">
			
			<img class="myntra-overlay-icon-1" src="images/icons/icons8-lipstick-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-baseball-cap-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-coat-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-flip-flops-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-shorts-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-sock-outline-96.png" height="70px" width="70px">

		</div>

		<div class="myntra-overlay-icon-parent">
			
			<img class="myntra-overlay-icon-1" src="images/icons/icons8-sun-glasses-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-bra-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-jacket-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-apple-watch-96.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-hanger-80.png" height="70px" width="70px">
			<img class="myntra-overlay-icon-2" src="images/icons/icons8-t-shirt-96.png" height="70px" width="70px">

		</div>
		
	</div>

		<div class="frame">

		   <div class="center">

		      <div class="dot-1"></div>
		      <div class="dot-2"></div>
		      <div class="dot-3"></div>

		   </div>

		</div>

		<div>
			
			<p style="position: absolute; top: 400px; left: 400px; opacity: 1; width: 600px; font-size: 25px; text-align: justify; color:  #e74c3c ; z-index: 2;font-family: 'Satisfy', cursive; font-weight: bold;" class="loading-text"><b>Give a girl the right shoes and she can conquer the world.<br></b></p>

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
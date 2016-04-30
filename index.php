<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/normalize.css">
	
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/main.css">
    <title>The Benz Doctor</title>
</head>
<body data-spy="scroll" data-target="#mynavBar">

<!-- Brand and Navigation Bar -->
<nav role="navigation" class="container-fluid navbar navbar-custom navbar-fixed-top" id="mynavBar">
	<div class="navbar-header">
		<a href="#" class="navbar-brand">THE BENZ DOCTOR&nbsp;
		<span class="nav_address">123 California Drive, Burlingame, CA 94010</span></a>
		<button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</div>
	<div class="navbar-collapse collapse" id="navbarCollapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#location">Location</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		
	</div>
</nav>

<div id="contents" class="container-fluid">

	<!-- Carousel -->
	<section id="home" class="container-fluid">
		<div class="carousel slide" id="myCarousel" data-ride="carousel">
			
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<!-- Carousel items/pics -->
				<div class="item active">
					<img src="images/black_mercedes.jpg">
					<div class="carousel-caption">
						<h3>This is test picture 1 for the carousel</h3>
					</div>
				</div>
				<div class="item">
					<img src="images/inside_mercedes.jpg">
					<div class="carousel-caption">
						<h3>This is test picture 2 for the carousel</h3>
					</div>
				</div>
				<div class="item">
					<img src="images/white_mercedes.jpg">
					<div class="carousel-caption">
						<h3>This is test picture 3 for the carousel</h3>
					</div>
				</div>
				
				<!-- Carousel controls -->
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="sr-only">Previous</span>
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="sr-only">Next</span>
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		
	</section>

	<!-- About -->
	<section id="about" class="container">
		<h2 class="accent">About</h2>
		<p>My name is Ray "The Benz Doctor".</p>
		<p>I am factory trained and have been repairing Mercedes-Benz automobiles for over 25 years. My work is of the highest quality and my prices are reasonable.</p>
		<p>Offers:
			<ul>
				<li>Early Bird Drop Off</li>
				<li>Free Pick-up and Delivery</li>
				<li>Free Pre-Sale Inspections (Let me check it out before you buy!)</li>
				<li>Free Diagnostic Check</li>
				<li>Free Safety Check and Light Bulb Change</li>
				<li>Now offering full Body Shop service! Bring me your scratches and dents!</li>
			</ul>	
		</p>
		<p>Please come in for your free inspection of your Mercedes-Benz!</p>
	</section>

	<!-- Location -->
	<section id="location" class="container">
		<h2 class="accent">Location</h2>
		<div class="row">
			<div class="location-text col-sm-6">
				<p>I am located at <span class="strong">123 California Dr, Burlingame, CA 94010</span>.</p>
				<p>My shop is in a very central location.  It is close to the Burlingame Caltrain station and many shopping locations!</p>
			</div>
			<div class="location-map col-sm-6" id="location-map">
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="container">
		<h2 class="accent">Contact</h2>
		<p>Please contact me if you have any questions.</p>
		<br />
		<div class="row">
			<div class="col-sm-3">
				<p><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;(650) 759-0003</p>
				<p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;thebenzdoctor@gmail.com</p>
			</div>
		
			<div class="contactform col-sm-offset-1 col-sm-6">
								
				<form method="post">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" placeholder="Name" class="form-control" maxlength="60" required>
					</div>
					<div class="form-group">
						<label for="phone_number">Phone Number:</label>
						<input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" class="form-control" maxlength="12" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" placeholder="Email" class="form-control" maxlength="60">
					</div>
					<div class="form-group">
						<label for="carinfo">Mercedes Model:</label>
						<input type="text" name="carinfo" id="carinfo" placeholder="Model" class="form-control" maxlength="20">
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea name="message" id="message" class="form-control" rows="5" maxlength="400" required></textarea>
					</div>
					<div class="form-group form-button">
						<input type="submit" name="submit" class="btn btn-success btn-large" value="Send Message">
					</div>
				</form>
			</div>
		</div>
	</section>

</div>

<!-- Footer -->
<footer class="footer container-fluid">
<p>&copy;&nbsp;2016 geldwerks</p>
	
</footer>

	<!-- jQuery CDN -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8DHcKZkdt2OekFpKSnzPXpz_35MFllu4"></script>

    <script src="js/app.js"></script>
</body>
</html>
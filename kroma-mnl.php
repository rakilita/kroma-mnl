<!doctype html>

<html lang="en">
	<head>
		<title>KromaMNL</title>
		<link rel="icon" type="image/png" href="media/kroma.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
  <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <!-- CSS Stylesheets -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="kroma.css">
  <!-- Bootstrap Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/7da5c42c2e.js" crossorigin="anonymous"></script>	
  <!-- jQuery Lib -->		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>	
	<body>
		<div class="mainBox container-fluid">
			<section id="nav">
				<nav class="navbar navbar-expand-lg">
					<div class="nav-social text-left">
						<i class="fab fa-instagram-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-facebook-square"></i>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
						<span class="navbar-button"><i class="fas fa-ellipsis-h"></i></span>
					</button>
					<div class="collapse navbar-collapse" id="navMenu">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="#about">kroma-MNL</a></li>
							<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						</ul>
					</div>
				</nav>
			</section>			
			<div class="content-box">
				<section id="about">
					<div class="row align-items-center">
						<div class="about-intro col-lg-8 col-md-8 col-sm-6">
							<h5 class="intro-h5">don&apos; be afraid to</h5>
							<h2 class="intro-h2">WEAR THE<br><span>COLOURS</span><br> OF THE SKY</h2>
						</div>
						<div class="about-img col-lg-4 col-md-4 col-sm-6">
							<img class="imahe" src="media/sample3.jpg">
						</div>
					</div>
				</section>
				 
				<section id="gallery">
					<h2 class="gallery-h2"><span>Our Journey</span></h2>
					<ul class="gallery-box">
						<li>
							<div class="box imahe-1">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li>
							<div class="box imahe-2">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li>
							<div class="box imahe-3">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li class="limiter">
							<div class="box imahe-2">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li class="limiter">
							<div class="box imahe-3">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li class="limiter">
							<div class="box imahe-1">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li class="limiter">
							<div class="box imahe-3">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
						<li class="limiter">
							<div class="box imahe-1">
								<div class="box-info">
									<h3>Sample Image Here</h3>
									<a href="#">View album</a>
								</div>
							</div>
						</li>
					</ul>
				</section>
				<section id="contact">
					<div class="contact-us">
						<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
						<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
						
						<form id="contact-form" name="contact-form" action="mail.php" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="md-form mb-0">
										<input type="text" id="name" name="name" class="form-control">
										<label for="name" class="">Your name</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="md-form mb-0">
										<input type="text" id="email" name="email" class="form-control">
										<label for="email" class="">Your email</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="md-form mb-0">
										<input type="text" id="subject" name="subject" class="form-control">
										<label for="subject" class="">Subject</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="md-form">
										<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
										<label for="message">Your message</label>
									</div>
								</div>
							</div>
						</form>
						<div class="text-center text-md-left">
							<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
						</div>
					</div>
				</section>
			</div>
		</div>
				
		<script>
			$(document).ready(function () {
				$(document).click(function (event) {
					var clickover = $(event.target);
					var opened = $(".navbar-collapse").hasClass("show");
					if (opened === true && !clickover.hasClass("navbar-toggler")) {
						$(".navbar-toggler").click();
					}
				});
			});
		</script>
		
	</body>
</html>
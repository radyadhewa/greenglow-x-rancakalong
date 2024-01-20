<!-- Initiate HTML files -->
<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Call .css & .js files-->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="{{ asset('js/custom.js') }}"></script>
	<title>Desa Rancakalong</title>
</head>

<body>
	<!-- Start of NavBar -->
	<header>
		<nav style="background-color: transparent !important;" class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
			<div class="container">
				<a class="navbar-brand" href="/index">GreenGlow X Rancakalong<span>.</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li><a class="nav-link" href="/index">Home</a></li>
						<li><a class="nav-link" href="shop">Shop</a></li>
						<li><a class="nav-link" href="about">About GreenGlow</a></li>
						<li class="nav-item active">
							<a class="nav-link" href="rancakalong">About Rancakalong</a>
						</li>
						<li><a class="nav-link" href="blog">Edu</a></li>
						<li><a class="nav-link" href="contact">Contact us</a></li>
						<li><a class="nav-link" href="/">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End of NavBar -->

	<!-- Start About Village Big Section -->
	<section class="showcase">
		<video src="videos\rancakalong_profile_vid.mp4" muted loop autoplay></video>

		<div class="overlay"></div>

		<div class="text">
			<h2>Rancakalong Village</h2>
			<p>Nestled in the heart of nature, Rancakalong Village offers a serene escape from the hustle and bustle of modern life. Surrounded by lush greenery and embraced by the melodies of chirping birds, this village embodies the essence of tranquility.</p>
			<button type="button" class="btn" onclick="play1()">
				<img src="images\video.png" alt="video" style="width: 18px; filter: brightness(0) invert(1) grayscale(1);">
				&nbsp;Discover Rancakalong!
			</button>
		</div>

		<div class="scroll-down-container">
				<img src="images\scroll-down.png" alt="scroll" class="scroll-down-img" data-src="images\scroll-down.png" data-loaded="true">
		</div>

		<div style="margin: 10 auto; margin-bottom: 35px; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 10;">
				<p class="text">Scroll Down to See More!</p>
		</div>
	</section>
	<!-- End About Village Section -->

	<!-- Start VisiMisi -->
	<section style="min-height: 100vh">
	<div class="village" id="visimisi">
		<div style="padding-top: 125px; padding-left: 350px; padding-right: 50px">
			<div class="text" style="flex: 1;">
				<h1 style="color: #3B5D50;">Our</h1>
				<h1 style="color: #6C8F81;">&emsp;&nbsp;Vision</h1>
				<h1 style="margin-top:-50px; border-radius: 50%; color:#374B43">&emsp;&emsp;&ensp;&nbsp;. . .</h1>
			</div>
		</div>
		<div>
			<div style="flex: 1; justify-content: flex-end; margin-top: 30px;">
				<img src="images\PakWawanKades.png" alt="kades">
			</div>
		</div>
	</div>
	<div style="padding: 25px 350px;" class="text">
		<p style="color: #374B43">"TERWUJUDNYA DESA RANCAKALONG YANG AMAN, SEHAT, CERDAS, BERDAYA SAING, BERBUDAYA DAN BERAKHLAK MULIA"</p>
	</div>
	</section>
	<!-- End VisiMisi -->


	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section">
		<div class="container">
			<div class="row my-5">
				<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
						<div class="icon">
							<img src="images/truck.svg" alt="Image" class="imf-fluid">
						</div>
						<h3>Fast &amp; Free Shipping</h3>
						<p>Experience the convenience of swift and cost-free delivery with our Fast & Free Shipping service. At [Your Company Name], we understand the importance of timely deliveries. From checkout to your doorstep, we ensure a seamless shipping experience that aligns with your fast-paced lifestyle. Say goodbye to delays and embrace the efficiency of our shipping solutions.</p>
					</div>
				</div>

				<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
						<div class="icon">
							<img src="images/bag.svg" alt="Image" class="imf-fluid">
						</div>
						<h3>Easy to Shop</h3>
						<p>Shopping made simple and enjoyable – that's our commitment to you. Navigate our user-friendly website or visit our store, where a curated selection awaits. At [Your Company Name], we believe that the shopping experience should be as delightful as the products themselves. Explore with ease and shop with confidence, knowing that simplicity is the key to a satisfying purchase.</p>
					</div>
				</div>

				<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
						<div class="icon">
							<img src="images/support.svg" alt="Image" class="imf-fluid">
						</div>
						<h3>24/7 Support</h3>
						<p>Your satisfaction is our priority, and that's why we offer round-the-clock support. Whether you have questions about our products, need assistance with an order, or simply seek guidance, our dedicated support team is here for you 24/7. At [Your Company Name], customer support isn't just a service – it's a commitment to ensuring your peace of mind at any hour.</p>
					</div>
				</div>

				<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
						<div class="icon">
							<img src="images/return.svg" alt="Image" class="imf-fluid">
						</div>
						<h3>Hassle Free Returns</h3>
						<p>We understand that sometimes things don't go as planned. That's why we've made our returns process as hassle-free as possible. If you're not completely satisfied with your purchase, our straightforward returns policy allows you to return items effortlessly. At [Your Company Name], we believe in making every aspect of your shopping experience enjoyable, including the returns process.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section -->

	<!-- Start Testimonial Slider -->
	<div class="testimonial-section before-footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="section-title">Testimonials</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider-wrap text-center">

						<div id="testimonial-nav">
							<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
							<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
						</div>

						<div class="testimonial-slider">

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;I have been using GreenGlow's natural soap for quite some time, and I must say it's a game-changer in the world of personal care. What sets GreenGlow apart is not just its commitment to providing a top-notch product, but its dedication to embracing the circular economy through recycled waste. It's more than just soap; it's a step towards a sustainable future.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/pp-2.png" alt="Jared Peto" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Jared Peto</h3>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Knowing that the soap I use contributes to the circular economy by utilizing recycled waste is truly empowering. GreenGlow's innovative approach from Rancakalong Village is not just distinctive; it's a beacon for a more eco-friendly and responsible lifestyle.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/pp-1.png" alt="Mario Oza" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Mario Oza</h3>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;The soap itself is a testament to quality and care. The natural ingredients leave my skin feeling refreshed and nourished, a stark contrast to the harsh chemicals found in many conventional products. The delightful fragrance, coupled with the knowledge that it's made with a commitment to sustainability, makes every use a mindful and satisfying experience.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/pp-3.png" alt="Kosimin Apk" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Kosimin Apk</h3>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Testimonial Slider -->



	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="images/soap1.png" alt="Image" class="img-fluid" style="min-height: 120%; min-width: 120%">
			</div>

			<!-- <div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div> -->

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">GreenGlow<span>.</span></a></div>
					<p class="mb-4">Embraces a zero-waste ethos by offering a range of beauty and soap products made from natural ingredients, packaged in materials sourced from recycling. With a commitment to sustainability, the project seeks to minimize environmental impact by avoiding synthetic additives and utilizing recycled packaging. </p>

					<ul class="list-unstyled custom-social">
						<li><a href="https://www.youtube.com/watch?v=8ZsRryHYBwg" target="_blank">
								<span class="fa fa-brands fa-youtube"></span>
							</a></span></a>
						</li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="/">Home</a></li>
								<li><a href="about">About GreenGlow</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="shop">Shop</a></li>
								<li><a href="rancakalong">Our Partner</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="about">About Us</a></li>
								<li><a href="contact">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved. &mdash; Designed with love by <a href="">GreenGlow</a> Distributed By <a href="">GreenGlow</a>
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
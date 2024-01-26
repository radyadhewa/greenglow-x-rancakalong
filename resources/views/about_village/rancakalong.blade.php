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
	<!-- <link href="{{ asset('css/style-event.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
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
			<a href="{{ url('#visimisi') }}">
				<img src="images\scroll-down.png" alt="scroll" class="scroll-down-img" data-src="images\scroll-down.png" data-loaded="true">
			</a>
		</div>

		<div style="margin: 10 auto; margin-bottom: 35px; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 10;">
				<p class="text">Scroll Down to See More!</p>
		</div>
	</section>
	<!-- End About Village Section -->

	<!-- Start VisiMisi -->
	<section style="min-height: 100vh;" id="visimisi">
	<div class="village">
		<div style="padding-top: 125px; padding-left: 350px; padding-right: 50px">
			<div class="text" style="flex: 1;">
				<h1 style="color: #3B5D50; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">Our</h1>
				<h1 style="color: #6C8F81;">&emsp;&nbsp;Vision</h1>
				<h1 style="margin-top:-50px; border-radius: 50%; color:#f9bf29">&emsp;&emsp;&ensp;&nbsp;. . .</h1>
			</div>
		</div>
		<div>
			<div style="flex: 1; justify-content: flex-end; margin-top: 30px;">
				<img src="images\PakWawanKades.png" alt="kades">
				<h2 style="color: #3D4A3E;">&nbsp;&nbsp;&nbsp; H. Wawan Suwandi, SE.MM.MSi.</h2>
				<h3>&nbsp;&nbsp;&nbsp;&nbsp; as our "Kepala Desa"</h3>
			</div>
		</div>
	</div>
	<div class="visimisi">
		<p style="color: #374B43">"We aspire to grow Rancakalong Village into a safe place yet healthy living environment for people to reside in, fostering intelligence, competitiveness, cultural richness, and virtuous value among our community."</p>
		<div class="learn-more">
			<a
				href="https://jadesta.kemenparekraf.go.id/desa/rancakalong_1" target="_blank" class="btn btn-primary" style="background: #3b5d50 !important;">Learn more about Rancakalong Village!
				<img src="images\right-arrow-ylw.png" alt="video" style="width: 18px;">
			</a>
		</div>
	</div>
	</section>
	<!-- End VisiMisi -->

<!-- Start event -->
<div class="homepage-next-events">
	<div class="container">
			<div class="row">
					<div class="next-events-section-header">
							<h2 class="entry-title">Upcoming Events</h2>
							<p>Join us for a series of thrilling events that promise to make Rancakalong Village come alive! Experience the vibrant atmosphere as we bring you engaging activities and cultural festivities. There's always something for everyone.</p>
					</div>
			</div>

			<div class="row">
					<div class="col-12 col-sm-6 col-md-4">
							<div class="next-event-wrap">
									<figure>
											<a href="#"><img src="images/ngalaksa.jpg" alt="1"></a>

											<div class="event-rating">8.9</div>
									</figure>

									<div class="entry-header">
											<h1 class="entry-title">Upacara Adat Ngalaksa</h1>
											<div class="posted-date">Tuesday <span>Jan 30, 2024</span></div>
									</div>

									<div class="entry-content">
											<p>Ngalaksa, a traditional ceremony in Indonesia, is celebrated through the captivating artistry of its namesake dance, showcasing cultural richness and storytelling.</p>
									</div>

									<footer class="entry-footer">
											<a href="#">Make a visit</a>
									</footer>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4">
							<div class="next-event-wrap">
									<figure>
											<a href="#"><img src="images/geoteater.jpg" alt="1"></a>

											<div class="event-rating">7.9</div>
									</figure>

									<div class="entry-header">
											<h3 class="entry-title">Peresmian Geo-Teater</h3>

											<div class="posted-date">Friday <span>Feb 23, 2024</span></div>
									</div>

									<div class="entry-content">
											<p>Experience the grand inauguration of Geo Theater Rancakalong, a groundbreaking venue where technology meets the arts.</p>
									</div>

									<footer class="entry-footer">
											<a href="#">Make a visit</a>
									</footer>
							</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4">
							<div class="next-event-wrap">
									<figure>
											<a href="#"><img src="images/desawisata.jpg" alt="1"></a>

											<div class="event-rating">9.9</div>
									</figure>

									<div class="entry-header">
											<h3 class="entry-title">Desa Wisata Rancakalong</h3>

											<div class="posted-date">Every <span>weekend</span></div>
									</div>

									<div class="entry-content">
											<p>Feel the breeze at Rancakalong Village every weekend! Enjoy the warmness of the people accompanied by those delicating dishes with a view of fields.</p>
									</div>

									<footer class="entry-footer">
											<a href="#">Make a visit</a>
									</footer>
							</div>
					</div>
			</div>
	</div>
</div>
<!-- end event -->

<!-- Start gallery -->
<section style="min-height: 100vh; margin-top: 100px;">
	<div class="text" style="margin-left: 50px;">
				<h2 style="color: #374B43;">Rancakalong's Gallery</h2>
				<div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
</section>


<!-- End gallert -->

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
								<li><a href="abou	</ul>

					</div>
				</div>

			<div class="border-top copyright"
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
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
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Desa Rancakalong</title>
</head>

<body>
	<!-- Start of NavBar -->
	<header>
		<nav style="background-color: transparent !important;" class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
			<div class="container">
				<a class="navbar-brand" href="/index"> <img src="images\gglogolight.png" alt="GreenGlow x Rancakalong" style="max-height: 50px;"> <span>.</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li><a class="nav-link" href="/index">Home</a></li>
						<li><a class="nav-link" href="shop">Shop</a></li>
						<li class="nav-item active">
							<a class="nav-link" href="rancakalong">About Rancakalong</a>
						</li>
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
							<h2 class="entry-title" style="color: #3D4A3E; font-weight:bolder">Upcoming Events</h2>
							<p style="margin-bottom: -10px;">Join us for a series of thrilling events that promise to make Rancakalong Village come alive! Experience the vibrant atmosphere as we bring you engaging activities and cultural festivities. There's always something for everyone.</p>
					</div>
			</div>

			<div class="row">
					<div class="col-12 col-sm-6 col-md-4">
							<div class="next-event-wrap">
									<figure>
											<a href="#"><img src="images/ngalaksa.jpg" alt="1"></a>

											<!-- <div class="event-rating">8.9</div> -->
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

											<!-- <div class="event-rating">7.9</div> -->
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

											<!-- <div class="event-rating">9.9</div> -->
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
	<div class="text" style="margin-left: 0px;">
				<h2 style="color: #374B43; text-align:center; margin-bottom:20px;">Rancakalong's Gallery</h2>
				<div class="gallery-area fix" style="max-width: 90%; max-height:50%; margin: 0 auto; padding: 0 15px;">
        <div class="container-fluid p-0">
            <div class="row no-gutters no-padding">
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img ">
															<img src="images/ngalaksa.jpg" alt="1">
															<div class="overlay-text">Deskripsi Gambar!</div>
														</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
													<div class="gallery-img">
														<img src="images/geoteater.jpg" alt="1">
														<div class="overlay-text">Deskripsi Gambar!</div>
												</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img ">
															<img src="images/desawisata.jpg">
															<div class="overlay-text">Deskripsi Gambar!</div>
														</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img">
															<img src="images/geoteater.jpg">
															<div class="overlay-text">Deskripsi Gambar!</div>
														</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img">
															<img src="images/geoteater.jpg">
															<div class="overlay-text">Deskripsi Gambar!</div>
														</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img">
															<img src="images/sampeu.jpg">
															<div class="overlay-text">Deskripsi Gambar!</div>
														</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
</section>
<!-- End gallery -->

<!-- Start contact & map -->
<section style="min-height: 100vh; margin-top: 100px;">
    <div class="container">
        <div class="row">
				<div class="text" style="margin-left: 0px;">
                    <h2 style="color: #374B43; text-align:center; margin-bottom: 50px;">Contact and Visit Us!</h2>
                </div>
            <div class="col-lg-6">
                <!-- Embed the map on the left side -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d321.0858437781561!2d107.83671656665805!3d-6.83575123188339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d9121fe2dc5d%3A0x646e653d05ba5104!2sKantor%20Kepala%20Desa%20Rancakalong!5e0!3m2!1sen!2sid!4v1706405572417!5m2!1sen!2sid" width="100%" height="425" style="border:10px; margin-left:75px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <div id="contact-here" class="untree_co-section" style="margin-top: -50px;">
                    <div class="container">

                        <div class="block">
                            <div class="row justify-content-center">


                                <div class="col-md-8 col-lg-8 pb-4">


                                    <div class="row mb-5">
                                        <!-- Your contact information here -->
                                    </div>

                                    <form action="https://formsubmit.co/greenglow.id@gmail.com" method="POST" class="border p-4 rounded shadow" reset() return False>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-black" for="fname">First name</label>
                                                    <input type="text" class="form-control" id="fname">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-black" for="lname">Last name</label>
                                                    <input type="text" class="form-control" id="lname">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-black" for="email">Email address</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="text-black" for="message">Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Halo warga Desa Rancakalong, saya ingin melakukan kunjungan nih!"></textarea>
                                        </div>

                                        <div class="button-container">
																					<div class="text">
																							<button type="submit" class="btn" style="margin-top: -50px; background-color:#374B43">Message</button>
																					</div>
																					<div class="text" style="margin-left: 10px;">
																							<button type="button" onclick="window.open('https://maps.app.goo.gl/RgE1fcntpwEKffr86', '_blank')" class="btn" style="margin-top: -50px; background-color:#f9bf29">Maps</button>
																					</div>
																			</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

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
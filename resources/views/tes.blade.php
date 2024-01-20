<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<title>GreenGlow</title>
    <style>
        .maincontainer{
            perspective: 1000px;
            position: relative;
        }
        .thecard{   
            position: absolute;
            width: 100%;
            height: 100%;         
            transform-style: preserve-3d;
            transition: transform 2s ease;
            transform-origin: center;
        }
        .maincontainer:hover .thecard{
            transform: rotateY(180deg);
        }
        /* .thecard:hover{
            transform: rotateY(180deg);
        } */
        /* .thefront{
            position: absolute;
            width: 100%;
            height: 100%; 
            backface-visibility: hidden;
        } */
        .thefront,
        .theback{
            position: absolute;
            width: 100%;
            height: 100%; 
            backface-visibility: hidden;
        }
        .theback{
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="/index">GreenGlow X Rancakalong<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="/index">Home</a>
					</li>
					<li><a class="nav-link" href="shop">Shop</a></li>
					<li><a class="nav-link" href="about">About GreenGlow</a></li>
					<li><a class="nav-link" href="rancakalong">About Rancakalong</a></li>
					<li><a class="nav-link" href="blog">Edu</a></li>
					<li><a class="nav-link" href="contact">Contact us</a></li>
					<li><a class="nav-link" href="/">Logout</a></li>
				</ul>

				<!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul> -->
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="intro-excerpt">
						<h1 class="mb-0" >Natural Soap <span class="d-block">Nurturing Future</span></h1>
						<h4 class="mt-0" style="color: whitesmoke;">Rancakalong Village, West Java</h4>
						<p class="mb-4">Glow with naturally crafted soap made from recycled oil and pure ingredients.</p>
						<p>
							<a href="shop" class="btn btn-secondary me-2" >Shop GreenGlow</a>
							<a href="#explore-first" class="btn btn-white-outline">Explore</a>
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="hero-img-wrap ms-8">
						<img src="images/sabun.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Product Section -->
    <div id="explore-first" class="product-section" style="margin-top: 20px;">
		<div class="container">
			<div class="row">
                <!-- Start Column 1 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Crafted with Natural and Pure Ingredients.</h2>
					<p class="mb-4">GreenGlow supports sustainability by using recycled oil and natural ingredients to produce our products</p>
					<p><a href="tes" class="btn">Buy GreenGlow</a></p>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="maincontainer">
                        <div class="thecard">
                            <div class="thefront">
                                <a class="product-item" href="cart.html">
						            <img src="images/produk2.png" class="img-fluid product-thumbnail">
						            <h3 class="product-title">Natural Dish Soap</h3>
					            </a>
                            </div>
                            <div class="theback">
                                <div class="product-container" style="background-image: url('images/produk2.png'); border-radius: 5px; position: relative; overflow: hidden;">
									<div class="overlay" style="background-color: rgba(0, 0, 0, 0.8); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
									
									<div class="product-details" style="position: relative; z-index: 1; padding: 20px; color: #fff; text-align: center;">
										<h4 class="section-title" style="color: white;">Natural Dish Soap with Plant-Based Ingredients</h4>
										<p class="section-subtitle">Gentle, Effective, and Eco-Friendly Sparkle</p>
										
										<div class="ingredients-container" style="text-align: left; margin-top: 20px;">
											<h5 class="mt-4">Ingredients</h5>
											<ul class="list-group" style="list-style: none; padding: 0;">
												<li class="list-group-item" style="background-color: #e9852e;">Sweet Potato</li>
												<li class="list-group-item" style="background-color: #f8c144;">Orange Extract</li>
											</ul>
										</div>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="maincontainer">
                        <div class="thecard">
                            <div class="thefront">
                                <a class="product-item" href="cart.html">
						            <img src="images/produk1.png" class="img-fluid product-thumbnail">
						            <h3 class="product-title">Natural Soap with Olive Extract</h3>
					            </a>
                            </div>
                            <div class="theback">
                                <div class="product-container" style="background-image: url('images/produk2.png'); border-radius: 5px; position: relative; overflow: hidden;">
									<div class="overlay" style="background-color: rgba(0, 0, 0, 0.8); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
									
									<div class="product-details" style="position: relative; z-index: 1; padding: 20px; color: #fff; text-align: center;">
										<h4 class="section-title" style="color: white;">Natural Bath Soap with Plant-Based Ingredients</h4>
										<p class="section-subtitle">Gentle, Effective, and Eco-Friendly Sparkle</p>
										
										<div class="ingredients-container" style="text-align: left; margin-top: 20px;">
											<h5 class="mt-4">Ingredients</h5>
											<ul class="list-group" style="list-style: none; padding: 0;">
												<li class="list-group-item" style="background-color: #bfa82f;">Olive</li>
												<li class="list-group-item" style="background-color: white;">Goat Milk</li>
											</ul>
										</div>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="maincontainer">
                        <div class="thecard">
                            <div class="thefront">
                                <a class="product-item" href="cart.html">
						            <img src="images/produk3.png" class="img-fluid product-thumbnail">
						            <h3 class="product-title">Natural Soap with Olive Extract</h3>
					            </a>
                            </div>
                            <div class="theback">
                                <div class="product-container" style="background-image: url('images/produk2.png'); border-radius: 5px; position: relative; overflow: hidden;">
									<div class="overlay" style="background-color: rgba(0, 0, 0, 0.8); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
									
									<div class="product-details" style="position: relative; z-index: 1; padding: 20px; color: #fff; text-align: center;">
										<h4 class="section-title" style="color: white;">Natural Bath Soap with Plant-Based Ingredients</h4>
										<p class="section-subtitle">Gentle, Effective, and Eco-Friendly Sparkle</p>
										
										<div class="ingredients-container" style="text-align: left; margin-top: 20px;">
											<h5 class="mt-4">Ingredients</h5>
											<ul class="list-group" style="list-style: none; padding: 0;">
												<li class="list-group-item" style="background-color: white">Goat Milk</li>
												<li class="list-group-item" style="background-color: #cbcbcb;">Kaolin Clay</li>
											</ul>
										</div>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
				</div>
				<!-- End Column 4 -->


			</div>
		</div>
	</div>
	<!-- End Product Section -->


	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<!-- Replace the image with the YouTube video iframe -->
					<div class="video-placeholder" style="border-radius: 15px; overflow: hidden;">
						<iframe width="100%" height="350" src="https://www.youtube.com/embed/8ZsRryHYBwg" frameborder="20" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-lg-6">
					<h2 class="section-title">Why Choose Us</h2>
					<p>At GreenGlow, our commitment to your well-being and our planet sets us apart in the world of personal care. We believe that the choices we make today impact the world we'll inhabit tomorrow. Here's why choosing GreenGlow is more than a decision; it's a mindful step toward a healthier, more sustainable lifestyle.</p>

					<ol>
						<li>
							<strong>Gentle on You, Gentle on Earth:</strong>
							GreenGlow uses natural ingredients, making it gentle on your skin and the environment. No harsh chemicals, just pure goodness.
						</li>
						<li>
							<strong>From Nature to You:</strong>
							Crafted with care, our soap brings the goodness of nature to your daily routine. It's more than a soap; it's a touch of natural luxury.
						</li>
						<li>
							<strong>Every Bar Counts:</strong>
							By choosing GreenGlow, you're part of a movement towards mindful living. It's a small step that adds up to a greener, brighter future.
						</li>
					</ol>

					<p>
						GreenGlow – where simplicity meets sustainability. Make the simple choice for a cleaner, kinder, and brighter world.
					</p>

					<div class="row my-5">
						<!-- Your features go here -->
					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section -->

		<!-- Start Rancakalong -->

		<!-- <section style="background-image: url('images/rancakalong-view.jpg'); background-size: cover;border-radius: 5px; position: relative; overflow: hidden;">
		<div class="overlay" style="background-color: rgba(0, 0, 0, 0.2); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div> -->
		<br><br><br><br><br>
			<div class="why-choose-section">
			<div class="container">
			<div class="card bg-dark text-white" style="border-radius: 5px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-title" style="color: white;">Rancakalong</h2>
                        <p>Rancakalong is a subdistrict in Sumedang Regency, West Java Province, Indonesia. Situated in the province of West Java, specifically within the administrative region of Sumedang. The subdistrict encompasses an expansive area, spanning 5,270 square kilometers. As a vital part of Sumedang, Rancakalong contributes to the rich cultural and geographical tapestry of the region. Rancakalong is famous for its agricultural yield such as:</p>

                        <ol>
                            <li>
                                <strong>Sweet Potato</strong>
                                GreenGlow uses natural ingredients, making it gentle on your skin and the environment. No harsh chemicals, just pure goodness.
                            </li>
                            <li>
                                <strong>Paddy/Rice</strong>
                                Crafted with care, our soap brings the goodness of nature to your daily routine. It's more than a soap; it's a touch of natural luxury.
                            </li>
                            <li>
                                <strong>Corn</strong>
                                By choosing GreenGlow, you're part of a movement towards mindful living. It's a small step that adds up to a greener, brighter future.
                            </li>
                        </ol>

                        <a href="rancakalong" class="btn btn-secondary me-2">More About</a>

                        <div class="row my-5">
                            <!-- Additional content can be added here if needed -->
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="card video-placeholder" style="border-radius: 15px; overflow: hidden;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5339.05234681476!2d107.81775192785709!3d-6.836706306804368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d95bb49bccf5%3A0x2d5a7ddecdb772d3!2sRancakalong!5e0!3m2!1sid!2sid!4v1705445677289!5m2!1sid!2sid" width="100%" height="420" frameborder="20" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			</div>
		</div>
		<br><br><br><br><br>
	</section>
	<!-- End Rancakalong -->


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
	
	<!-- Start Blog Section -->
	<div class="blog-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6">
					<h2 class="section-title">Recent Blog</h2>
				</div>
				<div class="col-md-6 text-start text-md-end">
					<a href="blog" class="more">View All Posts</a>
				</div>
			</div>

			<div class="row">

				<!-- Blog 1 -->
				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/blog-1.jpg" alt="Image" class="img-fluid blog-post-image"></a>
						<div class="post-content-entry">
							<h3><a href="#">Sustainable Packaging and its Benefits</a></h3>
							<div class="meta">
								<span>by <a href="#">Dhewa Radya</a></span> <span>on <a href="#">January 1, 2023</a></span>
								<p class="blog-post-text">Sustainable Packaging has a lot of benefits for the future...</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog 2 -->
				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/blog-2.jpg" alt="Image" class="img-fluid blog-post-image"></a>
						<div class="post-content-entry">
							<h3><a href="#">Best Materials for Recyclable Packaging</a></h3>
							<div class="meta">
								<span>by <a href="#">Rafi Abdul</a></span> <span>on <a href="#">January 5, 2023</a></span>
								<p class="blog-post-text">Creating Recyclable packaging isn't easy...</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog 3 -->
				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/blog-3.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Is Plastic Waste killing our Planet?</a></h3>
							<div class="meta">
								<span>by <a href="#">Justin Surya</a></span> <span>on <a href="#">January 10, 2023</a></span>
								<p class="blog-post-text">Plastic Waste is becoming more unmanagable in recent...</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Blog Section -->

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
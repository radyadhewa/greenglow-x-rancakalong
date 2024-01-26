<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Greenglow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/bs.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="/home">GreenGlow X Rancakalong<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="home">Home</a>
					</li>
					<li><a class="nav-link" href="shop">Shop</a></li>
					<!-- <li><a class="nav-link" href="about">About GreenGlow</a></li> -->
					<li><a class="nav-link" href="rancakalong">About Rancakalong</a></li>
					<!-- <li><a class="nav-link" href="blog">Edu</a></li> -->
					<!-- <li><a class="nav-link" href="contact">Contact us</a></li> -->
					<li><a class="nav-link" href="/">Logout</a></li>
				</ul>

				<!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul> -->
			</div>
		</div>

	</nav>
    <!-- Navbar End -->

    <!-- TES START-->
    <!-- <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-1 text-white mb-5 animated slideInDown">Make Your Home Like Garden</h1>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                </div>
            </div>
        </div>        
    </div> -->
    <!-- TES END -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/home-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown" >Natural Soap <span class="d-block">Nurturing Future</span></h1>
                                    <h4 class="" style="color: whitesmoke;">Rancakalong Village, West Java</h4>
                                    <p class="">Glow with naturally crafted soap made from recycled oil and pure ingredients.</p>
                                    <p>
                                        <a href="shop" class="btn btn-primary py-sm-3 px-sm-4" >Shop GreenGlow</a>
                                        <!-- <a href="#explore-first" class="btn btn-secondary py-sm-3 px-sm-4">Explore</a> -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Not Environmentally Harmful</h4>
                                <span>Made by Natural Organic Ingredients</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Community Empowerment</h4>
                                <span>Empowering Farmers for Sustainable Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-laptop text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Boosting Digital Transformation</h4>
                                <span>Helps Local Business to Promote Their Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/about.jpg"> -->
                    <iframe class="rounded" data-wow-delay="0.1s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5339.05234681476!2d107.81775192785709!3d-6.836706306804368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d95bb49bccf5%3A0x2d5a7ddecdb772d3!2sRancakalong!5e0!3m2!1sid!2sid!4v1705445677289!5m2!1sid!2sid" width="100%" height="430" frameborder="20" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">Rancakalong</h1>
                    <p class="text-primary mb-4">Sumedang, West Java</p>
                    <h1 class="display-5 mb-4">The Home Village of Seni Tarawangsa</h1>
                    <p class="mb-4">Rancakalong is a subdistrict in Sumedang Regency, West Java Province, Indonesia. Situated in the province of West Java, specifically within the administrative region of Sumedang. The subdistrict encompasses an expansive area, spanning 5,270 square kilometers.</p>
                    <a class="btn btn-primary py-3 px-4" href="rancakalong">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <!-- <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Award Winning</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span> -->
                                <img class="img-fluid rounded"  src="images/tradisi-1.jpg">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <!-- <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Dedicated Team</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span> -->
                                <img class="img-fluid rounded"  src="images/tradisi-2.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="images/home.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1</h1>
                    <span class="fs-5 fw-semi-bold text-light">Village</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Local Business</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">5678</h1>
                    <span class="fs-5 fw-semi-bold text-light">Products</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">10000</h1>
                    <span class="fs-5 fw-semi-bold text-light">Customers</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

 <!-- Quote Start -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <!-- Start Product Section -->
                        <div id="explore-first" class="product-section" style="margin-top: 20px;">
                            <div class="container">
                                <div class="row">
                                    <!-- Start Column 1 -->
                                    <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                                        <h2 class="mb-4 section-title">Crafted with Natural and Pure Ingredients.</h2>
                                        <p class="mb-4">GreenGlow supports sustainability by using recycled oil and natural ingredients to produce our products</p>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-4">Buy GreenGlow</a>
                                    </div>
                                    <!-- End Column 1 -->

                                    <!-- Start Column 2 -->
                                    <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                                        <div class="maincontainer">
                                            <div class="thecard">
                                                <div class="thefront">
                                                    <div class="product-item" >
                                                        <img src="images/produk2.png" class="img-fluid product-thumbnail">
                                                        <h3 class="product-title">Natural Dish Soap</h3>
                                                    </div>
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
                                                    <div class="product-item">
                                                        <img src="images/produk1.png" class="img-fluid product-thumbnail">
                                                        <h3 class="product-title">Natural Soap with Olive Extract</h3>
                                                    </div>
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
                                                    <div class="product-item">
                                                        <img src="images/produk3.png" class="img-fluid product-thumbnail">
                                                        <h3 class="product-title">Natural Soap with Olive Extract</h3>
                                                    </div>
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
                    </div>
                </div>
            </div>
    <!-- Quote End -->
    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" fw-bold text-primary">Why Choosing Us!</h1>
                    <!-- <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1> -->
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
                    <!-- <a class="btn btn-primary py-3 px-4" href="">Explore More</a> -->
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <iframe width="100%" height="350" src="https://www.youtube.com/embed/8ZsRryHYBwg" frameborder="20" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Articles</p>
                <h1 class="display-5 mb-5">For You Articles</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/artikel-1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="images/icon/icon-3.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Sustainable Packaging and its Benefits</h4>
                            <span>by <a href="#">Michele Carchman</a></span> <span>on <a href="#">April 5, 2016</a></span>
							<p class="blog-post-text" style="color: black;">Sustainable Packaging has a lot of benefits for the future...</p>
                            <a class="btn btn-sm" href="https://www.adecesg.com/resources/blog/the-importance-of-sustainable-packaging/"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/artikel-2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="images/icon/icon-6.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Best Materials for Recyclable Packaging</h4>
                            <span>by <a href="#">Francesca Nicasio</a></span> <span>on <a href="#">September 13, 2021</a></span>
							<p class="blog-post-text">Creating Recyclable packaging isn't easy...</p>
                            <a class="btn btn-sm" href="https://noissue.co/blog/environmentally-friendly-packaging-materials/"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/artikel-3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="images/icon/icon-4.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Is Plastic Waste killing our Planet?</h4>
                            <span>by <a href="#">Tracey Chaykin</a></span> <span>on <a href="#">November 22, 2023</a></span>
							<p class="blog-post-text">Plastic Waste is becoming more unmanagable in recent...</p>
                            <a class="btn btn-sm" href="https://medium.com/@tatthebrat/how-plastic-pollution-is-killing-our-planet-and-what-we-can-do-to-save-it-70054ce47ad8"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


   


    <!-- Projects Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Landscaping</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Pruning plants</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Irrigation & Drainage</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-4.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Garden Maintenance</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-5.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Green Technology</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-6.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Urban Gardening</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Projects End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated & Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Doris Jordan</h4>
                            <p class="text-primary">Landscape Designer</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Johnny Ramirez</h4>
                            <p class="text-primary">Garden Designer</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Diana Wagner</h4>
                            <p class="text-primary">Senior Gardener</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimonial</p>
                    <h1 class="display-5 mb-5">What Customers Say About Us!</h1>
                    <p class="mb-4">Here are some Reviews from our lovely customers about our lovely products</p>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="images/testimonial-1.jpg" alt="">
                            <p class="fs-5">I have been using GreenGlow's natural soap for quite some time, and I must say it's a game-changer in the world of personal care. What sets GreenGlow apart is not just its commitment to providing a top-notch product, but its dedication to embracing the circular economy through recycled waste. It's more than just soap; it's a step towards a sustainable future.</p>
                            <h4>Tesalonika Anabela</h4>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="images/testimonial-2.jpg" alt="">
                            <p class="fs-5">Knowing that the soap I use contributes to the circular economy by utilizing recycled waste is truly empowering. GreenGlow's innovative approach from Rancakalong Village is not just distinctive; it's a beacon for a more eco-friendly and responsible lifestyle.</p>
                            <h4>Mario Oza</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="">Landscaping</a>
                    <a class="btn btn-link" href="">Pruning plants</a>
                    <a class="btn btn-link" href="">Urban Gardening</a>
                    <a class="btn btn-link" href="">Garden Maintenance</a>
                    <a class="btn btn-link" href="">Green Technology</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer End -->

<br><br><br>
<!-- Start Footer Section -->
<footer class="footer-section" style="background-color: #eff2f1;">
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

                <!-- <ul class="list-unstyled custom-social">
                    <li><a href="https://www.youtube.com/watch?v=8ZsRryHYBwg" target="_blank">
                            <span class="fa fa-brands fa-youtube"></span>
                        </a></span></a>
                    </li>
                </ul> -->
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/home.js"></script>
</body>

</html>
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
	<title>GreenGlow - Shop</title>
</head>

<body>
	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">GreenGlow X Rancakalong<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li><a class="nav-link" href="/index">Home</a></li>
					<li class="nav-item active">
						<a class="nav-link" href="shop">Shop</a>
					</li>
					<li><a class="nav-link" href="contact">Contact us</a></li>
					<li><a class="nav-link" href="/">Logout</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<!-- <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li> -->
					<li><a class="nav-link" href="/cart"><img src="images/cart.svg"></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->
	<h1 class="mt-4" style="text-align:center; color:#405c54; font-size:50px">Shop</h1>
	<!-- Start Hero Section -->
	<!-- <div class="hero ">

					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-4">
								<div class="intro-excerpt">
									<h1>Shop</h1>
								</div>
							</div>
							<div class="col-lg-8">
								<video src="images/cinematic.mp4" class="d-block w-100 border rounded" autoplay muted></video>
							</div>
							<!-- <div id="carouselExampleAutoplaying" class="carousel slide col-lg-4" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active ">
								<img src="images/produk1.png" class="d-block w-50" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/produk2.png" class="d-block w-50" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/produk3.png" class="d-block w-50" alt="...">
								</div>
							</div> -->
	</div>
	</div>

	</div>

	<!-- <div class="container fluid">
				<div class="hero ">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-6">
								<div class="intro-excerpt">
									<h1>Shop</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="images/produk1.png" class="d-block w-25" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/produk2.png" class="d-block w-25" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/produk3.png" class="d-block w-25" alt="...">
								</div>
							</div>
				</div>
			</div> -->
	<!-- End Hero Section -->



	<div class="untree_co-section product-section before-footer-section">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#" onclick="addToCart()">
						<img src="images/produk1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Olive Extract</h3>
						<strong class="product-price">Rp50.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>

				<script>
					function addToCart() {
						// Add your logic here to handle adding the product to the cart

						// Show a simple popup
						alert("Product added to cart");
					}
				</script>
				<!-- End Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#" onclick="addToCart()">
						<img src="images/produk3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Goat Milk</h3>
						<strong class="product-price">Rp55.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk4.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Lavender Extract</h3>
						<strong class="product-price">Rp50.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Dish Soap</h3>
						<strong class="product-price">Rp35.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Olive Extract</h3>
						<strong class="product-price">Rp50.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Goat Milk</h3>
						<strong class="product-price">Rp55.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk4.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Soap with Lavender Extract</h3>
						<strong class="product-price">Rp50.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="#">
						<img src="images/produk2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Natural Dish Soap</h3>
						<strong class="product-price">Rp35.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

			</div>
		</div>
	</div>


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
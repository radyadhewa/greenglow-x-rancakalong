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
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand">GreenGlow X Rancakalong<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li><a class="nav-link" href="{{route ('login.form') }}" style="font-size: large;">Login</a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero" style="text-align: center;">
		<h1 class="mb-0">Natural Soap <span class="d-block">Nurturing Future</span></h1>
		<h4 class="mt-0" style="color: whitesmoke;">Rancakalong Village, West Java</h4>
		<p class="mb-4">Glow with naturally crafted soap made from recycled oil and pure ingredients.</p>
		<div class="container-fluid mt--2">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="card bg-dark text-center p-5">
						<form action="{{route ('register.store')}}" method="POST">
							@csrf
							<?php

							use Illuminate\Support\Facades\Session;
							// Get values from the session or any other source
							$usernameFromSession = Session::get('name');
							$emailFromSession = Session::get('email');
							?>
							<div class="form-group mb-3 mt-3">
								<div class="input-group input-group-alternative">
									<!-- name itu harus sama ma field yang ada di database -->
									<input class="form-control" placeholder="Username" name="name" type="text" required value="<?= $usernameFromSession ?>" />
								</div>
							</div>
							<div class="form-group mb-3 mt-3">

								<div class="input-group input-group-alternative">
									<input class="form-control" placeholder="Email" type="email" name="email" required value="<?= $emailFromSession ?>" />
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative">
									<input class="form-control" placeholder="Password" type="password" name="password" required />
								</div>
							</div>
							<div class="text-center mt-4">
								<button name="submit" class="btn btn-secondary btn-icon mb-3 mb-sm-0" type="submit">Register</button>
							</div>
						</form>
					</div>

					<style>
						.row-lf {
							display: flex;
							justify-content: space-between;
							align-items: center;
							margin-top: 2px;
						}
					</style>
				</div>
			</div>
		</div>
		<br><br>
	</div>
	<div class="border-top copyright mx-4">
		<div class="row pt-4">
			<div class="col-lg-6">
				<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script>. All Rights Reserved. &mdash; Designed with love by <a href="">GreenGlow</a> Distributed By <a href="">GreenGlow</a> </p>
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
	</div>

	<script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset ('js/tiny-slider.js') }}"></script>
	<script src="{{ asset ('js/custom.js') }}"></script>
</body>

</html>
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
            <a class="navbar-brand" href="/index"> <img src="images\gglogolight.png" alt="GreenGlow x Rancakalong" style="max-height: 50px;"> <span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li><a class="nav-link" href="home">Home</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="shop">Shop</a>
                    </li>
                    <li><a class="nav-link" href="rancakalong">About Rancakalong</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Shop Our Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">made with love in Rancakalong</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                @foreach ($produk as $p)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-auto">
                        <div class="service-img rounded">
                            <img class="img-fluid" style="background-image: url({{Storage::url($p-> gambar)}})" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid rounded-circle" src="{{ Storage::url($p->gambar) }}" alt="">
                            </div>

                            <h4 class="mb-3">{{$p -> nama}}</h4>
                            <p class="mb-4">{{$p -> deskripsi}}</p>
                            <a class="btn btn-sm" href="{{$p-> linkshop}}"><i class="fa fa-plus text-primary me-2"></i>Shopee</a>
                            <a class="btn btn-sm" href="{{$p-> linktoko}}"><i class="fa fa-plus text-primary me-2"></i>Tokopedia</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->


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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('LandingPage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('LandingPage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('LandingPage/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('LandingPage/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('LandingPage/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('LandingPage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('LandingPage/css/style.css') }}">
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('landing-page') }}">Rental<span> Mobil</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ url('landing-page') }}" class="nav-link">Home</a></li>
                    {{-- <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#cars" class="nav-link">Cars</a></li> --}}
                    {{-- <li class="nav-item"><a href="#cekout" class="nav-link">Booking</a></li> --}}
                    <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ asset('landingPage/images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Cepat &amp; Jalan yang Mudah untuk Rental Mobil</h1>
                        <p style="font-size: 18px;">Tentukan destinasimu & rental mobil bersamaku</p>
                        <a href="#cekout"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Lihat Mobil</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="{{ url('/booking/store') }}" class="request-form ftco-animate bg-primary"
                                id="cekout" method="POST">
                                @csrf
                                <h2>Destinasi anda kemana?</h2>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="start_date" class="label">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="start_date" id="start_date"
                                            required>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Tanggal Akhir</label>
                                        <input type="date" class="form-control" name="end_date" id="end_date"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="destination" class="label">Destinasi</label>
                                    <input type="text" class="form-control" name="destination" id="destination"
                                        placeholder="Kota" required>
                                </div>
                                <div class="form-group ">
                                    <label for="id_card_number" class="label">Nomor KTP</label>
                                    <input type="number" class="form-control" name="id_card_number"
                                        id="id_card_number" placeholder="nomor ktp anda" required>
                                </div>
                                <div class="form-group">
                                    <label for="car_id" class="label">Mobil</label>
                                    <select class="form-control" id="car_id" name="car_id" required>
                                        <option value="" hidden>Silahkan Pilih Mobil</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('landingPage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/popper.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/aos.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('landingPage/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('landingPage/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('landingPage/js/google-map.js') }}"></script>
    <script src="{{ asset('landingPage/js/main.js') }}"></script>

</body>

</html>

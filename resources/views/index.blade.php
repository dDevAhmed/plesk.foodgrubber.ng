<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image" href="img/logo.svg">
    <meta content="Food Grubber" name="keywords">
    <meta content="Food Grubber" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Food Grubber</title>

    <!-- Scripts -->
    <script src="js/main.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    {{-- fixme - fix the scoll behaviour --}}
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand"><img src="{{ asset('img/logo.svg') }}">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <li class="nav-item">
                        <a class="nav-item nav-link {{ isset($page) && $page === 'index' ? 'nav-index' : '' }} {{ Request::is('about') ? 'active' : '' }}"
                            href="#">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link {{ isset($page) && $page === 'index' ? 'nav-index' : '' }} {{ Request::is('how-it-works') ? 'active' : '' }}"
                            href="#">{{ __('How It Works') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('market.index') }}" class="btn custom-btn"><i class="fa fa-shopping-cart"></i>
                            {{ __('Shop Now') }}</a>
                    </li>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Bar End -->
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="covers/cover-img-1.jpg" width= "100%" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Skip the stores, <br><span>unlock </span> smiles.</h1>
                        <p>Say goodbye to grocery woes, hello to delicious discoveries. Freshness guaranteed, smiles
                            unlocked.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="covers/cover-img-2.jpg" width= "100%" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1><span>Fresh </span>Delivered, <br> Groceries Simplified.</h1>
                        <p>
                            Forget the drama, unlock fresh flavors. Foodgrubber: Grocery smiles, delivered daily.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="covers/cover-img-3.jpg" width= "100%" alt="Image">
                    </div>

                    <div class="carousel-text">
                        <h1><span>Global </span>Flavors, <br> Delivered Local.</h1>
                        <p>
                            From pantry staples to exotic finds, your kitchen's happy place. Foodgrubber: Endless
                            possibilities. </p>
                    </div>
                </div>
            </div>
            {{-- <div class="box"> --}}
            {{-- <input type="text" id="search" name="" placeholder="Enter to search here...">
                <i class="fa fa-search" aria-hidden="true"></i>
                <div id="search-results"></div> --}}
            {{-- </div> --}}
            @livewire('Livesearch')
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Values Start -->
    <div class="values mt-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card">
                        <div class="value-img-bg">
                            <img src="icons/icons8-search-100.png" width= "40px" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Find it Fresh</h5>
                            <p class="card-text">Explore stores and thousands of fresh items with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card">
                        <div class="value-img-bg">
                            <img src="icons/icons8-shopping-cart-100.png" width= "40px" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cart it Up</h5>
                            <p class="card-text">Tap to add, adjust quantities, or save for later.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card">
                        <div class="value-img-bg">
                            <img src="icons/icons8-card-100.png" width= "40px" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pay & Zip</h5>
                            <p class="card-text">Pay in a snap and get your delivery confirmed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card">
                        <div class="value-img-bg">
                            <img src="icons/icons8-location-100.png" width= "40px" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Track & Feast</h5>
                            <p class="card-text">Real-time order tracking, from doorstep to your door.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Values End -->


    <!-- About Start -->
    <div class="about index">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2>Shop Smarter, <br> Eat Fresher</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Foodgrubber is your one-stop shop for fresh groceries delivered. We connect you with
                                local
                                stores, a diverse selection of delicious finds, and a seamless online ordering
                                experience.
                                Ditch the shopping cart, browse from your phone, and enjoy convenient delivery to your
                                doorstep. Save time, eat well, and experience the Foodgrubber difference.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Cuisine Start -->
    <div class="food">
        <div class="container">
            <div class="section-header text-center">
                <p>Explore</p>
                <h2>Ingredients Around the World</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 mb-5">
                    <a href="#">
                        <div class="image-container cuisine hover-translate">
                            <img src="{{ asset('img/african-cuisine.jpg') }}" alt="African Cuisine">
                            <div class="overlay">
                                <div class="food-name">African Cuisine</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-5">
                    <a href="#">
                        <div class="image-container cuisine hover-translate">
                            <img src="{{ asset('img/indian-cuisine.jpg') }}" alt="African Cuisine">
                            <div class="overlay">
                                <div class="food-name">Indian Cuisine</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-5">
                    <a href="#">
                        <div class="image-container cuisine hover-translate">
                            <img src="{{ asset('img/chinese-cuisine.jpg') }}" alt="African Cuisine">
                            <div class="overlay">
                                <div class="food-name">Chinese Cuisine</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cuisine End -->


    <!-- Mobile App Start -->
    <div class="menu">
        <div class="container">
            <div class="menu-tab">
                <div class="tab-content">
                    <div id="burgers" class="container tab-pane active">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 mb-5">
                                <div class="about-content">
                                    <div class="section-header">
                                        <p>Groceries in Your Pocket</p>
                                        <h2>Shop Fresh<br />with Foodgrubber <span style="color: #01c324">App</span>
                                        </h2>
                                    </div>
                                    <div class="about-text">
                                        <p>
                                            Say goodbye to grocery woes with Foodgrubber's convenient mobile app! Browse
                                            thousands of fresh items from your favorite local stores, fill your cart in
                                            a
                                            flash, and enjoy secure checkout with fast delivery straight to your door.
                                            No
                                            more heavy bags, endless lists, or wasted time.</p>
                                    </div>
                                    <div class="d-flex mobile-store">
                                        <a href="#"><img src="img/play-store.png" alt="play store button"></a>
                                        <a href="#"><img src="img/app-store.png" alt="app store button"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <img src="img/mobile-app.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile App End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-1.jpg" alt="Image">
                    </div>
                    <p>
                        "Working with FoodGrub has been a game-changer for my culinary career. Their platform provided
                        me
                        with a wider audience and the opportunity to showcase my skills to food enthusiasts across the
                        globe."</p>
                    <h2>Chef Emily Lawson </h2>
                    <h3>Executive Chef</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-2.jpg" alt="Image">
                    </div>
                    <p>
                        "FoodGrub has been a sweet revelation for my pastry creations. Through their platform, I was
                        able to
                        connect with dessert lovers who appreciate the artistry and flavors I bring to the table." </p>
                    <h2>Chef Daniel Carter</h2>
                    <h3>Pastry Chef</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-3.jpg" alt="Image">
                    </div>
                    <p>
                        "FoodGrub has been a platform where my sushi expertise found its perfect match. The dedicated
                        community of sushi enthusiasts on FoodGrub appreciates the precision and artistry that goes into
                        each roll." </p>
                    <h2>Chef Mia Roberts</h2>
                    <h3>Sushi Chef</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-4.jpg" alt="Image">
                    </div>
                    <p>
                        "FoodGrub has given me the opportunity to showcase my grilling prowess to a wider audience.
                        Their
                        platform allowed me to share my secret techniques, signature marinades, and mouthwatering
                        recipes
                        with fellow grill enthusiasts" </p>
                    <h2>Chef Alejandro Cruz</h2>
                    <h3>Grill Master</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Partners Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    {{-- fixme - remove border radius --}}
                    <div class="about-img">
                        <img src="img/partners.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="about-content mt-5">
                        <div class="section-header">
                            <p>Share Your Freshness</p>
                            <h2>Join the Foodgrubber Marketplace</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Bring your farm-fresh produce, artisanal bakery delights, or specialty pantry staples to
                                Foodgrubber's curated marketplace. Connect with food enthusiasts, showcase your passion,
                                and
                                deliver directly to hungry customers.<br /><br />Submit your application and become a
                                Foodgrubber vendor today.</p>
                        </div>
                        <a href="#" class="btn custom-btn"> {{ __('Apply') }}</a>
                        {{-- <a href="{{ route('register') }}" class="btn custom-btn"> {{ __('Apply') }}</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Our Address</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="">Terms of use</a>
                                <a href="">Privacy policy</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-newsletter">
                                <h2>Newsletter</h2>
                                <p>
                                    Are you a food lover always on the lookout for exciting culinary experiences? Look
                                    no
                                    further! Sign up for our newsletter and embark on a delectable journey filled with
                                    mouthwatering recipes, insider tips, and exclusive offers.
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email goes here">
                                    <button class="btn custom-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; <a href="#">Binfo Group</a>, All Right Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // $('#search').on('input', function() {
                //     var query = $(this).val();
                //     if (query != '') {
                //         $.ajax({
                //             url: "api/search", // replace with your search endpoint
                //             method: "GET",
                //             data: {
                //                 query: query
                //             },
                //             success: function(data) {
                //                 var html = '';
                //                 for (var i = 0; i < data.length; i++) {
                //                     html += '<div>' + data[i].name +
                //                         '</div>'; // replace with the HTML structure you want
                //                 }
                //                 $('#search-results').html(html);
                //             }
                //         });
                //     } else {
                //         $('#search-results').html('');
                //     }
                // });
            });
        </script>
    @endpush

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('script');
</body>

</html>

@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="mb-4"></div><!-- End .mb-2 -->

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-1.jpg') }}"
                                alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Hot Deals & Savings!</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Stock up and <br> save on your
                                    favorites.</a></h3><!-- End .banner-title -->
                            {{-- note - links to the deals page or a curated selection of discounted items --}}
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3 order-lg-last">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-3.png') }}"
                                alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Grocery at Your Fingertips</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Skip the store, <br> get groceries
                                    delivered.</a></h3><!-- End .banner-title -->
                            {{-- fixme - two buttons for different stores --}}
                            <a href="#" class="banner-link">Download Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-6">
                    <div class="owl-carousel" data-toggle="owl"
                        data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            {{-- "margin": 20, --}}
                            "loop": true,
                        }'>
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-2-1.jpg') }}"
                                    alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-dark d-none d-sm-block"><a href="#">Season's Best
                                        Delivered</a>
                                </h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-dark"><a href="#">Fresh, local produce <br> at your
                                        fingertips.</a></h3>
                                <!-- End .banner-title -->
                                {{-- note - links to a curated page of seasonal items --}}
                                <a href="#" class="banner-link text-dark">Explore Seasonal Picks <i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-2-2.jpg') }}"
                                    alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Elevate Your
                                        Pantry</a>
                                </h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Discover gourmet finds <br> and
                                        everyday essentials.</a></h3><!-- End .banner-title -->
                                {{-- note - links to the main grocery catalog --}}
                                <a href="#" class="banner-link">Browse Groceries <i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-2-3.jpg') }}"
                                    alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-dark d-none d-sm-block"><a href="#">Recipes for Every
                                        Crave</a>
                                </h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-dark"><a href="#">Find inspiration for your <br> next
                                        delicious meal. ‍</a></h3><!-- End .banner-title -->
                                {{-- note - links to the deals page or a curated selection of discounted items --}}
                                <a href="#" class="banner-link text-dark">Shop Now <i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- End .mb-3 -->

        <div class="container">
            <h2 class="title mb-2">Categories</h2><!-- End .title -->

            <div class="cat-blocks-container">
                <div class="owl-carousel owl-simple" data-toggle="owl"
                    data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": true,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                },
                                "1280": {
                                    "items":6,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                    <a href="{{ route('market.search', ['category' => 'poultry']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/poultry.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Poultry</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'fruit']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/fruit.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Fruits</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'grain']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/grain.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Grains</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'spice']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/spice.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Spices</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'seasoning']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/seasoning.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Seasonings</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'oil']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/oil.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Oils</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'diary']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/dairy.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Dairy</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'vegetable']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/vegetable.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Vegetables</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'legume']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/legume.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Legumes</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'seafood']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/seafood.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Sea Foods</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'beverage']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/beverage.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Beverage</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="{{ route('market.search', ['category' => 'tuber']) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/tuber.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Tubers</h3><!-- End .cat-block-title -->
                    </a>

                </div><!-- End .row -->
            </div><!-- End .cat-blocks-container -->
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- End .mb-3 -->

        <div class="bg-light pt-3 pb-5">
            <div class="container">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Stores</h2><!-- End .title -->
                    </div><!-- End .heading-left -->
                </div><!-- End .heading -->

                <div class="products mb-3">
                    <div class="row">
                        @foreach ($userStores as $userStore)
                            <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product product-5 text-center">
                                    <figure class="product-media">
                                        {{-- <a href="{{ url('product/' . $userStore->id) }}"> --}}
                                        <a href="javascript:void(0)">
                                            {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ userStore->image1 }}" alt="Product image" class="product-image"> --}}
                                            {{-- <img src="{{ $userStore->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ $userStore->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                            {{-- <img src="{{ $userStore->image1 }} ? 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/{{ $userStore->image1 }}' : 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/no-product-image.png'" --}}
                                            {{-- <img src="{{ $userStore->image1 ? asset('market/' . $userStore->image1) : asset('market/no-product-image.png') }}" --}}
                                            <img src="{{ asset('market/default_store_logo.jpg') }}"
                                                alt="Product image" class="product-image"
                                                style="width: 100%; height: auto; object-fit: cover;">
                                        </a>
                                    </figure>

                                    <div class="product-body">
                                        <h5 class="">
                                            <a href="{{ route('market.stores.store', $userStore->id) }}" class="text-dark">{{ $userStore->name }}</a>
                                        </h5>
                                        <p class="product-description">
                                            {{-- show top 5 selling products --}}
                                            {{ $userStore->description ? Str::words($userStore->description, 5, '...') : 'No store description available' }}
                                        </p>
                                        {{-- <div class="product-price mt-1 text-dark" style="font-size:15px;">
                                            <i class="icon-map-marker"></i> 4.345 miles
                                        </div> --}}
                                    </div>
                                </div>
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 col-xl-2 -->
                        @endforeach

                        <!-- End .col-sm-6 col-md-4 col-lg-3 col-xl-2 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->

                <div class="row justify-content-center">
                    <a href="#" class="btn bg-tertiary btn-rounded text-primary">Load More</a>
                </div><!-- End .btn-wrap -->
            </div><!-- End .container -->
        </div><!-- End .bg-light pt-5 pb-5 -->

        <div class="cta cta-horizontal cta-horizontal-box bg-tertiary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2xl-5col">
                        <h3 class="cta-title text-white">Join Our <span class="text-primary">Newsletter</span></h3><!-- End .cta-title -->
                        <p class="cta-desc text-white">Subcribe to get information about products and coupons</p>
                        <!-- End .cta-desc -->
                    </div><!-- End .col-lg-5 -->

                    <div class="col-3xl-5col">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control form-control-white"
                                    placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    </main>

    <!-- Footer Start -->

    {{-- show toast if updated successful --}}
    {{-- <x-toast-message :type="session('success') ? 'success' : 'fail'" :message="session('success') ?? session('fail')" /> --}}

@endsection

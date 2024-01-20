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
                            <img src="{{ asset('vendors/molla/assets/images/demos/demo-13/banners/banner-3.jpg') }}"
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
                                <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Season's Best
                                        Delivered</a>
                                </h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Fresh, local produce <br> at your
                                        fingertips.</a></h3>
                                <!-- End .banner-title -->
                                {{-- note - links to a curated page of seasonal items --}}
                                <a href="#" class="banner-link">Explore Seasonal Picks <i
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
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/poultry.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Poultry</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/fruit.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Fruits</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/grain.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Grains</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/spice.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Spices</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/seasoning.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Seasonings</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/oil.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Oils</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/dairy.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Dairy</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/vegetable.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Vegetables</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/legume.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Legumes</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/seafood.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Sea Foods</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
                        <figure>
                            <span>
                                <img src="market/categories/beverage.jpg" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Beverage</h3><!-- End .cat-block-title -->
                    </a>
                    <a href="category.html" class="cat-block">
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
                        <h2 class="title">Food Items</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <div class="toolbox">
                            <div class="toolbox-right">
                                {{-- <div class="toolbox-sort">
                                    <label for="sortby">Filter by:</label>
                                    <div class="select-custom">
                                        <select name="sortby" id="sortby" class="form-control">
                                            <option value="" selected="selected">All</option>
                                            <option value="african">African Cuisine</option>
                                            <option value="indian">Indian Cuisine</option>
                                            <option value="chinese">Chinese Cuisine</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <!-- End .toolbox-sort -->
                                {{-- <div class="mr-3"></div> --}}
                                <div class="toolbox-sort">
                                    <label for="sortby">Show Only</label>
                                    <div class="select-custom">
                                        <select name="sortby" id="sortby" class="form-control">
                                            {{-- fixme - fetch from admin database --}}
                                            <option value="">All categories</option>
                                            <option value="beverage">Beverage</option>
                                            <option value="diary">Diary</option>
                                            <option value="eggs">Eggs</option>
                                            <option value="fruits">Fruits</option>
                                            <option value="grains">Grains</option>
                                            <option value="legumes">Legumes</option>
                                            <option value="poultry">Poultry</option>
                                            <option value="seafoods">Seafoods</option>
                                            <option value="seasonings">Seasonings</option>
                                            <option value="spices">Spices</option>
                                            <option value="tubers">Tubers</option>
                                            <option value="vegetables">Vegetables</option>
                                        </select>
                                    </div>
                                </div><!-- End .toolbox-sort -->
                            </div><!-- End .toolbox-right -->
                        </div><!-- End .toolbox -->
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products mb-3">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="product product-5 text-center">
                                    <figure class="product-media">
                                        <a href="{{ url('product/' . $product->id) }}">
                                            {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ $product->image1 }}" alt="Product image" class="product-image"> --}}
                                            {{-- <img src="{{ $product->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ $product->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                            <img src="{{ $product->image1 ? asset('market/' . $product->image1) : asset('market/no-product-image.png') }}"
                                                alt="Product image" class="product-image"
                                                style="width: 100%; height: auto; object-fit: cover;">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#"
                                                class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        {{-- <div class="product-action">
                                            <form action="" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="btn-product btn-cart"><span>add to
                                                        cart</span></button>
                                            </form>
                                        </div> --}}
                                    </figure>

                                    <div class="product-body">
                                        <p class="product-subtitle">
                                            <a
                                                href="{{ url('result?category=' . $product->category) }}">({{ $product->category }})</a>
                                        </p>
                                        <h3 class="product-title">
                                            <a href="{{ url('product/' . $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        <p class="product-description">
                                            {{ $product->description ? Str::words($product->description, 5, '...') : 'No product description available' }}
                                        </p>
                                        <div class="product-price">
                                            &#8358;{{ $product->price }}
                                        </div>
                                        <button type="submit" class="btn-product btn-cart"
                                            style="margin: auto"><span>add to cart</span></button>
                                    </div>
                                </div>
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 col-xl-2 -->
                        @endforeach

                        {{-- <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="product product-5 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="products/golden-penny-sugar-cubes.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Golden Penny Sugar Cubes</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $120.00
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div> --}}
                        <!-- End .col-sm-6 col-md-4 col-lg-3 col-xl-2 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->

                <div class="row justify-content-center">
                    <a href="#" class="btn btn-primary btn-rounded">Load More</a>
                </div><!-- End .btn-wrap -->
            </div><!-- End .container -->
        </div><!-- End .bg-light pt-5 pb-5 -->

        <div class="mb-3"></div><!-- End .mb-3 -->

        <div class="container">
            <h2 class="title mb-5">Explore Popular Stores</h2><!-- End .title -->
            <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
                data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 30,
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
                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/1.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/2.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/3.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/4.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/5.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/6.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('vendors/molla/assets/images/brands/7.png') }}" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- End .mb-3 -->

        <div class="cta cta-horizontal cta-horizontal-box bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2xl-5col">
                        <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
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

    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#search').on('input', function() {
                    var query = $(this).val();
                    if (query != '') {
                        $.ajax({
                            url: "api/search", // replace with your search endpoint
                            method: "GET",
                            data: {
                                query: query
                            },
                            success: function(data) {
                                var html = '';
                                for (var i = 0; i < data.length; i++) {
                                    html += '<div>' + data[i].name +
                                        '</div>'; // replace with the HTML structure you want
                                }
                                $('#search-results').html(html);
                            }
                        });
                    } else {
                        $('#search-results').html('');
                    }
                });

                // Use a class selector instead of an ID selector
                $('.add-to-cart').on('click', function() {
                    var itemId = $(this).data(
                        'id'); // Assuming each button has a data-id attribute with the item ID

                    $.ajax({
                        url: '/add-to-cart',
                        type: 'POST',
                        data: {
                            id: itemId
                            // Add other data as needed...
                        },
                        success: function(response) {
                            // Handle success...
                        },
                        error: function(response) {
                            if (response.status === 401) {
                                $('#signin-modal').modal('show');
                            }
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection

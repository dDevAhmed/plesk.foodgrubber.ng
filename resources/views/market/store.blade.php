@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="mb-4"></div><!-- End .mb-2 -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom"
                                            src="{{ asset('vendors/molla/assets/images/products/single/1.jpg') }}"
                                            data-zoom-image="{{ asset('vendors/molla/assets/images/products/single/1-big.jpg') }}"
                                            alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <a class="product-gallery-item active" href="#"
                                            data-image="{{ asset('vendors/molla/assets/images/products/single/1.jpg') }}"
                                            data-zoom-image="{{ asset('vendors/molla/assets/images/products/single/1-big.jpg') }}">
                                            <img src="{{ asset('vendors/molla/assets/images/products/single/1-small.jpg') }}"
                                                alt="product side">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('vendors/molla/assets/images/products/single/2.jpg') }}"
                                            data-zoom-image="{{ asset('vendors/molla/assets/images/products/single/2-big.jpg') }}">
                                            <img src="{{ asset('vendors/molla/assets/images/products/single/2-small.jpg') }}"
                                                alt="product cross">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('vendors/molla/assets/images/products/single/3.jpg') }}"
                                            data-zoom-image="{{ asset('vendors/molla/assets/images/products/single/3-big.jpg') }}">
                                            <img src="{{ asset('vendors/molla/assets/images/products/single/3-small.jpg') }}"
                                                alt="product with model">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('vendors/molla/assets/images/products/single/4.jpg') }}"
                                            data-zoom-image="{{ asset('vendors/molla/assets/images/products/single/4-big.jpg') }}">
                                            <img src="{{ asset('vendors/molla/assets/images/products/single/4-small.jpg') }}"
                                                alt="product back">
                                        </a>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title">Farm Fresh Stores</h1>
                                <!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    <i class="icon-map-marker"></i> 4.345 miles
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus
                                        libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus. </p>
                                </div><!-- End .product-content -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Known For:</span>
                                        <a href="#">Vegetables</a>,
                                        <a href="#">Eggs</a>,
                                        <a href="#">Fruits</a>,
                                        <a href="#">Seafoods</a>,
                                        <a href="#">Diary</a>,
                                    </div><!-- End .product-cat -->
                                </div><!-- End .product-details-footer -->
                                <div class="mb-1"></div>
                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                            class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                                role="tab" aria-controls="product-desc-tab" aria-selected="true">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                                role="tab" aria-controls="product-info-tab" aria-selected="false">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab"
                                href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab"
                                aria-selected="false">Shipping & Returns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                                role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                            aria-labelledby="product-desc-link">
                            <div
                                class="header-search header-search-extended header-search-visible header-search-no-radius d-block">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get" style="border:none;">
                                    @csrf
                                    <div class="header-search-wrapper search-wrapper-wide"
                                        style="border:1px solid var(--foodgrubber-tertiary-color);">
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q"
                                            placeholder="Search here ..." required>
                                        <button class="btn bg-tertiary text-primary" type="submit"><i
                                                class="icon-search"></i></button>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                    <div class="product product-5 text-center">
                                        <figure class="product-media">
                                            {{-- <a href="{{ url('product/' . userStore->id) }}"> --}}
                                            <a href="javascript:void(0)">
                                                {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ userStore->image1 }}" alt="Product image" class="product-image"> --}}
                                                {{-- <img src="{{ userStore->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ userStore->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 }} ? 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/{{ userStore->image1 }}' : 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 ? asset('market/' . userStore->image1) : asset('market/no-product-image.png') }}" --}}
                                                <img src="{{ asset('market/no-product-image.png') }}" alt="Product image"
                                                    class="product-image"
                                                    style="width: 100%; height: auto; object-fit: cover;">
                                            </a>
                                        </figure>

                                        <div class="product-body border">
                                            <p class="product-subtitle">
                                                <a {{-- href="{{ url('search?category=' . userStore->category) }}" class="text-secondary">({{ userStore->category }})</a> --}} href="#"
                                                    class="text-secondary">(Grains)</a>
                                            </p>
                                            <h5 class="">
                                                {{-- <a href="{{ url('product/' . userStore->id) }}" class="text-dark">{{ userStore->name }}</a> --}}
                                                <a href="#" class="text-dark">Granulated Sugar</a>
                                            </h5>
                                            <p class="product-description">
                                                {{-- {{ userStore->description ? Str::words(userStore->description, 5, '...') : 'No product description available' }} --}}
                                                No product description available yet
                                            </p>
                                            <div class="product-price mt-1 text-dark" style="font-size:15px;">
                                                {{-- &#8358;{{ userStore->price }} --}}
                                                &#8358;6000
                                            </div>
                                            <button type="submit"
                                                class="btn-product btn-cart bg-tertiary text-primary border-0 p-3"
                                                style="margin: auto"><span>add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                    <div class="product product-5 text-center">
                                        <figure class="product-media">
                                            {{-- <a href="{{ url('product/' . userStore->id) }}"> --}}
                                            <a href="javascript:void(0)">
                                                {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ userStore->image1 }}" alt="Product image" class="product-image"> --}}
                                                {{-- <img src="{{ userStore->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ userStore->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 }} ? 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/{{ userStore->image1 }}' : 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 ? asset('market/' . userStore->image1) : asset('market/no-product-image.png') }}" --}}
                                                <img src="{{ asset('market/no-product-image.png') }}" alt="Product image"
                                                    class="product-image"
                                                    style="width: 100%; height: auto; object-fit: cover;">
                                            </a>
                                        </figure>

                                        <div class="product-body border">
                                            <p class="product-subtitle">
                                                <a {{-- href="{{ url('search?category=' . userStore->category) }}" class="text-secondary">({{ userStore->category }})</a> --}} href="#"
                                                    class="text-secondary">(Grains)</a>
                                            </p>
                                            <h5 class="">
                                                {{-- <a href="{{ url('product/' . userStore->id) }}" class="text-dark">{{ userStore->name }}</a> --}}
                                                <a href="#" class="text-dark">Granulated Sugar</a>
                                            </h5>
                                            <p class="product-description">
                                                {{-- {{ userStore->description ? Str::words(userStore->description, 5, '...') : 'No product description available' }} --}}
                                                No product description available yet
                                            </p>
                                            <div class="product-price mt-1 text-dark" style="font-size:15px;">
                                                {{-- &#8358;{{ userStore->price }} --}}
                                                &#8358;6000
                                            </div>
                                            <button type="submit"
                                                class="btn-product btn-cart bg-tertiary text-primary border-0 p-3"
                                                style="margin: auto"><span>add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                    <div class="product product-5 text-center">
                                        <figure class="product-media">
                                            {{-- <a href="{{ url('product/' . userStore->id) }}"> --}}
                                            <a href="javascript:void(0)">
                                                {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ userStore->image1 }}" alt="Product image" class="product-image"> --}}
                                                {{-- <img src="{{ userStore->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ userStore->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 }} ? 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/{{ userStore->image1 }}' : 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 ? asset('market/' . userStore->image1) : asset('market/no-product-image.png') }}" --}}
                                                <img src="{{ asset('market/no-product-image.png') }}" alt="Product image"
                                                    class="product-image"
                                                    style="width: 100%; height: auto; object-fit: cover;">
                                            </a>
                                        </figure>

                                        <div class="product-body border">
                                            <p class="product-subtitle">
                                                <a {{-- href="{{ url('search?category=' . userStore->category) }}" class="text-secondary">({{ userStore->category }})</a> --}} href="#"
                                                    class="text-secondary">(Grains)</a>
                                            </p>
                                            <h5 class="">
                                                {{-- <a href="{{ url('product/' . userStore->id) }}" class="text-dark">{{ userStore->name }}</a> --}}
                                                <a href="#" class="text-dark">Granulated Sugar</a>
                                            </h5>
                                            <p class="product-description">
                                                {{-- {{ userStore->description ? Str::words(userStore->description, 5, '...') : 'No product description available' }} --}}
                                                No product description available yet
                                            </p>
                                            <div class="product-price mt-1 text-dark" style="font-size:15px;">
                                                {{-- &#8358;{{ userStore->price }} --}}
                                                &#8358;6000
                                            </div>
                                            <button type="submit"
                                                class="btn-product btn-cart bg-tertiary text-primary border-0 p-3"
                                                style="margin: auto"><span>add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                    <div class="product product-5 text-center">
                                        <figure class="product-media">
                                            {{-- <a href="{{ url('product/' . userStore->id) }}"> --}}
                                            <a href="javascript:void(0)">
                                                {{-- <img src="http://foodpartners.foodgrubber.ng/products/{{ userStore->image1 }}" alt="Product image" class="product-image"> --}}
                                                {{-- <img src="{{ userStore->image1 }} ? '../../foodpartners.foodgrubber.ng/public/img/products/{{ userStore->image1 }}' : '../../foodpartners.foodgrubber.ng/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 }} ? 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/{{ userStore->image1 }}' : 'http://77.68.48.210/plesk-site-preview/test.foodpartners.foodgrubber.ng/https/77.68.48.210/public/img/products/no-product-image.png'" --}}
                                                {{-- <img src="{{ userStore->image1 ? asset('market/' . userStore->image1) : asset('market/no-product-image.png') }}" --}}
                                                <img src="{{ asset('market/no-product-image.png') }}" alt="Product image"
                                                    class="product-image"
                                                    style="width: 100%; height: auto; object-fit: cover;">
                                            </a>
                                        </figure>

                                        <div class="product-body border">
                                            <p class="product-subtitle">
                                                <a {{-- href="{{ url('search?category=' . userStore->category) }}" class="text-secondary">({{ userStore->category }})</a> --}} href="#"
                                                    class="text-secondary">(Grains)</a>
                                            </p>
                                            <h5 class="">
                                                {{-- <a href="{{ url('product/' . userStore->id) }}" class="text-dark">{{ userStore->name }}</a> --}}
                                                <a href="#" class="text-dark">Granulated Sugar</a>
                                            </h5>
                                            <p class="product-description">
                                                {{-- {{ userStore->description ? Str::words(userStore->description, 5, '...') : 'No product description available' }} --}}
                                                No product description available yet
                                            </p>
                                            <div class="product-price mt-1 text-dark" style="font-size:15px;">
                                                {{-- &#8358;{{ userStore->price }} --}}
                                                &#8358;6000
                                            </div>
                                            <button type="submit"
                                                class="btn-product btn-cart bg-tertiary text-primary border-0 p-3"
                                                style="margin: auto"><span>add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                            aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                    mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                                    suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                                    porttitor mauris sit amet orci. </p>

                                <h3>Fabric & care</h3>
                                <ul>
                                    <li>Faux suede fabric</li>
                                    <li>Gold tone metal hoop handles.</li>
                                    <li>RI branding</li>
                                    <li>Snake print trim interior </li>
                                    <li>Adjustable cross body strap</li>
                                    <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                </ul>

                                <h3>Size</h3>
                                <p>one size</p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                            aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery & returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery
                                    options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so
                                    within a month of receipt. For full details of how to make a return, please view our <a
                                        href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                            aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (2)</h3>
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">Samanta J.</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">6 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Good, perfect size</h4>

                                            <div class="review-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum
                                                    dolores assumenda asperiores facilis porro reprehenderit animi culpa
                                                    atque blanditiis commodi perspiciatis doloremque, possimus, explicabo,
                                                    autem fugit beatae quae voluptas!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->

                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">5 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Very good</h4>

                                            <div class="review-content">
                                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis
                                                    laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi,
                                                    quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->

    </main>

    <!-- Footer Start -->

    {{-- show toast if updated successful --}}
    {{-- <x-toast-message :type="session('success') ? 'success' : 'fail'" :message="session('success') ?? session('fail')" /> --}}
@endsection

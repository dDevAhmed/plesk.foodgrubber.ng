@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="mb-4"></div><!-- End .mb-2 -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    Showing <span>9 of 56</span> Products
                                </div><!-- End .toolbox-info -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-sort">
                                    <label for="sortby">Sort by:</label>
                                    <div class="select-custom">
                                        <select name="sortby" id="sortby" class="form-control">
                                            <option value="popularity" selected="selected">Most Popular</option>
                                            <option value="rating">Top Rated</option>
                                            <option value="date">Date</option>
                                        </select>
                                    </div>
                                </div><!-- End .toolbox-sort -->
                            </div><!-- End .toolbox-right -->
                        </div><!-- End .toolbox -->

                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-4.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Brown paperbag waist pencil
                                                    skirt</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $60.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-4-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-4-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>

                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-4-3-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-5.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Dresses</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Dark yellow lace cut out
                                                    swing dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $84.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-5-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-5-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-out">Out of Stock</span>
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-6.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Jackets</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Khaki utility boiler
                                                    jumpsuit</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="out-price">$120.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 6 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-7.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Jeans</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Blue utility pinafore denim
                                                    dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $76.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-8.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Beige knitted elastic runner
                                                    shoes</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $84.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-8-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-8-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-9.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Orange saddle lock front
                                                    chain cross body bag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $84.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 1 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-9-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-9-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-9-3-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-11.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Light brown studded Wide fit
                                                    wedges</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $110.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 1 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-11-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-11-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>

                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-11-3-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-10.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Jumpers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Yellow button front tea
                                                    top</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $56.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-12.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Black soft RI weekend travel
                                                    bag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $68.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-13.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Beige metal hoop tote bag</a>
                                            </h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $76.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 1 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-13-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-13-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-14.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Dresses</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Brown zebra print dungaree
                                                    dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $80.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="vendors/molla/assets/images/products/product-14-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-14-2-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="vendors/molla/assets/images/products/product-14-3-thumb.jpg"
                                                        alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="vendors/molla/assets/images/products/product-15.jpg" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                    title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to
                                                        cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Beige ring handle circle
                                                    cross body bag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $56.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->


                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous"
                                        tabindex="-1" aria-disabled="true">
                                        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                    </a>
                                </li>
                                <li class="page-item active" aria-current="page"><a class="page-link"
                                        href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item-total">of 6</li>
                                <li class="page-item">
                                    <a class="page-link page-link-next" href="#" aria-label="Next">
                                        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-clean">
                                <label>Filters:</label>
                                <a href="#" class="sidebar-filter-clear">Clean All</a>
                            </div><!-- End .widget widget-clean -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                        aria-controls="widget-1">
                                        Category
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-1">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-1">
                                                    <label class="custom-control-label" for="cat-1">Dresses</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">3</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-2">
                                                    <label class="custom-control-label" for="cat-2">T-shirts</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-3">
                                                    <label class="custom-control-label" for="cat-3">Bags</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">4</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-4">
                                                    <label class="custom-control-label" for="cat-4">Jackets</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">2</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-5">
                                                    <label class="custom-control-label" for="cat-5">Shoes</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">2</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-6">
                                                    <label class="custom-control-label" for="cat-6">Jumpers</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">1</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-7">
                                                    <label class="custom-control-label" for="cat-7">Jeans</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">1</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-8">
                                                    <label class="custom-control-label" for="cat-8">Sportwear</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true"
                                        aria-controls="widget-2">
                                        Size
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-1">
                                                    <label class="custom-control-label" for="size-1">XS</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-2">
                                                    <label class="custom-control-label" for="size-2">S</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="size-3">
                                                    <label class="custom-control-label" for="size-3">M</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="size-4">
                                                    <label class="custom-control-label" for="size-4">L</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-5">
                                                    <label class="custom-control-label" for="size-5">XL</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-6">
                                                    <label class="custom-control-label" for="size-6">XXL</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true"
                                        aria-controls="widget-5">
                                        Price
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-5">
                                    <div class="widget-body">
                                        <div class="filter-price">
                                            <div class="filter-price-text">
                                                Price Range:
                                                <span id="filter-price-range"></span>
                                            </div><!-- End .filter-price-text -->

                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .filter-price -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

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

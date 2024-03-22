@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="mb-4"></div><!-- End .mb-2 -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h5>Stores selling <span
                                style="background-color: var(--foodgrubber-tertiary-color); color: var(--foodgrubber-primary-color); padding: 3px 8px; border-radius: 0px;">{{ $categorySearched }}</span>
                        </h5>
                        <hr>
                        {{-- <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    Showing <span>9 of 56</span> Products
                                </div>
                            </div>

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
                            </div>
                        </div> --}}

                        <div class="products mb-3">
                            @if ($categoryStores->count() > 0)
                                <div class="row justify-items-center">
                                    @foreach ($categoryStores as $userStore)
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <div class="product product-7 text-center border">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ $userStore->logo }}"
                                                            alt="Store Logo" class="product-image">
                                                    </a>
                                                </figure>

                                                <div class="product-body">
                                                    <h5 class="">
                                                        <a href="{{ route('market.stores.store', $userStore->id) }}"
                                                            class="text-dark">{{ $userStore->name }}</a>
                                                    </h5>
                                                    <p class="product-description">
                                                        {{-- {{ $userStore->description ? Str::words($userStore->description, 5, '...') : 'No store description available' }} --}}
                                                        @if ($userStore->description)
                                                            {{ Str::words($userStore->description, 5, '...') }}
                                                        @else
                                                            No store description available
                                                        @endif
                                                    </p>
                                                    <div class="ratings-container mt-2">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 80%;"></div>
                                                        </div><span class="ratings-text">( 6 Reviews )</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-center">No stores found with <span
                                        style="background-color: var(--foodgrubber-tertiary-color); color: white; padding: 3px 8px;">{{ $categorySearched }}</span>
                                    products.</p>
                            @endif
                            <!-- End .row -->
                        </div><!-- End .products -->


                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                        aria-disabled="true">
                                        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                    </a>
                                </li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                </li>
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
                            {{-- <div class="widget widget-clean">
                                <label>Filters:</label>
                                <a href="#" class="sidebar-filter-clear text-secondary">Clean All <i
                                        class="icon-close"></i></a>
                            </div> --}}

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

                                            @foreach ($categories as $category)
                                                <div class="filter-item">
                                                    {{-- <a href="{{ route('market.search', ['category' => $category]) }}"> --}}
                                                    <div class="custom-control custom-radio">
                                                        <a href="{{ route('market.search', ['category' => $category]) }}"
                                                            class="text-dark">{{ $category }}</a>
                                                        {{-- <input type="radio" id="cat-{{ $loop->index }}"
                                                                name="category" value="{{ $category }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="cat-{{ $loop->index }}">{{ $category }}</label> --}}

                                                        {{-- <span class="item-count">
                                                            @if (isset($categoryCounts[$category]))
                                                                {{ $categoryCounts[$category] }}
                                                            @else
                                                                0
                                                            @endif
                                                        </span> --}}
                                                    </div>
                                                    {{-- </a> --}}
                                                </div>
                                            @endforeach

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
@endsection

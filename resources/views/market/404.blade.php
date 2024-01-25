@extends('layouts.market')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">404</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="error-content text-center" style="background-image: url(assets/images/backgrounds/error-bg.jpg)">
            <div class="container">
                <h1 class="error-title">Error 404</h1><!-- End .error-title -->
                <p>We are sorry, the page you've requested is not available.</p>
                <a href="index.html" class="btn btn-outline-primary-2 btn-minwidth-lg">
                    <span>BACK TO HOMEPAGE</span>
                    <i class="icon-long-arrow-right"></i>
                </a>
            </div><!-- End .container -->
        </div><!-- End .error-content text-center -->
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

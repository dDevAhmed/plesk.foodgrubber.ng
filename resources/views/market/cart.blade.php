@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Shopping Cart</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="mb-4"></div>

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    @if (!isset(Auth::user()->cart->cartItems))
                        <p class="text-center">(No items in cart)</p>
                    @else
                        <div class="row">
                            <div class="col-lg-9">
                                <table class="table table-cart table-mobile">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($cartItems as $cartItem)
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="#">
                                                                <img src="{{$cartItem->image}}"
                                                                    alt="Product image">
                                                            </a>
                                                        </figure>

                                                        <h3 class="product-title">
                                                            <a href="#">{{ $cartItem->name }}</a>
                                                        </h3><!-- End .product-title -->
                                                    </div><!-- End .product -->
                                                </td>
                                                <td class="price-col">&#8358;{{ $cartItem->unit_price }}</td>
                                                <td class="quantity-col">
                                                    <div class="cart-product-quantity">
                                                        <input type="number" class="form-control"
                                                            value="{{ $cartItem->quantity }}" min="1" step="1"
                                                            data-decimals="0" required>
                                                    </div><!-- End .cart-product-quantity -->
                                                </td>
                                                <td class="total-col text-secondary">&#8358;{{ $cartItem->total_price }}
                                                </td>
                                                <td class="remove-col">
                                                    <a href="{{ route('cart.remove', $cartItem->id) }}">
                                                        <i class="icon-close"></i>
                                                    </a>
                                                    {{-- <button class="btn-remove" data-item-id="{{ $cartItem->id }}">
                                                        <i class="icon-close"></i>
                                                    </button> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table><!-- End .table table-wishlist -->

                                <div class="cart-bottom">
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" required
                                                    placeholder="coupon code">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary-2" type="submit"><i
                                                            class="icon-long-arrow-right"></i></button>
                                                </div><!-- .End .input-group-append -->
                                            </div><!-- End .input-group -->
                                        </form>
                                    </div><!-- End .cart-discount -->

                                    <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                            class="icon-refresh"></i></a>
                                </div><!-- End .cart-bottom -->
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary summary-cart">
                                    <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <tbody>
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>&#8358;{{ $cartTotalPrice }}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr class="summary-shipping">
                                                <td>Delivery Partners:</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free-shipping" name="ups-shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="free-shipping">UPS:</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>&#8358;0.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="standart-shipping" name="dhl-shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="standart-shipping">DHL:</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>&#8358;10.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="express-shipping" name="kwik-shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="express-shipping">KWIK:</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>&#8358;20.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping">
                                                <td>Tax:</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <label class="custom-control-label" for="free-shipping">VAT
                                                            (7.5%)</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                @php
                                                    $vat = $cartTotalPrice * (7.5 / 100);
                                                @endphp
                                                <td>&#8358;{{ $vat }}</td>
                                            </tr>

                                            <tr class="summary-total">
                                                <td class="text-secondary">Total:</td>
                                                <td class="text-secondary">&#8358;{{ $cartTotalPrice + $vat }}</td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <a href="{{ route('cart.checkout') }}"
                                        class="btn bg-tertiary text-primary btn-order btn-block">PROCEED TO
                                        CHECKOUT</a>
                                </div><!-- End .summary -->

                                <a href="{{ route('market.index') }}"
                                    class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                        SHOPPING</span><i class="icon-refresh"></i></a>
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    @endif
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
    <!-- Footer Start -->

    {{-- show toast if updated successful --}}
    {{-- <x-toast-message :type="session('success') ? 'success' : 'fail'" :message="session('success') ?? session('fail')" /> --}}

    <script>
        $(document).on('click', '.btn-remove', function() {
            var itemId = $(this).data('item-id');

            $.ajax({
                url: '/cart/remove/' + itemId, // Adjust the URL if needed
                method: 'POST',
                success: function(response) {
                    // Handle successful removal (e.g., remove the item from the UI)
                    $('#cart-item-' + itemId).remove(); // Assuming you have unique IDs for cart items
                    // Update cart totals and display a success message
                },
                error: function(error) {
                    // Handle errors (e.g., display an error message)
                }
            });
        });
    </script>
@endsection

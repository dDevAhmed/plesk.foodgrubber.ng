@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="mb-4"></div>

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <div class="checkout-discount">
                        <form action="#">
                            <input type="text" class="form-control" required id="checkout-discount-input">
                            <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to
                                    enter your code</span></label>
                        </form>
                    </div><!-- End .checkout-discount -->
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>Phone *</label>
                                        <input type="tel" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Address *</label>
                                <input type="text" class="form-control" required>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>State / County *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                    
                                    <div class="col-sm-4">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                    
                                </div><!-- End .row -->                                    

                                <label>Email address *</label>
                                <input type="email" class="form-control" required>

                                <h2 class="checkout-title">Shipping Address</h2>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="same-address" name="shipping-address"
                                        class="custom-control-input" checked>
                                    <label class="custom-control-label" for="same-address">Same as billing address:</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="different-address" name="shipping-address"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="different-address">Ship to a different
                                        address</label>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>Phone *</label>
                                        <input type="tel" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Address *</label>
                                <input type="text" class="form-control" required>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <label>State / County *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                    
                                    <div class="col-sm-4">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                    
                                </div><!-- End .row -->                                    

                                <label>Email address *</label>
                                <input type="email" class="form-control" required>

                                <h2 class="checkout-title">Anything else?</h2>

                                <label>Order notes (optional)</label>
                                <textarea class="form-control" cols="30" rows="4"
                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                    <table class="table table-summary">

                                        <tbody>
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>&#8358;{{ $cartTotalPrice }}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr>
                                                <td>Shipping:</td>
                                                {{-- <td>{{shippingPartner}}</td> --}}
                                                <td>shippingPartner</td>
                                            </tr>
                                            <tr class="summary-total">
                                                <td>Total:</td>
                                                <td>&#8358;{{ $cartTotalPrice }}</td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    {{-- show toast if updated successful --}}
    {{-- <x-toast-message :type="session('success') ? 'success' : 'fail'" :message="session('success') ?? session('fail')" /> --}}
@endsection

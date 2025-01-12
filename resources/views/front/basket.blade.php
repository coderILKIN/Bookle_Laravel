@extends('layouts.app')


@section('content')


@include('front.partials.breadcrump', ['title' => 'Cart'])

    <!-- Shop Cart Section Start -->
    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="cart-wrapper-footer">
                            <form action="shop-cart.html">
                                <div class="input-area">
                                    <input type="text" name="Coupon Code" id="CouponCode" placeholder="Coupon Code">
                                    <button type="submit" class="theme-btn">
                                        Apply
                                    </button>
                                </div>
                            </form>
                            <a href="shop-cart.html" class="theme-btn">
                                Update Cart
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="table-responsive cart-total">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Cart Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                            <span class="d-flex gap-5 align-items-center justify-content-between">
                                                <span class="sub-title">Subtotal:</span>
                                                <span class="sub-price">$84.00</span>
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Shipping:</span>
                                                <span class="sub-text">
                                                    Free
                                                </span>
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Total:  </span>
                                                <span class="sub-price sub-price-total">$84.00</span>
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="{{route('app.order')}}" class="theme-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

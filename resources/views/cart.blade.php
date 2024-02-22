@extends('layout.app')
@section('title', 'CART')
@section('content')
    <header>
        @include('layout.header')
    </header>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <ul>
                        </ul>
                        <h3>Shopping Cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="cart_page_inner mb-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart_page_tabel">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>product </th>
                                            <th>information</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="assets/img/product/product4.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span>
                                                        </li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="assets/img/product/product6.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span>
                                                        </li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_page_button border-top d-flex justify-content-between">
                                <div class="shopping_cart_btn">
                                    <a href="#" class="btn btn-primary border">CLEAR SHOPPING CART</a>
                                    <button class="btn btn-primary border" type="submit">UPDATE YOUR CART</button>
                                </div>
                                <div class="shopping_continue_btn">
                                    <button class="btn btn-primary" type="submit">CONTINUE SHOPPING</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate top">
                                <h3 class="border-bottom">Calculate Shipping </h3>
                                <select class="select_option border">
                                    <option value="1">United Kingdom (UK) </option>
                                    <option value="2">Åland Islands </option>
                                    <option value="3">Afghanistan </option>
                                    <option value="4">Belgium </option>
                                    <option value="5">Albania </option>
                                </select>
                                <input class="border" placeholder="State / Country" type="text">
                                <input class="border" placeholder="Postcode / Zip" type="text">
                                <button class="btn btn-primary" type="submit">get a quote</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate">
                                <h3 class="border-bottom">Coupon Discount </h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input class="border" placeholder="Enter your code" type="text">
                                <button class="btn btn-primary" type="submit">apply coupon</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="grand_totall_area">
                                <div class="grand_totall_inner border-bottom">
                                    <div class="cart_subtotal d-flex justify-content-between">
                                        <p>sub total </p>
                                        <span>$126.00</span>
                                    </div>
                                    <div class="cart_grandtotal d-flex justify-content-between">
                                        <p>grand total</p>
                                        <span>$126.00</span>
                                    </div>
                                </div>
                                <div class="proceed_checkout_btn">
                                    <a class="btn btn-primary" href="#">Proceed to Checkout</a>
                                </div>
                                <a href="#">Checkout with Mutilple Adresses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->
    <footer>
        @include('layout.subcribe')
        @include('layout.footer')
    </footer>
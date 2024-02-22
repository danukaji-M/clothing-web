@extends('layout.app')
@section('title', 'Checkout')
@include('layout.header')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h3>checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--Checkout page section-->
    <div class="checkout_section" id="accordion">
        <div class="container">
            <div class="returning_coupon_area">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                    aria-expanded="true">Click here to login</a>

                            </h3>
                            <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If
                                        you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Have a Coupon ?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon2"
                                    aria-expanded="true">Click here to enter your code</a>

                            </h3>
                            <div id="checkout_coupon2" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary" type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="checkout_form_input">
                                <label for="country">country <span>*</span></label>
                                <select class="select_option" name="cuntry" id="country">
                                    <option value="2">United Kingdom (UK) </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Address <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Email Address <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Phone <span>*</span></label>
                                <input type="text">
                            </div>
                            <p class="different_address"><i class="ion-android-checkbox-outline"></i> Ship to a different
                                address?</p>
                            <div class="checkout_form_input">
                                <label for="country2">country <span>*</span></label>
                                <select class="select_option" name="cuntry" id="country2">
                                    <option value="2">United Kingdom (UK) </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Order Notes</label>
                                <textarea></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="order_table_right">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Slim Collarless Blaze </td>
                                                <td class="text-right"> $75.20 </td>
                                            </tr>
                                            <tr>
                                                <td> Denim Kimono Jacket </td>
                                                <td class="text-right"> $50.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Cart Subtotal </td>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment1" name="check_method" type="radio"
                                                data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>

                                        <label for="payment1" data-toggle="collapse" data-target="#panel1">direct bank
                                            transfer</label>
                                        <div id="panel1" class="collapse show one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam
                                                    id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment2" name="check_method" type="radio"
                                                data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment2" data-toggle="collapse" data-target="#method2">cheque
                                            payment</label>
                                        <div id="method2" class="collapse two" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam
                                                    id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment3" name="check_method" type="radio"
                                                data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment3" data-toggle="collapse" data-target="#method3">cash on
                                            delivery</label>
                                        <div id="method3" class="collapse three" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam
                                                    id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment4" name="check_method" type="radio"
                                                data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment4" data-toggle="collapse"
                                            data-target="#method4">Paypal</label>
                                        <div id="method4" class="collapse four" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam
                                                    id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place_order_btn">
                                    <a class="btn btn-primary" href="#">place order</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
    @include('layout.subcribe')
    @include('layout.footer')

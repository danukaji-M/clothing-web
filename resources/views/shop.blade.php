@extends('layout.app')
@section('title', 'Products')
@php
    $user = session('user');
    if ($user != null) {
        $userName = $user->name;
        $userEmail = $user->email;
    }

@endphp
@section('content')
    <!--header section start-->
    @include('layout.header')
    <!--header section end-->
    <!--shop  area start-->
    <div class="shop_section shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>Categories</h2>
                                <ul>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#men">Men</a>
                                        <ul class="widget_dropdown_categories collapse show" id="men">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#women">women</a>
                                        <ul class="widget_dropdown_categories collapse" id="women">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#footwear">footwear</a>
                                        <ul class="widget_dropdown_categories collapse" id="footwear">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#accessories">accessories</a>
                                        <ul class="widget_dropdown_categories collapse" id="accessories">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h2>Filter By</h2>
                                <div class="filter__list slider_range">
                                    <h3>price</h3>
                                    <form action="#">
                                        <div id="slider-range"></div>
                                        <span>Range:</span>
                                        <input type="text" name="text" id="amount" />

                                    </form>
                                </div>

                                <div class="filter__list widget_size">
                                    <h3> size</h3>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">S </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> M</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">L</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> XL</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">XLL</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter__list widget_color">
                                    <h3>color</h3>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color1"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color2"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color3"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color4"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color5"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color6"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color7"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <span class="checkmark color8"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter__list widget_brands">
                                    <h3 data-toggle="collapse" data-target="#brands">brands</h3>
                                    <ul class="widget_dropdown_categories collapse show" id="brands">
                                        <li><a href="#"> The North Face <span>104</span></a></li>
                                        <li><a href="#">Zara Basic <span>68</span></a></li>
                                        <li><a href="#">Moschino <span>75</span></a></li>
                                        <li><a href="#">Supreme <span>30</span></a></li>
                                        <li><a href="#">Ecko Unltd <span>150</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget_list">
                                <h2>Recent Product</h2>
                                <div class="recent_product">
                                    <div class="recent_product_list d-flex mb-25">
                                        <div class="recent_thumb">
                                            <a href="product-details.html"><img src="{{('img/product/product4.jpg')}}"
                                                    alt=""></a>
                                        </div>
                                        <div class="recent_content">
                                            <h4><a href="product-details.html">Barbour T-shirt <br> International</a></h4>
                                            <span>$32.00</span>
                                        </div>
                                    </div>
                                    <div class="recent_product_list d-flex">
                                        <div class="recent_thumb">
                                            <a href="product-details.html"><img src="{{('img/product/product3.jpg')}}"
                                                    alt=""></a>
                                        </div>
                                        <div class="recent_content">
                                            <h4><a href="product-details.html">Barbour T-shirt <br> International</a></h4>
                                            <span>$32.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <!--breadcrumbs area start-->
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                    <!--breadcrumbs area end-->

                    <div class="shop_banner d-flex align-items-center" data-bgimg="assets/img/bg/shop_bg.jpg">
                        <div class="shop_banner_text">
                            <h2>essential <br> wears</h2>
                            <p>The collections basic items <br> essential for all girls</p>
                        </div>
                    </div>
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper d-flex justify-content-between align-items-center">
                        <div class="page_amount">
                            <p><span>1.260</span> Products Found</p>
                        </div>
                        <div class=" sorting_by d-flex align-items-center">
                            <span>SORT BY :</span>
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">NAME 3</option>
                                    <option value="2">NAME 4</option>
                                    <option value="3">NAME 5</option>
                                    <option value="4">NAME 6</option>
                                    <option value="5">NAME 7</option>
                                    <option value="6">NAME 8</option>
                                </select>
                            </form>
                        </div>
                        <div class="toolbar_btn_wrapper d-flex align-items-center">
                            <div class="view_btn">
                                <a class="view" href="#">VIEW</a>
                            </div>
                            <div class="shop_toolbar_btn">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#" class="active btn-grid-3" data-role="grid_3" data-tippy="3"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top"><i class="ion-grid"></i></a></li>

                                    <li><a href="#" class="btn-list" data-role="grid_list" data-tippy="List"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <!--single Product-->
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <!--single Product-->
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="{{('img/product/product4.jpg')}}" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple Sneaker</a>
                                    </h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Viva..</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_style pagination justify-content-center">
                        <ul class="d-flex">
                            <li><a href="#">
                                    << </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a class="current" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>

                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <!--newsletter section start-->
    
    <!--newsletter section end-->
    @include('layout.footer')
@endsection

@extends('layout.app')
@section('title', 'User Account')
@section('content')
    <header>
        @include('layout.header')
    </header>
    <div class="container-fluid mt-5 ">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <div class="row mt-5 justif align-items-center">
                    <div class="col-12 col-lg-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="rounded-5" style=" border-radius: 100%">
                                            <img src="{{ asset('img/others/placeholder.png') }}" alt=""
                                                class=""
                                                style="border-radius: 100%;  border: 1px solid; height:200px; margin-left:120px; ">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <h3 class="text-center">User Name</h3>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <h5 class="text-center">User Email</h5>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <h5 class="text-center">User Phone</h5>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <h5 class="text-center">User Address</h5>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <a href="#" class="btn btn-primary">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-title">
                                <h3 class="text-center mt-2">User Address</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="address-line-1">Address Line 1</label>
                                    <input id="ad-1" type="text" class="form-control">
                                    <label for="address-line-2">Address Line 2</label>
                                    <input id="ad-2" type="text" class="form-control">
                                    <label for="city">City</label>
                                    <select name="city" id="city" class="form-control col-12">
                                        <option value="0">Select Your City</option>
                                    </select>
                                    <label for="district">District</label>
                                    <select name="district" id="district" class="form-control col-12">
                                        <option value="0">Select Your District</option>
                                    </select>
                                    <label for="postal-code">Postal Code</label>
                                    <input id="postal-code" type="text" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary">Update Profile</button>
                            <button class="btn btn-primary mt-2"><a href="/addProduct">Add Product</a></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                <h3 class="text-center mt-2">User Orders</h3>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="product_container row">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                                            <div class="product_slick slick_slider_activation"
                                                data-slick='{
                                                "slidesToShow": 4,
                                                "slidesToScroll": 1,
                                                "arrows": true,
                                                "dots": false,
                                                "autoplay": false,
                                                "speed": 300,
                                                "infinite": true,
                                                "responsive":[
                                                  {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                                                  {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                                                  {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                                                 ]
                                            }'>
                                                <article class="col single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary_img"
                                                                    src="{{ 'img/product/product1.jpg' }}"
                                                                    alt="consectetur">
                                                            </a>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <div class="product_ratting">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li><a href="#"><i
                                                                                class="ion-android-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="ion-android-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="ion-android-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="ion-android-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="ion-android-star"></i></a></li>
                                                                    <li><span>(4)</span></li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="product_name"><a href="product-details.html">Basic
                                                                    Joggin Shorts</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$26.00</span>
                                                                <span class="old_price">$62.00</span>
                                                            </div>
                                                            <div class="add_to_cart">
                                                                <a class="btn btn-primary" href="#"
                                                                    data-tippy="View Details" data-tippy-inertia="true"
                                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                                    data-tippy-placement="top">View Details</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>

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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-title">
                                    <h3 class="text-center mt-2">MY PRODUCTS</h3>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 input-group">
                                            <input type="text" placeholder="Search Your Product" class="form-control">
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                    </div>

                                    <div class="product container row mt-3">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                                <div class="product_slick slick_slider_activation"
                                                    data-slick='{
                                                "slidesToShow": 4,
                                                "slidesToScroll": 1,
                                                "arrows": true,
                                                "dots": false,
                                                "autoplay": false,
                                                "speed": 300,
                                                "infinite": true,
                                                "responsive":[
                                                  {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                                                  {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                                                  {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                                                 ]
                                            }'>
                                                    <article class="col single_product">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a href="product-details.html">
                                                                    <img class="primary_img"
                                                                        src="{{ 'img/product/product1.jpg' }}"
                                                                        alt="consectetur">
                                                                </a>
                                                            </div>
                                                            <figcaption class="product_content text-center">
                                                                <div class="product_ratting">
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li><a href="#"><i
                                                                                    class="ion-android-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="ion-android-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="ion-android-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="ion-android-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="ion-android-star"></i></a></li>
                                                                        <li><span>(4)</span></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product_name"><a
                                                                        href="product-details.html">Basic
                                                                        Joggin Shorts</a>
                                                                </h4>
                                                                <div class="price_box">
                                                                    <span class="current_price">$26.00</span>
                                                                    <span class="old_price">$62.00</span>
                                                                </div>
                                                                <div class="add_to_cart">
                                                                    <a class="btn btn-primary" href="#"
                                                                        data-tippy="View Details"
                                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-placement="top">View Details</a>
                                                                </div>
                                                            </figcaption>
                                                            <button class="btn btn-secondary form-control">Disable</button>
                                                            <button
                                                                class="btn btn-secondary mt-1 form-control">Edit</button>
                                                        </figure>
                                                    </article>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')

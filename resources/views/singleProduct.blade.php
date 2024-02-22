@extends('layout.app')
@section('title', 'product')
@section('content')
    <header>
        @include('layout.header')
    </header>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <section class="product_details mb-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_zoom_gallery">
                        <div class="zoom_gallery_inner d-flex">
                            <div class="zoom_tab_img">
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product1.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product2.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product3.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('mg/product/small-product/product4.png') }}i" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product1.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product2.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product3.png') }}" alt="tab-thumb"></a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img
                                        src="{{ asset('img/product/small-product/product4.png') }}" alt="tab-thumb"></a>
                            </div>
                            <div class="product_zoom_main_img">
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('') }}img/product/big-product/product1.png"
                                        src="{{ asset('') }}img/product/big-product/product1.png" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('img/product/big-product/product1.png') }}"
                                        src="{{ asset('img/product/big-product/product1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">
                            <h1>Edwin T-Shirt Logo Script Print in Navy</h1>
                            <div class="product_ratting_review d-flex align-items-center">
                                <div class=" product_ratting">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review">
                                    <ul class="d-flex">
                                        <li>4 reviews</li>
                                        <li>Write your review</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$39.00</span>
                            </div>
                            <div class="product_availalbe">
                                <ul class="d-flex">
                                    <li><i class="icon-layers icons"></i> Only <span>15</span> left </li>
                                    <li>Availalbe: <span class="stock">In Stock</span></li>
                                </ul>
                            </div>
                            <div class="product_desc">
                                <p>A t-shirt that comes in three colors (red, white and blue) and three sizes (small,
                                    medium, large) is a configurable product. </p>
                            </div>
                            <div class="product_variant">
                                <div class="filter__list widget_color d-flex align-items-center">
                                    <h3>select color</h3>
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
                                            <span class="checkmark color5"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter__list widget_size d-flex align-items-center">
                                    <h3>select size</h3>
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

                                <div class="variant_quantity_btn d-flex">
                                    <div class="pro-qty border">
                                        <input min="1" max="100" type="tex" value="1">
                                    </div>
                                    <button class="button btn btn-primary" type="submit"><i class="ion-android-add"></i>
                                        Add To Cart</button>
                                    <a class="wishlist" href="#"><i class="ion-ios-heart"></i></a>
                                </div>
                            </div>
                            <div class="product_sku">
                                <p><span>SKU: </span> #ABC123456</p>
                            </div>
                            <div class="product_tags d-flex">
                                <span>tags: </span>
                                <ul class="d-flex">
                                    <li><a href="#">fashion,</a></li>
                                    <li><a href="#">clothings,</a></li>
                                    <li><a href="#">accessorires</a></li>
                                </ul>
                            </div>
                            <div class="priduct_social d-flex">
                                <span>SHARE: </span>
                                <ul>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button border-bottom">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab"
                                        aria-controls="info" aria-selected="false">Product Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tags" role="tab" aria-controls="tags"
                                        aria-selected="false">Tags </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#additional" role="tab" aria-controls="additional"
                                        aria-selected="false">Additional Information </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tabinfo" role="tab" aria-controls="tabinfo"
                                        aria-selected="false">Custom Tab Info </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#video" role="tab" aria-controls="video"
                                        aria-selected="false">Custom Tab Video </a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>Coupling a blended linen construction with tailored style, the River Island HR Jasper
                                        Blazer will imprint a touch of dapper charm into your after-dark wardrobe. <br> Our
                                        model wearing a size medium blazer, and usually takes a size medium/38L shirt. <br>
                                        He is 6’2 1/2” (189cm) tall with a 38” (96 cm) chest and a 31” (78 cm) waist.</p>
                                    <ul>
                                        <li>Length: 74cm</li>
                                        <li>Regular fit</li>
                                        <li>Notched lapels</li>
                                        <li>Twin button front fastening</li>
                                        <li>Front patch pockets; chest pocket</li>
                                        <li> Internal pockets</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="{{ asset('') }}img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tags" role="tabpanel">
                                <div class="product_info_content">
                                    <ul>
                                        <li>Length: 74cm</li>
                                        <li>Regular fit</li>
                                        <li>Notched lapels</li>
                                        <li>Twin button front fastening</li>
                                        <li>Front patch pockets; chest pocket</li>
                                        <li> Internal pockets</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have since
                                        evolved into a full ready-to-wear collection in which every item is a vital part of
                                        a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                        unmistakable signature style. All the beautiful pieces are made in Italy and
                                        manufactured with the greatest attention. Now Fashion extends to a range of
                                        accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabinfo" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have since
                                        evolved into a full ready-to-wear collection in which every item is a vital part of
                                        a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                        unmistakable signature style. All the beautiful pieces are made in Italy and
                                        manufactured with the greatest attention. Now Fashion extends to a range of
                                        accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="video" role="tabpanel">
                                <div class="product_tab_vidio text-center">
                                    <iframe width="729" height="410" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->
    <!--product area -->
    <section class="product_area related_products mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-50">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class=" product_slick slick_slider_activation"
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
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product1.jpg" alt="consectetur">
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
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product2.jpg" alt="consectetur">
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
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen T-Shirts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product3.jpg" alt="consectetur">
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
                                <figcaption class="product_content text-center">
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
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product4.jpg" alt="consectetur">
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
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded Sunglasses</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product1.jpg" alt="consectetur">
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
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="img/product/product2.jpg" alt="consectetur">
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
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded Sunglasses</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
    @include('layout.subcribe')
    @include('layout.footer')

@endsection

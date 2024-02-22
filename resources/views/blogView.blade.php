@extends('layout.app')
@section('title', 'Blog')
@section('content')
    @include('layout.header')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h3>Write, Share & Discuss <br> Together</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog page section start-->
    <div class="blog_page_section mb-140">
        <div class="container">
            <div class="blog_messonry_button d-flex justify-content-center">
                <button class="active" data-filter="*">all</button>
                <button data-filter=".news">news </button>
                <button data-filter=".products">products </button>
                <button data-filter=".nspiration">nspiration </button>
                <button data-filter=".community">community</button>
                <button data-filter=".others">others</button>
            </div>
            <div class="row blog_page_gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item nspiration community">
                    <article class="single_blog products community">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news community others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog5.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products nspiration">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog6.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog7.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog8.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog9.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="pagination_style pagination blog_pagination justify-content-center">
                <ul class="d-flex">
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="#">16</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--blog page section end-->
    @include('layout.subcribe')
    @include('layout.footer')


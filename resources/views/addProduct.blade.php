@extends('layout.app')
@section('title', 'Add Product')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('layout.header')
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-12 col-lg-10 card">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label for="product-name">Product Name</label>
                                <input type="text" id="product-name" class="form-control">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="product-price">Product Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">LKR.</span>
                                    <input type="text" id="product-price" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="product-description">Product Description</label>
                                <textarea name="product-description" id="product-description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 mt-2 mb-3">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-3">
                                        <label for="files" class="">
                                            <div class="card ">
                                                <img src="{{ asset('img\others\product-placeholder.jpg') }}" alt=""
                                                    class="img-fluid img-thumbnail">
                                            </div>
                                        </label>
                                        <input type="file" accept="image/*" id="img1" class=" d-none form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="files" class="">
                                            <div class="card ">
                                                <img src="{{ asset('img\others\product-placeholder.jpg') }}" alt=""
                                                    class="img-fluid img-thumbnail">
                                            </div>
                                        </label>
                                        <input type="file" accept="image/*" id="img2" class=" d-none form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="files" class="">
                                            <div class="card ">
                                                <img src="{{ asset('img\others\product-placeholder.jpg') }}" alt=""
                                                    class="img-fluid img-thumbnail">
                                            </div>
                                        </label>
                                        <input type="file" id="img3" accept="image/*" class=" d-none form-control">
                                    </div>
                                    <label for="files" class="btn btn-success mt-2 col-10">Add Product images</label>
                                    <input type="file" id="files" class="d-none" accept="image/*" multiple>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="product-category">Product Category</label>
                                <select name="product-category" id="product-category" class="form-select">
                                    <option value="0">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="product-brand">Product Brand</label>
                                <select name="product-brand" id="product-brand" class="form-select">
                                    <option value="0">Select Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <!--sizes and colors-->
                            <!--<div class="col-12 col-lg-6">
                                                <label for="product-size">Product Size</label>
                                                <select name="product-size" id="product-size" class="form-select">
                                                    <option value="0">Select Size</option>

                                                </select>
                                            </div>-->
                            <div class="col-12 col-lg-6">
                                <label for="product-color">Product Color</label>
                                <select name="product-color" id="product-color" class="form-select">
                                    <option value="0">Select Color</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col=-12 col-lg-6">
                                <label for="product-quantity" class="form-label">Product Quantity</label>
                                <br>
                                <input type="number" id="product-quantity" class="form-control">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="shipping">Product Shipping Cost</label>
                                <div class=" input-group">
                                    <span class=" input-group-text">LKR</span>
                                    <input type="text" id="shipping" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <h4>Product Sizes</h4>
                                <select name="size" class="form-select" id="size">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->size_description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-10 mt-4 mb-5 offset-1 ">
                                <div class="row justify-content-center text-center align-items-center ">
                                    <div class="col-12">
                                        <button onclick="addProduct()" class="btn text-center btn-warning form-control">
                                            Add Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @include('layout.footer')
@endsection

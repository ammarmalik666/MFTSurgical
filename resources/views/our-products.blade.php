@extends('includes.layout')

@section('meta')

<title>Products | MFT Surgical</title>

@endsection

@section('css')

@endsection

@section('main_content')

<section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb_section">
                    <ul class="breadcrumb-list">
                        <li class="trail-item trail-begin"><a href="index.html">Home</a></li>
                        <li class="trail-item trail-end"><span class="active">Products</span></li>
                    </ul>
                    <h2 class="breadcrumb_title">Our Products</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb_area-end -->

<!-- portfolio_area-start -->
<div class="cportfolio_area pt-120 pb-90 fix">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="t_person_info mb-40 text-center">
                    <h2 class="t_single_title">Our Categories</h2>
                </div>
            </div>
        </div>
        <div class="row cportfolio_active">
            @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="cportfolio_single mb-30">
                        <div class="cportfolio_img">
                            <a href="/products/category-products"><img src="/uploads/categories/{{ $category->category_image }}" alt="img" style="height: 300px;"></a>
                        </div>
                        <a href="/products/category-products" class="c_dirsign"><i class="fal fa-long-arrow-right"></i></a>
                        <div class="cportfolio_text">
                            <span class="cportfolio_sub">Category</span>
                            <h4 class="cportfolio_title theme-3"><a href="/products/category-products">{{ $category->category_name }}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
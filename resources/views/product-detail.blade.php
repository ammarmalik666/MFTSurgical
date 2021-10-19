@extends('includes.layout')

@section('meta')

<title>Our Products | MFT Surgical</title>

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
                        <li class="trail-item trail-end"><span class="active">Our Category</span></li>
                    </ul>
                    <h2 class="breadcrumb_title">Our Product</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sigle_page_area pt-120 pb-120 fix">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-5">
                <div class="t_person_img mb-40">
                    <img src="assets/img/about/single_team.jpg" alt="team-img">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="t_person_info pl-50 mb-40">
                    <span class="t_sub_info">Product Category</span>
                    <h2 class="t_single_title">Product Name</h2>
                    <div class="person_info_details" >
                        <p><i class="fal fa-envelope"></i> <span>Product Code</span>334-3403</p>
                        <p>
                            <i class="fal fa-phone"></i> <span>Quantity</span> 
                            <input type="number" class="quantity-input form-control" value="50" placeholder="Enter quantity">
                        </p>
                        <div class="col-12">
                            <div class="ccontact_button mt-10 d-grid w-50">
                                <a class="contact_btn i_right btn btn-block" href="/add-to-quote">Add To Quote <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-50">
            <div class="col-12">
                <div class="fullwidth_title_section">
                    <h4 class="fullwidth_title"><span class="theme-2 is_border_bottom">Education</span> <span class="is_sgray">&</span> Experience</h4>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="t_feature_sigle text-center mb-30">
                    <i class="flaticon-favorites"></i>
                    <h4 class="t_feature_title">Oxford University</h4>
                    <span class="t_feature_date">2000 - 10</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="t_feature_sigle text-center mb-30">
                    <i class="flaticon-open-book"></i>
                    <h4 class="t_feature_title">United University</h4>
                    <span class="t_feature_date">2010 - 14</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="t_feature_sigle text-center mb-30" >
                    <i class="flaticon-board"></i>
                    <h4 class="t_feature_title">Hello University</h4>
                    <span class="t_feature_date">2014 - 18</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="t_feature_sigle text-center mb-30" data-wow-delay="0.9s">
                    <i class="flaticon-idea"></i>
                    <h4 class="t_feature_title">Hilix University</h4>
                    <span class="t_feature_date">2018 - 21</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
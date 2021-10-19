@extends('includes.layout')

@section('meta')

<title>Quote Form | MFT Surgical</title>

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
                        <li class="trail-item trail-end"><span class="active">Catalog</span></li>
                    </ul>
                    <h2 class="breadcrumb_title">Quote Form</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact_form_area pt-105 pb-120 fix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_back_title text-center mb-40">
                    <div class="back_title_inner" data--delay="0.2s">
                        <span class="sub_back_title theme-4 dmsans">To get a free quote please fill in the form below</span>
                        <h2 class="back_title dmsans">Get Every Quotation</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Full Name</b> *</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Email Address</b> *</label>
                            <input type="email" class="form-control" placeholder="Enter your email address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Mobile</b> *</label>
                            <input type="text" class="form-control" placeholder="Enter your mobile">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Fax Number</b></label>
                            <input type="text" class="form-control" placeholder="Enter your fax number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Country</b> *</label>
                            <select name="" class="form-select" id="">
                                <option selected disabled>Select Country</option>
                                <option value="">Pakistan</option>
                                <option value="">UAE</option>
                                <option value="">UK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>City</b> *</label>
                            <input type="email" class="form-control" placeholder="Enter your city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Address Line 1</b> *</label>
                            <input type="text" class="form-control" placeholder="Enter your address">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Address Line 2</b></label>
                            <input type="text" class="form-control" placeholder="Enter your address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Preferred Shipping Aggrement</b> *</label>
                            <select name="" class="form-select" id="">
                                <option selected disabled>Please choose a prefered method</option>
                                <option value="">FOB</option>
                                <option value="">C&F</option>
                                <option value="">CIF</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Preferred Shipping Method</b> *</label>
                            <select name="" class="form-select" id="">
                                <option selected disabled>Please choose a prefered method</option>
                                <option value="">By Sea</option>
                                <option value="">By Air</option>
                                <option value="">DHL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label"><b>Your Message</b> *</label>
                            <textarea name="" class="form-control" placeholder="Enter your message" id="" cols="30" rows="7"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <div class="s_widget_wrapper mb-40">
                    <div class="s_widget s_widget_category mb-40">
                        <h4 class="s_widget_title">Your Quote Summary</h4>
                        <div class="s_widget_content s_widget_category_content">
                            <div class="news_single_feed is_border_bottom">
                                <div class="news_feed_img">
                                    <a href="javascript:void(0)"><img src="assets/img/blog/feed1.png" alt="img"></a>
                                </div>
                                <div class="news_feed_text">
                                    <h5 class="news_feed_title">
                                        <a href="javascript:void(0)">Item Name Here</a><br>
                                        <a href="javascript:void(0)">Item Code:- 9394384</a>
                                    </h5>
                                    <div class="news_meta_single meta_sidebar">
                                        <i class="fal fa-calendar-alt"></i>
                                        <a href="#">Quantity:- 50</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_single_feed is_border_bottom">
                                <div class="news_feed_img">
                                    <a href="javascript:void(0)"><img src="assets/img/blog/feed1.png" alt="img"></a>
                                </div>
                                <div class="news_feed_text">
                                    <h5 class="news_feed_title">
                                        <a href="javascript:void(0)">Item Name Here</a><br>
                                        <a href="javascript:void(0)">Item Code:- 9394384</a>
                                    </h5>
                                    <div class="news_meta_single meta_sidebar">
                                        <i class="fal fa-calendar-alt"></i>
                                        <a href="#">Quantity:- 50</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_single_feed is_border_bottom">
                                <div class="news_feed_img">
                                    <a href="javascript:void(0)"><img src="assets/img/blog/feed1.png" alt="img"></a>
                                </div>
                                <div class="news_feed_text">
                                    <h5 class="news_feed_title">
                                        <a href="javascript:void(0)">Item Name Here</a><br>
                                        <a href="javascript:void(0)">Item Code:- 9394384</a>
                                    </h5>
                                    <div class="news_meta_single meta_sidebar">
                                        <i class="fal fa-calendar-alt"></i>
                                        <a href="#">Quantity:- 50</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_singal_feed">
                                <div class="col-12">
                                    <div class="ccontact_button text-center mt-10">
                                        <button class="contact_btn i_right" type="submit">Get A Quote <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
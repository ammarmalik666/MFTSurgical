@extends('includes.layout')

@section('meta')

<title>MFT Surgical</title>

@endsection

@section('css')

@endsection

@section('main_content')
    <div class="slider3_area fix">
        <div class="slider3_wrapper">
            <div class="slider3_active swiper-container">
                <div class="swiper-wrapper">
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="assets/img/hero/slider3_1.jpg"></div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">Construction <br>
                                                Maintenance<br>
                                                Proper <span class="slide_line">Solutions</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="/catalogue" class="slide3_btn i_right">Our Catalogue <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="assets/img/hero/slider3_2.jpg"></div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">Rennovation <br>
                                                organizations<br>
                                                Suitable <span class="slide_line">Solutions</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="/products" class="slide3_btn i_right">Our Products <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="assets/img/hero/slider3_3.jpg"></div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">Consulting <br>
                                                Authentication<br>
                                                Absolute <span class="slide_line">Solutions</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="/contact-us" class="slide3_btn i_right">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="assets/img/hero/slider3_4.jpg"></div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">Expert Labour <br>
                                                Maintenance<br>
                                                Proper <span class="slide_line">Solutions</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="service.html" class="slide3_btn i_right">Our Services <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="assets/img/hero/slider3_5.jpg"></div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">Rebuild <br>
                                                Experience<br>
                                                Proper <span class="slide_line">Solutions</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="service.html" class="slide3_btn i_right">Our Services <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide3_navigation">
                    <div class="slide3_button_next"><i class="fal fa-long-arrow-right"></i></div>
                    <div class="slide3_button_prev"><i class="fal fa-long-arrow-left"></i></div>
                </div>
            </div>
            <div class="slider_thumb_area wow fadeInUp" data-wow-delay="0.9s">
                <div class="container">
                    <div class="slider3_thumb_active swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_thumb_wrap">
                                    {{-- <div class="slide_thumb">
                                        <i class="flaticon-brick"></i>
                                        <span class="thumb_text">Construction</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_thumb_wrap">
                                    {{-- <div class="slide_thumb">
                                        <i class="flaticon-drill-1"></i>
                                        <span class="thumb_text">Rennovation</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_thumb_wrap">
                                    {{-- <div class="slide_thumb">
                                        <i class="flaticon-pencil-and-ruler"></i>
                                        <span class="thumb_text">Consulting</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_thumb_wrap">
                                    {{-- <div class="slide_thumb">
                                        <i class="flaticon-construction-worker"></i>
                                        <span class="thumb_text">Expert Labour</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_thumb_wrap">
                                    {{-- <div class="slide_thumb">
                                        <i class="flaticon-painting"></i>
                                        <span class="thumb_text">Rebuild</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider3_area-end -->

    <!-- about3_area-start -->
    <div class="about_area3 pt-175 pb-165 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about3_img_wrapper text-xl-end pr_5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="about3_img"><img src="assets/img/about/about3_1.png" alt="img"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-9">
                    <div class="about3_content pl-50">
                        <div class="section_title2 mb-30">
                            <span class="sub_title2 is_gray border_style wow fadeInUp" data-wow-delay="0.1s">About us</span>
                            <h2 class="title2 right_side wow fadeInUp" data-wow-delay="0.2s">Senior Construction Managers Since 90</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                            id exercitation ullamco.</p>
                        <div class="about3_features_list mt-35">
                            <div class="about3_feature_list_single wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="about3_feature_icon">
                                    <a href="service.html"><i class="flaticon-concrete-mixer"></i></a>
                                </div>
                                <div class="about3_feature_content">
                                    <h4 class="about3_feature_title"><a href="service.html">Curated Designed</a></h4>
                                    <p>Do eiusmod tempor incidid
                                        unt ut labore et dolore magna
                                        aliqua. Ut enim ad minim</p>
                                </div>
                            </div>
                            <div class="about3_feature_list_single wow fadeInRight" data-wow-delay="0.5s">
                                <div class="about3_feature_icon">
                                    <a href="service.html"><i class="flaticon-solutions"></i></a>
                                </div>
                                <div class="about3_feature_content">
                                    <h4 class="about3_feature_title"><a href="service.html">Right Calculation</a></h4>
                                    <p>Tempor incididunt ut labore
                                        et dolore magna aliqua. Ut
                                        enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about3_area-end -->

    <!-- feature_area3-start -->
    <div class="feature3_area soft_gray_bg pt-120 pb-120 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="feature3_skill_content">
                        <div class="section_title2 mb-30">
                            <span class="sub_title2 is_gray border_style wow fadeInUp" data-wow-delay="0.3s">Features</span>
                            <h2 class="title2 wow fadeInUp" data-wow-delay="0.5s">Our Experience Tell Every Industry</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                            id exercitation ullamco.</p>

                            <div class="achievement_wrapper3 border_bottom mt-40">
                                <div class="achievement_single mb-40 wow fadeInLeft" data-wow-delay="0.3s">
                                    <!-- progress_circle-start -->
                                    <div class="mission_progress_single achievement_progress_single is_mr25">
                                        <div class="progress_circle achievement_circle f_circle theme-3" data-percentage="65">
                                            <span class="progress-left">
                                                <span class="progress-bar achievement_bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar achievement_bar"></span>
                                            </span>
                                            <div class="progress-value is_black">
                                                <div class="value">65<span>%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- progress_circle-end -->
                                    <div class="achievement_text">
                                        <h4>Company <br>Expertise</h4>
                                    </div>
                                </div>
                                <div class="achievement_single mr_0 mb-40 wow fadeInLeft" data-wow-delay="0.4s">
                                    <!-- progress_circle-start -->
                                    <div class="mission_progress_single achievement_progress_single is_mr25">
                                        <div class="progress_circle achievement_circle f_circle theme-3" data-percentage="65">
                                            <span class="progress-left">
                                                <span class="progress-bar achievement_bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar achievement_bar"></span>
                                            </span>
                                            <div class="progress-value is_black">
                                                <div class="value">65<span>%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- progress_circle-end -->
                                    <div class="achievement_text">
                                        <h4>Financial Strategy <br>Recover</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="feature3_item_wrapper mt-40">
                                <div class="feature3_item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="feature3_item_img"><img src="assets/img/services/feature3_1.jpg" alt="img"></div>
                                    <div class="feature3_item_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing el
                                            it, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-xl-6 col-sm-6 col-md-6">
                            <div class="sigle_feature special_mt_30 mb-30">
                                <div class="feature_icon2"><a href="service.html"><i class="flaticon-worker"></i></a></div>
                                <h5 class="feature_title2"><a href="service.html">Expertise Team</a></h5>
                                <p>Lorem ipsum dolor sit amet, con
                                    ectetur adipisicing elit, sed do ei
                                    usmod tempor incididunt</p>
                                <a href="service.html" class="feature_icon_btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-md-6">
                            <div class="sigle_feature mb-30">
                                <div class="feature_icon2"><a href="service.html"><i class="flaticon-message"></i></a></div>
                                <h5 class="feature_title2"><a href="service.html">Get In Touch</a></h5>
                                <p>Lorem ipsum dolor sit amet, con
                                    ectetur adipisicing elit, sed do ei
                                    usmod tempor incididunt</p>
                                <a href="service.html" class="feature_icon_btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-md-6">
                            <div class="sigle_feature special_mt_30 mb-30">
                                <div class="feature_icon2"><a href="service.html"><i class="flaticon-setting"></i></a></div>
                                <h5 class="feature_title2"><a href="service.html">Our Services</a></h5>
                                <p>Lorem ipsum dolor sit amet, con
                                    ectetur adipisicing elit, sed do ei
                                    usmod tempor incididunt</p>
                                <a href="service.html" class="feature_icon_btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-md-6">
                            <div class="sigle_feature mb-30">
                                <div class="feature_icon2"><a href="service.html"><i class="flaticon-crane"></i></a></div>
                                <h5 class="feature_title2"><a href="service.html">What We Do Here</a></h5>
                                <p>Lorem ipsum dolor sit amet, con
                                    ectetur adipisicing elit, sed do ei
                                    usmod tempor incididunt</p>
                                <a href="service.html" class="feature_icon_btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature_area3-end -->

    <!-- portfolio_carousel_area-start -->
    <div class="p_carousel_area black_bg_half pt-105 fix wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="std_section_title text-center mb-50 wow fadeInUp" data-wow-delay="0.3s">
                        <span class="std_sub_title theme-1 std_border_style">Portfolio</span>
                        <h2 class="std_title is_white">What We Have Done</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="p_carousel_wrapper">
            <div class="p_carousel_active swiper-container pb-110">
                <div class="p_carousel_wrapper swiper-wrapper">
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_1.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Construction</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">Nino man working warehouse driving forklift</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_2.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Construction</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">Construction is a general with
                                    term meaning the art</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_3.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Rennovation</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">Rennovation and science to
                                    form objects, systems</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_1.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Organization</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">The Organizations, and come
                                    from Latin constructio</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_2.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Portfolio</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">Construction is a general with
                                    term meaning the art</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_1.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Construction</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">A construction project en
                                    tails 5 important </a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="p_carousel_slide swiper-slide">
                        <div class="p_carousel_single wow fadeInUp" data-wow-delay="0.3s">
                            <div class="p_caoursel_img">
                                <a href="portfolio-details.html"><img src="assets/img/blog/p_blog3_3.png" alt="img"></a>
                            </div>
                            <div class="p_carousel_text">
                                <span class="p_sub_title">Rennovation</span>
                                <h4 class="blog_title theme-3"><a href="portfolio-details.html">Rennovation and science to
                                    form objects, systems</a></h4>

                                <a href="portfolio-details.html" class="p_abs_button"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- portfolio_carousel_area-end -->

    <!-- t_feedback_area-start -->
    <div class="t_feedback_area fix" data-background="assets/img/bg/feedback_bg.jpg">
        <div class="container">
            <div class="row f_height justify-content-end align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="feedback_active swiper-container wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feedback_wrapper swiper-wrapper">
                            <div class="feedback_slide swiper-slide">
                                <div class="feedback_content">
                                    <div class="section_title2 mb-25 wow fadeInUp" data-wow-delay="0.1s">
                                        <span class="sub_title2 is_gray border_style">Testimonials</span>
                                        <h2 class="title2">Feedbacks</h2>
                                    </div>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">A user review is a review conducted
                                        by any person who has access to the
                                        internet and publishes.</p>
                                    <div class="feedback_author mt-35 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="f_author_img">
                                            <a href="team-details.html"><img src="assets/img/blog/f_author.png" alt="img"></a>
                                        </div>
                                        <div class="f_author_text">
                                            <h6 class="f_author_name"><a href="team-details.html">Miranda H. Halim</a></h6>
                                            <span>CEO, Miranda Co</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback_slide swiper-slide">
                                <div class="feedback_content">
                                    <div class="section_title2 mb-25 wow fadeInUp" data-wow-delay="0.1s">
                                        <span class="sub_title2 is_gray border_style">Testimonials</span>
                                        <h2 class="title2">Feedbacks</h2>
                                    </div>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">A user review is a review conducted
                                        by any person who has access to the
                                        internet and publishes.</p>
                                    <div class="feedback_author mt-35 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="f_author_img">
                                            <a href="team-details.html"><img src="assets/img/blog/f_author.png" alt="img"></a>
                                        </div>
                                        <div class="f_author_text">
                                            <h6 class="f_author_name"><a href="team-details.html">Miranda H. Halim</a></h6>
                                            <span>CEO, Miranda Co</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback_slide swiper-slide">
                                <div class="feedback_content">
                                    <div class="section_title2 mb-25 wow fadeInUp" data-wow-delay="0.1s">
                                        <span class="sub_title2 is_gray border_style">Testimonials</span>
                                        <h2 class="title2">Feedbacks</h2>
                                    </div>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">A user review is a review conducted
                                        by any person who has access to the
                                        internet and publishes.</p>
                                    <div class="feedback_author mt-35 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="f_author_img">
                                            <a href="team-details.html"><img src="assets/img/blog/f_author.png" alt="img"></a>
                                        </div>
                                        <div class="f_author_text">
                                            <h6 class="f_author_name"><a href="team-details.html">Miranda H. Halim</a></h6>
                                            <span>CEO, Miranda Co</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback_slide swiper-slide">
                                <div class="feedback_content">
                                    <div class="section_title2 mb-25 wow fadeInUp" data-wow-delay="0.1 s">
                                        <span class="sub_title2 is_gray border_style">Testimonials</span>
                                        <h2 class="title2">Feedbacks</h2>
                                    </div>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">A user review is a review conducted
                                        by any person who has access to the
                                        internet and publishes.</p>
                                    <div class="feedback_author mt-35 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="f_author_img">
                                            <a href="team-details.html"><img src="assets/img/blog/f_author.png" alt="img"></a>
                                        </div>
                                        <div class="f_author_text">
                                            <h6 class="f_author_name"><a href="team-details.html">Miranda H. Halim</a></h6>
                                            <span>CEO, Miranda Co</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="feedback_pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="feedback_navigation">
                            <div class="feedback_button_prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="feedback_button_next"><i class="fal fa-chevron-right"></i></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- t_feedback_area-end -->

    <!-- counterup_area-start -->
    <div class="counterup_area fix" data-background="assets/img/bg/counter_bg.jpg">
        <div class="counter_content_wrapper">
            <div class="single_counter single_counter1 wow fadeInRight" data-wow-delay="0.7s">
                <i class="flaticon-house"></i>
                <h2 class="counter_title"><span class="odometer" data-count="4500">00</span></h2>
                <span class="counter_info">Good impressions with new things & strategy.</span>
            </div>
            <div class="single_counter single_counter2 wow fadeInRight" data-wow-delay="0.5s">
                <i class="flaticon-construction-plan"></i>
                <h2 class="counter_title"><span class="odometer" data-count="5320">00</span></h2>
                <span class="counter_info">Good impressions with new things & strategy.</span>
            </div>
            <div class="single_counter single_counter3 wow fadeInRight" data-wow-delay="0.3s">
                <i class="flaticon-search"></i>
                <h2 class="counter_title"><span class="odometer" data-count="8900">00</span></h2>
                <span class="counter_info">Good impressions with new things & strategy.</span>
            </div>
        </div>
    </div>
    <!-- counterup_area-end -->

    <!-- blog_area3-start -->
    <div class="blog_area3 soft_gray_bg pt-105 pb-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="std_section_title text-center mb-60">
                        <span class="std_sub_title is_gray std_border_style wow fadeInUp" data-wow-delay="0.3s">News</span>
                        <h2 class="std_title wow fadeInUp" data-wow-delay="0.5s">Blog Insights</h2>
                    </div>
                </div>
            </div>
            <div class="blog_section_wrapper3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog3 mb-30 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="single_blog3_img img_effect_white w_img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3_2.png" alt="img"></a>
                            </div>
                            <div class="single_blog3_content">
                                <span class="blog3_cat">Portfolio</span>
                                <span class="blog3_date">
                                    <span class="date_numb">23</span>
                                    <span class="date_text">Jun</span>
                                </span>
                                <div class="blog3_author mb-15">
                                    <a href="team-details.html"><img src="assets/img/blog/author3_2.png" alt="img"></a>
                                    <span class="blog3_author_name">Hilix H. Hexer</span>
                                </div>
                                <h4 class="blog3_title"><a href="blog-details.html">Construction easy solutions...</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog3 mb-30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single_blog3_img img_effect_white w_img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3_1.png" alt="img"></a>
                            </div>
                            <div class="single_blog3_content">
                                <span class="blog3_cat">Portfolio</span>
                                <span class="blog3_date">
                                    <span class="date_numb">23</span>
                                    <span class="date_text">Jun</span>
                                </span>
                                <div class="blog3_author mb-15">
                                    <a href="team-details.html"><img src="assets/img/blog/author3_1.png" alt="img"></a>
                                    <span class="blog3_author_name">Hilix H. Hexer</span>
                                </div>
                                <h4 class="blog3_title"><a href="blog-details.html">Team of professionals always</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog3 mb-30 wow fadeInRight" data-wow-delay="0.3s">
                            <div class="single_blog3_img img_effect_white w_img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3_3.png" alt="img"></a>
                            </div>
                            <div class="single_blog3_content">
                                <span class="blog3_cat">Portfolio</span>
                                <span class="blog3_date">
                                    <span class="date_numb">23</span>
                                    <span class="date_text">Jun</span>
                                </span>
                                <div class="blog3_author mb-15">
                                    <a href="team-details.html"><img src="assets/img/blog/author3_3.png" alt="img"></a>
                                    <span class="blog3_author_name">Hilix H. Hexer</span>
                                </div>
                                <h4 class="blog3_title"><a href="blog-details.html">Epic apex legends is waiting</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
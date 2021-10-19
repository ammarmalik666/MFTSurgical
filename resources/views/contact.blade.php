@extends('includes.layout')

@section('meta')

<title>Contact Us | MFT Surgical</title>

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
                        <li class="trail-item trail-end"><span class="active">Contact</span></li>
                    </ul>
                    <h2 class="breadcrumb_title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gmap_area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.50289685844!2d90.37002961536372!3d23.836269691406674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c148f09af491%3A0xcf07c389dc79ffb9!2sBDevs%20Technologies!5e0!3m2!1sen!2sbd!4v1625661376719!5m2!1sen!2sbd"></iframe>
</div>
<!-- gmap_area-end -->

<!-- contact_info-start -->
<section class="contact_info_area">
    <div class="container">
        <div class="contact_info_wrapper mtm125 wow fadeInUp" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-xxl-4 col-md-6 col-lg-4">
                    <div class="single_contact_info is_border ismd_border wow fadeInUp" data-wow-delay="0.3s">
                        <div class="ccontact_info_icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="ccontact_info_content theme-2">
                            <h5 class="ccontact_info_title">Phone Number</h5>
                            <p><a href="tel:897.098.098.90">897. 098. 098. 90</a></p>
                            <p><a href="tel:909.098.786.90-89">909. 098. 786. 90 - 89</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 col-lg-4">
                    <div class="single_contact_info is_border border_mdnone wow fadeInUp" data-wow-delay="0.5s">
                        <div class="ccontact_info_icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <div class="ccontact_info_content theme-2">
                            <h5 class="ccontact_info_title">Email Address</h5>
                            <p><a href="mailto:info@webexample.com">info@webexample.com</a></p>
                            <p><a href="mailto:jobs@webexample.com">jobs@webexample.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 col-lg-4">
                    <div class="single_contact_info wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ccontact_info_icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="ccontact_info_content">
                            <h5 class="ccontact_info_title">Office Address</h5>
                            <p>16/A, Mixdon City Hall <br>New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact_info-end -->

<section class="contact_form_area pt-105 pb-120 fix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_back_title text-center mb-40">
                    <div class="back_title_inner wow fadeInUp" data-wow-delay="0.2s">
                        <span class="sub_back_title theme-4 dmsans">Call To Action</span>
                        <h2 class="back_title dmsans">Get Every Answer</h2>
                        <span class="back_title_original dmsans">Answers</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input_single wow fadeInUp" data-wow-delay="0.3s">
                    <input type="text" placeholder="Enter your name">
                    <span class="cabs_icon"><i class="fad fa-user"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input_single wow fadeInUp" data-wow-delay="0.4s">
                    <input type="email" placeholder="Enter email address">
                    <span class="cabs_icon"><i class="fal fa-envelope"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input_single wow fadeInUp" data-wow-delay="0.5s">
                    <input type="tel" placeholder="Enter phone number">
                    <span class="cabs_icon"><i class="fal fa-phone"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input_single wow fadeInUp" data-wow-delay="0.6s">
                    <input type="text" placeholder="Select Subject">
                    <span class="cabs_icon"><i class="fal fa-book"></i></span>
                </div>
            </div>
            <div class="col-12">
                <div class="input_single wow fadeInUp" data-wow-delay="0.7s">
                    <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Enter phone number"></textarea>
                    <span class="ctextabs_icon"><i class="fal fa-book"></i></span>
                </div>
            </div>
            <div class="col-12">
                <div class="ccontact_button text-center mt-10 wow fadeInUp" data-wow-delay="0.9s">
                    <button class="contact_btn i_right" type="submit">Get A Quote <i class="fal fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('includes.layout')

@section('meta')

<title>Add to Quote | MFT Surgical</title>

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
                    <h2 class="breadcrumb_title" style="border-bottom: 0xp!important;">Cart</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="about_single_area pt-60 pb-120 fix">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="t_person_info text-center">
                    <h2 class="t_single_title bor-b-0 mb-0">Cart</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-stripped">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Model No:</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:15%;" class="align-middle text-center">
                                    <img src="https://nutasurgical.com/img/06-26-21-00595360d7b4b01f7ef.jpg" style="max-width:80px;" alt="img">
                                </td>
                                <td style="width:25%;" class="align-middle text-center">
                                    <b>Hoof Knife</b>
                                </td>
                                <td style="width:15%;" class="align-middle text-center">
                                    MFT-22232-23SW
                                </td>
                                <td style="width:25%;" class="align-middle text-center">
                                    <div class="d-flex">
                                        <input type="number" class="form-control" placeholder="Quantity" value="40">
                                        <button class="btn btn-warning text-white" style="margin-left:20px;">Update</button>
                                    </div>
                                </td>
                                <td style="width:15%;" class="align-middle text-center">
                                    <a href="javascript:void(0)">
                                        <img src="/assets/img/icons/remove.png" class="custom_icon" alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:15%;" class="align-middle text-center">
                                    <img src="https://nutasurgical.com/img/07-25-21-00241160fdbd81a48e3.jpg" style="max-width:80px;" alt="img">
                                </td>
                                <td style="width:25%;" class="align-middle text-center">
                                    <b>Saddle Pad and Kit</b>
                                </td>
                                <td style="width:15%;" class="align-middle text-center">
                                    MFT-22232-23SW
                                </td>
                                <td style="width:25%;" class="align-middle text-center">
                                    <div class="d-flex">
                                        <input type="number" class="form-control" placeholder="Quantity" value="50">
                                        <button class="btn btn-warning text-white" style="margin-left:20px;">Update</button>
                                    </div>
                                </td>
                                <td style="width:15%;" class="align-middle text-center">
                                    <a href="javascript:void(0)">
                                        <img src="/assets/img/icons/remove.png" class="custom_icon" alt="">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align:right;">
                        <a href="/quote-form" class="quote_continue_btn">Continue</a>
                    </div>
                   
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.partials.layout')
@section('meta')
<title>Product Details - Admin Panel</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      <h6 class="mb-0">Product Name</h6>
      <hr class="horizontal dark my-3">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h3 class="mt-lg-0 mt-4">{{ $products[0]->product_name }}</h3>
          <h5>Code : <span class="text-primary">{{ $products[0]->product_code }}</span></h5>
          <h5>Category : <span class="text-primary">{{ $products[0]->cat_name }}</span></h5>
          <h5 class="mt-4">Tags : {{ $products[0]->tags }} </h5>
        </div>
        <div class="col-xl-3 col-lg-3 text-center">
          <img class="w-100 border-radius-lg shadow-lg mx-auto" src="/uploads/products/{{ $products[0]->product_photo }}" alt="Product Photo" height="200px">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h5>Description</h5>
          <p class="text-xs">
            {!! $products[0]->product_description !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
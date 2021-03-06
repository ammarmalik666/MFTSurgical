@extends('admin.partials.layout')
@section('meta')
<title>Edit Product - Admin Panel</title>
@endsection
@section('extra_css')
<script src="https://cdn.tiny.cloud/1/9qud3j4ap5tuvnm6ezehrj1kwfcbnib47bem9lnwezfkld6p/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      <h6 class="mb-0">Edit Product</h6>
      <p class="text-sm mb-0">Edit new product</p>
      <hr class="horizontal dark my-3">
      <div class="col-md-7">
        @if($errors->any())
          @if($errors->first() == 'product_added')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">Product added successfully.</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif($errors->first() == 'product_not_added')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">Product not added. Try again please.</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif($errors->first() == 'unknownError')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">Check your internet coonection and try again.</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        @endif
        <form action="{{ route('update.product') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product[0]->id}}">

          <label for="ProductName" class="mt-0 form-label">Product Name</label>
          <input type="text" class="form-control" id="ProductName" placeholder="Enter product name" name="product_name" value="{{ $product[0]->product_name}}">
          @error('product_name')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label for="ProductCode" class="mt-2 form-label">Product Code</label>
          <div class="input-group">
            <span class="input-group-text">MFT - </span>
            <input type="text" class="form-control" id="ProductCode" placeholder="Enter product code" name="product_code" value="{{ $product_code}}">
          </div>
          @error('product_code')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label for="ProductDescription" class="mt-2 form-label">Product Description</label>
           <textarea class="form-control" id="ProductDescription" placeholder="Enter product description"name="product_description" cols="30" rows="5">{{ $product[0]->product_description}}</textarea>
          @error('product_description')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label for="productPhoto" class="mt-2 form-label">
            Product Photo
          </label>
          <input type="file" class="form-control" id="productPhoto" name="image">
          @error('image')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label class="mt-2 form-label">Parent Category</label>
          <select class="form-select" name="product_category" id="">
            <option disabled="">Select Parent Category</option>
            <option value="{{ $product[0]->product_category }}" selected>{{ $product[0]['p_cat_name'] }}</option>
            
              @foreach ($product[0]['product_categories'] as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
              @endforeach
            
          </select>
          @error('product_category')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <div class="mt-3">
            <button type="submit" class="btn bg-gradient-primary m-0">Update Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('extra_js')
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script>
@endsection
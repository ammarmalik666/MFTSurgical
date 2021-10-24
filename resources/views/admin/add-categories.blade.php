@extends('admin.partials.layout')
@section('meta')
<title>All Categories - Admin Panel</title>
@endsection
@section('extra_css')
<style>
    .box{
        display: none;
    }
</style>
@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      <h6 class="mb-0">New Category</h6>
      <p class="text-sm mb-0">Create new category</p>
      <hr class="horizontal dark my-3">
      <div class="col-md-6">
        @if($errors->any())
          @if($errors->first() == 'category_added')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">Category added successfully.</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif($errors->first() == 'category_not_added')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">Category not added. Try again please.</span>
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
        <form action="{{ route('create.category') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="categoryName" class="mt-0 form-label">Category Name</label>
          <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="category_name">
          @error('category_name')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label for="categoryPhoto" class="mt-2 form-label">
            Category Photo
            
          </label>
          <input type="file" class="form-control" id="categoryPhoto" name="image">
          @error('image')
            <span>
              <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
            </span>
          @enderror
          <label for="categoryType" class="mt-2 form-label">Category Type</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input form-check-input-sm" type="radio" name="category_type" id="inlineRadio1" value="main" required>
            <label class="form-check-label" for="inlineRadio1">Parent</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input form-check-input-sm" type="radio" name="category_type" id="inlineRadio2" value="secondary" required>
            <label class="form-check-label" for="inlineRadio2">Secondary</label>
          </div><br>
          <div class="box secondary">
            <label class="mt-2 form-label">Parent Category</label>
            <select class="form-select" name="parent_category" id="">
              <option selected disabled>Select Parent Category</option>
              @if ($parent_categories->Count() == 0)
                <option disabled>No categories found</option>
              @else
                @foreach ($parent_categories as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
              @endif
            </select>
            @error('parent_category')
              <span>
                <p style="font-size:13px!important; margin-bottom:0px!important; color: #fd0710!important;">{{ $message }}*</p>
              </span>
            @enderror
          </div>
          <div class="mt-3">
            <button type="submit" class="btn bg-gradient-primary m-0">Create Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('extra_js')
<script>
    $(document).ready(function(){
        $('input[name="category_type"]').click(function(){
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    });
</script>
@endsection
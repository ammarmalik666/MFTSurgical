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
        <form action="{{ route('create.category') }}" method="POST">
          @csrf
          <label for="categoryName" class="mt-0 form-label">Category Name</label>
          <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="category_name">
          <label for="categoryType" class="mt-2 form-label">Category Type</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input form-check-input-sm" type="radio" name="category_type" id="inlineRadio1" value="main" required>
            <label class="form-check-label" for="inlineRadio1">Main</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input form-check-input-sm" type="radio" name="category_type" id="inlineRadio2" value="secondary" required>
            <label class="form-check-label" for="inlineRadio2">Secondary</label>
          </div><br>
          <div class="box secondary">
            <label class="mt-2 form-label">Parent Category</label>
            <select class="form-select" name="parent_category" id="">
              <option value="Choice 1" selected>Choice 1</option>
              <option value="Choice 2">Choice 2</option>
              <option value="Choice 3">Choice 3</option>
              <option value="Choice 4">Choice 4</option>
            </select>
          </div>
          <div class="mt-3">
            <button type="button" name="button" class="btn bg-gradient-primary m-0">Create Category</button>
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
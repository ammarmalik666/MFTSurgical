@extends('admin.partials.layout')
@section('meta')
<title>All Categories - Admin Panel</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      <h6 class="mb-0">All Categories</h6>
      <hr class="horizontal dark my-3">
      <div class="table-responsive">
        <table class="table mb-0 text-nowrap">
          <thead>
            <tr>
              <th style="width:40%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
              <th style="text-align:center; width: 20%;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Products</th>
              <th style="text-align:center; width: 20%;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
              <th style="text-align:center; width: 20%;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            </tr>
          </thead>
        </table>
        @if(!empty($parent_categories))
          @php 
              $i = 1;
          @endphp
          @foreach($parent_categories as $obj)
            <table class="table mb-0 text-nowrap">
                <tbody class="table-light">
                    <tr>
                      <td style="width: 40%;">
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/uploads/categories/{{ $obj->category_image }}" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h5 class="mb-0" style="font-size: 14px;"><b>{{ $obj->category_name }}</b></h5>
                          </div>
                        </div>
                      </td>
                      <td style="text-align:center;width: 20%;" class="text-xs font-weight-bolder ps-2 align-middle">
                        <p class="font-weight-bold mb-0" style="font-size: 14px;"><b>10</b></p>
                      </td>
                      <td style="text-align:center;width: 20%;" class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td style="text-align:center;width: 20%;" class="align-middle">
                        <div class="d-flex justify-content-center">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <a href="javascript:;" class="text-danger font-weight-bold text-xs ms-2" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                        </div>
                      </td>
                    </tr>
                </tbody>
                <tbody>
                    @if(!$obj->secondary_categories->isEmpty())
                        @foreach($obj->secondary_categories as $s_obj)
                          <tr>
                            <td style="width: 40%;">
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="/uploads/categories/{{ $s_obj->category_image }}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-xs">{{ $s_obj->category_name }}</h6>
                                </div>
                              </div>
                            </td>
                            <td style="text-align:center;width: 20%;" class="text-xs font-weight-bolder ps-2 align-middle">
                              <p class="text-xs font-weight-bold mb-0">
                                10
                              </p>
                            </td>
                            <td style="text-align:center;width: 20%;" class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td style="text-align:center;width: 20%;" class="align-middle">
                              <div class="d-flex justify-content-center">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#edit-category" onclick="EditCategory('<?php echo $s_obj->id; ?>', '<?php echo $s_obj->category_name ?>')">
                                  Edit
                                </a>
                                <a href="javascript:;" class="text-danger font-weight-bold text-xs ms-2" data-toggle="tooltip" data-original-title="Edit user">
                                  Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @else
                    @endif
                </tbody>
            </table>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update.category') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id" value="">
          <label for="name" class="mt-0 form-label">Category Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter category name" name="category_name" value="">
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
          <div class="mt-3" style="text-align:right;">
            <button type="submit" class="btn bg-gradient-primary m-0">Update Category</button>
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
    function EditCategory(id, name ){
      $("#edit-category #name").val(name);
      $("#edit-category #id").val(id);
    }
    function deleteMainCategory(id, name ){
      $("#delete-product-modal #name").html(name);
      $("#delete-product-modal #id").val(id);
    }
    function deleteSubCategory(id, name ){
      $("#unarchive-product-modal #name").html(name);
      $("#unarchive-product-modal #id").val(id);
    }
</script>
@endsection

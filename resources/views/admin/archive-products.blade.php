@extends('admin.partials.layout')
@section('meta')
<title>All Products - Admin Panel</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      @if($errors->any())
        @if($errors->first() == 'product_not_unarchive')
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text text-white">Product not live. Try again please.</span>
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
      <h6 class="mb-0">Archive Products</h6>
      <hr class="horizontal dark my-3">
      <div class="table table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Code</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            </tr>
          </thead>
          <tbody>
            @if ($products->Count() == 0)
              <tr>
                <td colspan="4" class="align-middle text-center">
                  <p class="text-sm mb-0">No product archived yet.</p>
                </td>
              </tr>
            @else
              @foreach ($products as $product)
                <tr>
                  <td>
                    <a href="/admin/view/{{ $product->id }}/product">
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="/uploads/products/{{ $product->product_photo }}" class="avatar avatar-md me-3" alt="table image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $product->product_name }}</h6>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td>
                    <p class="text-sm text-secondary mb-0">{{ $product->product_code }}</p>
                  </td>
                  <td>
                    <p class="text-sm text-secondary mb-0">{{ $product['cat_name'] }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <a href="/admin/edit/product/{{ $product->id }}">
                      <span class="btn-inner--icon text-primary"><i class="fas fa-edit"></i></span>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#unarchive-product-modal" onclick="unarchiveProduct('<?php echo $product->id; ?>', '<?php echo $product->product_name; ?>')">
                      <span class="btn-inner--icon text-secondary"><i class="fas fa-eye"></i></span>  
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete-product-modal" onclick="deleteProduct('<?php echo $product->id; ?>', '<?php echo $product->product_name; ?>')">
                      <span class="btn-inner--icon text-danger"><i class="fas fa-trash-alt"></i></span>  
                    </a>
                  </td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{{-- =========== UnArchive Product Model =========== --}}

<div class="modal fade" id="unarchive-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unarchive Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to move <b id="name" class="text-success"></b> into active products?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('unarchive.product') }}" method="POST">
          @csrf
          <input type="hidden" name="id" id="id" value="">
          <button type="submit" class="btn bg-gradient-success bg-soft">Unarchive</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- =========== Delete Product Model =========== --}}
<div class="modal fade" id="delete-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to move <b id="name" class="text-danger"></b> into trash?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('delete.product_trash') }}" method="POST">
          @csrf
          <input type="hidden" name="id" id="id" value="">
          <button type="submit" class="btn bg-gradient-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
    function deleteProduct(id, name ){
      $("#delete-product-modal #name").html(name);
      $("#delete-product-modal #id").val(id);
    }
    function unarchiveProduct(id, name ){
      $("#unarchive-product-modal #name").html(name);
      $("#unarchive-product-modal #id").val(id);
    }
  </script>
@endsection
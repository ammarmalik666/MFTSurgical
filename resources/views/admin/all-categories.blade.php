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
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Products</th>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
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
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/uploads/categories/{{ $obj->category_image }}" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">{{ $obj->category_name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-xs font-weight-bolder ps-2 align-middle" style="text-align:left!important;">
                        <p class="text-xs font-weight-bold mb-0">10</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
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
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="/uploads/categories/{{ $s_obj->category_image }}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-xs">{{ $s_obj->category_name }}</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-xs font-weight-bolder ps-2 align-middle">
                              <p class="text-xs font-weight-bold mb-0">10</p>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle">
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
@endsection
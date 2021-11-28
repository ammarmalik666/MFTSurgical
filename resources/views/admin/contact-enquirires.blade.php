@extends('admin.partials.layout')
@section('meta')
<title>Contact Enquiries - Admin Panel</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<div class="row">
  <div class="col-lg-12 col-12 mx-auto">
    <div class="card card-body mt-0">
      <h6 class="mb-0">Contact Enquiries</h6>
      <hr class="horizontal dark my-3">
      <div class="table-responsive">
        <table class="table mb-0 text-nowrap">
          <thead>
            <tr>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
              <th style="text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            </tr>
          </thead>
        </table>
        {{-- @if(!empty($parent_categories))
          @php 
              $i = 1;
          @endphp
          @foreach($parent_categories as $obj) --}}
            <table class="table mb-0 text-nowrap">
                <tbody class="">
                    <tr>
                      <td colspan="3" class="text-xs font-weight-bolder ps-2 align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0">No enquiries yet</p>
                      </td>
                    </tr>
                </tbody>
            </table>
          {{-- @endforeach --}}
        {{-- @endif --}}
      </div>
    </div>
  </div>
</div>
@endsection
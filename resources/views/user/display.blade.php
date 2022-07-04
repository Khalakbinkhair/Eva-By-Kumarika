@extends('layouts.user-latouts')
@section('content')

<section class="content">
  {{-- <div class="row"> --}}
    {{-- <div class="col-12"> --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Table</h3>
        </div>
        <div class="card-body table-responsive">
          <table id="example2" class="table table-bordered table-hover text-center">
            <thead>
              <tr>
                <th>District Name</th>
                <th>Market Name</th>
                <th>Shop_Name</th>
                <th>Customer Name</th>
                <th>Contact No.</th>
                <th>Product sku</th>
                <th>Total Consume Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($memberInfo as $info) 
              <tr>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->district_name}}
                </td>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->market_name}}
                </td>
                </td>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->shop_name}}
                </td>
                <td>
                  <p style="text-align: center;">
                  {{$info->customer_name}}
                  </p>
                </td>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->phone}}
                </td>
                <td>
                  <p style="text-align: center;">
                  {{$info->product_sku}}
                  </p>
                </td>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->total_consume_amount}}
                </td>
               
                <td>
                  <a class="btn btn-primary" href="{{ route('user.edit_memberinfo',$info['id'])}}">
                    <i class="fa fa-edit fa-lg"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th> District Name</th>
                <th>Market Name</th>
                <th>Shop_Name</th>
                <th>Customer Name</th>
                <th>Contact No.</th>
                <th>Product sku</th>
                <th>Total Consume Amount</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
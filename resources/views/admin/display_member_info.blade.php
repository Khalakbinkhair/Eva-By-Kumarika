@extends('layouts.admin-layouts')
@section('content')
<section class="content">
    @if (session('message'))
                <div id="hidediv" class="alert alert-success-polar alert-dismissible">
                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Thanks!</strong> {{ session('message') }}
                </div>
              @endif
  {{-- <div class="row">
    <div class="col-12"> --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Table</h3>
        </div>
        <div class="card-body table-responsive">
          <table id="example2" class="table table-bordered table-hover  text-center">
            <thead>
              <tr>
                <th>District Name</th>
                <th>Market Name</th>
                <th>Shop_Name</th>
                <th>Customer Name</th>
                <th>Contact No.</th>
                <th>400ml</th>
                <th>500ml</th>
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
                  {{$info->product_sku_400ml}}
                  </p>
                </td>
                <td>
                  <p style="text-align: center;">
                  {{$info->product_sku_500ml}}
                  </p>
                </td>
                <td class="width-fix-title">
                  <p style="text-align: center;">
                  {{$info->total_consume_amount}}
                </td>
             
                <td>
                 
                      <a class="btn btn-primary" href="{{ route('edit_memberinfo',$info['id'])}}">
                        <i class="fa fa-edit fa-lg"></i>
                      </a>
                    </div>
                    {{-- <div class="col-md-6"> --}}
                      <form method="POST" action="{{ route('delete_memberinfo',$info['id'])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}  
                        <button class="btn btn-danger" onclick="return checkdelete()"><i class="fa fa-trash-o fa-lg"></i></button> 
                      </form>
                  </div>
                  </div>
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
                <th>400mk</th>
                <th>500ml</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script type="text/javascript">
        setTimeout(function() {
          $('#hidediv').fadeOut('fast');
      }, 5000);
      
</script>
@endsection
@extends('layouts.admin-layouts')

@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 mx-auto">
            <div class="card card-primary">
              <div class="card-header submit-Btn">
                <h3 class="card-title">Customer Info</h3>
              </div>
              <form action="{{ route('update_memberinfo',$memberInfo['id'])}}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <fieldset>
                    <label>District Name</label>
                    <input type="text" name="district_name" class="form-control" placeholder="Enter  District Name..." value="{{$memberInfo->district_name}}">
                    </fieldset>

                    <fieldset>
                    <label>Market Name</label>
                    <input type="text" name="market_name" class="form-control"  placeholder="Enter Market Name..." value="{{$memberInfo->market_name}}">
                    </fieldset>  
                  
                    <fieldset>
                    <label>Shop Name</label>
                    <input type="text" name="shop_name" class="form-control"  placeholder="Enter Shop Name..." value="{{$memberInfo->shop_name}}">
                    </fieldset>

                    <fieldset>
                    <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control"  placeholder="Enter Customer Name..." value="{{$memberInfo->customer_name}}">
                    </fieldset>

                    <fieldset>
                    <label>Contact No</label>
                    <input type="tel" name="phone" class="form-control" placeholder="xxx-xxxxxxxx" pattern="[0-9]{3}[0-9]{4}[0-9]{4}"  value="{{$memberInfo->phone}}"> 
                    </fieldset>

                    <fieldset>
                    <label>Product Sku</label>
                  <input type="checkbox" @if($memberInfo->product_sku_400ml=='1'){{'checked'}} @endif name="product_sku_400ml" value="1" >
                      <label for="product_sku_400ml"> 400ml</label>&nbsp&nbsp
                      <input type="checkbox"@if($memberInfo->product_sku_500ml=='1'){{'checked'}} @endif  name="product_sku_500ml" value="1">
                      <label for="product_sku_500ml"> 500ml</label><br>

                    </fieldset>

                      <fieldset>
                    <label>Total Consume Amount</label>
                    <input type="number" name="total_consume_amount" class="form-control" placeholder="Total Consume Ammount..." value="{{$memberInfo->total_consume_amount}}">
                      </fieldset>
                  </div>

       
      <div class="card-footer">
        <button type="submit" class="btn btn-primary submit-Btn">Submit</button>
      </div>
    </form>
  </div>
</div>

</div>
</div>



   
</section>
@endsection
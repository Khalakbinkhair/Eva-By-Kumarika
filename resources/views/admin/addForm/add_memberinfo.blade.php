@extends('layouts.admin-layouts')
@section('content')  


<div class="container">
  {{-- <div class="row justify-content-center">
    <div class="col-md-12"> --}}
      <div class="navbar-nav ml-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @else
      @endguest
    </div>
    <section class="content">
      <div class="container-fluid">
        {{-- <div class="row align-items-center"> --}}
          {{-- <div class="col-lg-6 col-md-10 mx-auto"> --}}
            
              <form action="{{ route('admin.save_memberinfo')}}"method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">
                  
                
                  <fieldset>
                    <legend><center><b>Gift hand over</b></center></legend>
                   
                  </fieldset>

                    <fieldset>
                      <div class="form-group row">
                      <label for="district_name" class="col-sm-3 col-form-label text-right">District Name</label>
                      <div class="col-sm-6">
                      <input type="text" name="district_name" class="form-control" placeholder="Enter District Name...">
                      @error('district_name')

                      <span class='text-danger'>{{$message}} </span>
                      
                       @enderror
                    </div>
                  </div>
                    </fieldset>

               
                    <fieldset>
                      <div class="form-group row">
                        <label for="market_name" class="col-sm-3 col-form-label text-right">Market Name</label>
                        <div class="col-sm-6">          
                      <input type="text" name="market_name" class="form-control" placeholder="Enter Market Name...">

                      @error('market_name')

                      <span class='text-danger'>{{$message}} </span>
                      
                       @enderror
                    </div>
                  </div>
                    </fieldset>
                 
                    <fieldset>
                      <div class="form-group row">
                        <label for="shop_name" class="col-sm-3 col-form-label text-right">Shop Name</label>
                        <div class="col-sm-6">
                      <input type="text" name="shop_name" class="form-control" placeholder="Enter Shop Name...">

                      @error('shop_name')

                      <span class='text-danger'>{{$message}} </span>
                      
                       @enderror
                      </div>
                    </div>
                    </fieldset>
                
                    <fieldset>
                      <div class="form-group row">
                        <label for="customer_name" class="col-sm-3 col-form-label text-right">Customer Name</label>
                        <div class="col-sm-6">
                      <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name...">

                      @error('customer_name')

                      <span class='text-danger'>{{$message}} </span>
                      
                       @enderror
                      </div>
                    </div>
                    </fieldset>
                 
                    <fieldset>
                      <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label text-right">Contact No.</label>
                        <div class="col-sm-6">
                      <input type="tel" name="phone" id='phone' class="form-control"  placeholder="01xxxxxxxxx" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" >
                
               
                      
                      @error('phone')

                      <span class='text-danger'>{{$message}} </span>
                      
                       @enderror
                      </div>
                    </div>
                    </fieldset>
               
                    <fieldset>
                      <div class="form-group row">
                        <label for="product_sku" class="col-sm-3 col-form-label text-right">Product Sku</label>
                        <div class="col-sm-6">
                      <input type="checkbox" name="product_sku_400ml" value="1">
                      <label for="product_sku_400ml" class="col-sm-3 col-form-label "> 400ml</label>
                      <input type="checkbox" name="product_sku_500ml" value="1">
                      <label for="product_sku_500ml" class="col-sm-3 col-form-label "> 500ml</label><br>
                    </div>
                  </div>
                    </fieldset>
               
                    <fieldset>

                      <div class="form-group row">
                        <label for="total_consume_amount" class="col-sm-3 col-form-label text-right">Total Consume Amount</label>
                        <div class="col-sm-6">
                      <input type="number" name="total_consume_amount" id='total_consume_amount' class="form-control" >
                  
                      <center>
                        <button type="submit" style="padding-left: 4rem; padding-right: 4rem;" class="btn btn-primary submit-Btn">Submit</button>
                        </center>
                    </fieldset>
                  </div>
          
            
                  
                </fieldset>
                </div>
              </form>
            </div>
          </div>
<!--           <div class="fatmonk-image pt-5">
            <center>
              <img  src=" {{asset('frontend/image/footer/himalaya.jpeg')}}" class="fatmonk-img img-fluid">
            </center>
          </div> -->
        {{-- </div>
      </div>
    </section>
  </div>
</div>
</div> --}}



  <script>
    $(document).ready(function(){
      $('input[name=phone]').change(function() {
        var query= $(this).val(); 
        var url = '{{ route("live_search_member",":query") }}';
        url = url.replace(':query', query );
        $.ajax({
       url:url,
       method:'GET',
       data:{},
       dataType:'json',
       success:function(data)
       {
        console.log(data);
        $('#total_consume_amount').val(data);
      
       }
      })
       });
    
      });

    
    </script>
    
@endsection

@extends('layouts.user-latouts')
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
        @if (session('message'))
                <div id="hidediv" class="alert alert-success-polar alert-dismissible">
                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Thanks!</strong> {{ session('message') }}
                </div>
              @endif
        {{-- <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 mx-auto"> --}}
              <form action="{{ route('save_member_info')}}"method="POST"  enctype="multipart/form-data">
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
                  </div>
                </div>
                  </fieldset>

                  <fieldset>
                    <div class="form-group row">
                      <label for="market_name" class="col-sm-3 col-form-label text-right">Market Name</label>
                      <div class="col-sm-6">          
                    <input type="text" name="market_name" class="form-control" placeholder="Enter Market Name...">
                  </div>
                </div>
                  </fieldset>

                  <fieldset>
                    <div class="form-group row">
                      <label for="shop_name" class="col-sm-3 col-form-label text-right">Shop Name</label>
                      <div class="col-sm-6">
                    <input type="text" name="shop_name" class="form-control" placeholder="Enter Shop Name...">
                  </fieldset>

                  <fieldset>
                    <div class="form-group row">
                      <label for="customer_name" class="col-sm-3 col-form-label text-right">Customer Name</label>
                      <div class="col-sm-6">
                    <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name...">
                  </fieldset>
                  
                  <fieldset>
                    <div class="form-group row">
                  <label for="phone" class="col-sm-3 col-form-label text-right">Contact No.</label>
                      <div class="col-sm-6">
                    <input type="tel" name="phone" class="form-control" placeholder="01xxxxxxxxx" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" required>
                  </fieldset>

                  <fieldset>
                    <div class="form-group row">
                      <label for="product_sku" class="col-sm-3 col-form-label text-right">Product Sku</label>
                      <div class="col-sm-6">
                    <input type="checkbox" name="product_sku" value="400ml">
                    <label for="400ml"> 400ml</label>&nbsp&nbsp
                    <input type="checkbox" name="product_sku" value="500ml">
                    <label for="500ml"> 500ml</label><br>
                  </fieldset>
                  <fieldset>

                    <div class="form-group row">
                      <label for="total_consume_amount" class="col-sm-3 col-form-label text-right">Total Consume Amount</label>
                      <div class="col-sm-6">
                    
                    <input type="number" name="total_consume_amount" class="form-control" placeholder="Total Consume Ammount...">&nbsp&nbsp&nbsp&nbsp
                
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
 

@endsection

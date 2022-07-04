@extends('layouts.user-latouts')
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 mx-auto">
            <div class="">
              <form action="{{ route('update_stock',$stock->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                  <fieldset>
                    <legend>Product</legend>
                    <select name="product_id" class="form-control selectpicker" data-live-search="true" aria-label="Default select example" required="">
                      <option value="">Select Product</option>
                      @foreach($products as $info)
                      <option value="{{ $info->id }}" {{ ( $info->id == $stock->product_id) ? 'selected' : '' }}>{{ $info->name }}</option>
                      @endforeach
                    </select>
                  </fieldset>
                </div>
                <div class="field">
                  <fieldset>
                    <legend>Input Date</legend>
                    <input type="date" name="input_date" value="{{ date('Y-m-d') }}" class="form-control" required="" value="{{$stock->input_date}}">
                  </fieldset>
                </div>
                <div class="field">
                  <fieldset>
                    <legend>Stock Status</legend>
                    <div class="form-check-inline">
                      <legend class="form-check-label" for="radio1">
                        <input type="radio" name="status" class="form-check-input" id="radio1" name="optradio" value="1" {{ ( $stock->status == true) ? 'checked' : '' }}>In
                      </legend>
                    </div>
                    <div class="form-check-inline">
                      <legend class="form-check-label" for="radio2">
                        <input type="radio" name="status" class="form-check-input" id="radio2" name="optradio" value="0" {{ ( $stock->status == false) ? 'checked' : '' }}>Out
                      </legend>
                    </div>
                  </fieldset>
                </div>
                
                <div class="field">
                  <fieldset>
                    <legend>Amount</legend>
                    <input type="number" name="amount" class="form-control" min="1" value="{{$stock->amount}}">
                  </fieldset>
                </div>
                <div class="submit-btn">
                  <center>
                  <button type="submit" style="padding-left: 4rem; padding-right: 4rem;" class="btn btn-primary submit-Btn">Submit</button>
                  </center>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection

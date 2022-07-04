        @extends('layouts.admin-layouts')
        @section('content')  
        <div class="container">
            @if (isset($message))
                <div class="alert alert-success-polar alert-dismissible">
                  {{ $message }}
                </div>
            @endif
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header">Assign Market</div>

        <div class="card-body">
        <form method="POST" action="{{ route('admin.save_assign_market') }}">
        @csrf

        <div class="form-group row">
        <label for="district_name" class="col-md-4 col-form-label text-md-right">District name</label>

        <div class="col-md-6">
        <select name="district_name" id="district_name" class="form-control selectpicker"  data-live-search="true" aria-label="Default select example">
        <option value="Dhaka">Dhaka</option>
        <option  value="Chittagong">Chittagong</option>
        <option value="Barisal">Barisal</option>                     
        <option value="khulna">khulna</option>                     
        <option value="Tangail">Tangail</option>                     
        </select> 

        </div>
        </div>
        <div class="form-group row">


        <label for="market_name" class="col-md-4 col-form-label text-md-right">Market Name</label>
        <div class="col-sm-6">

        <select name="market_name" id='market_name' class="form-control">

        </select>


        </div>
        </div>

        <div class="form-group row">
       
            <label for="market_name" class="col-md-4 col-form-label text-md-right">User ID</label>

        <div class="col-md-6">
        <input id="user_id" type="text" class="form-control" name="user_id" required autocomplete="user_id">
        </div>
        </div>

        <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary submit-Btn">
        {{ __('Save') }}
        </button>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>


        <script> 

        $(document).ready(function(){

        $("#district_name").change(function () {
        var query= $(this).val(); 

        var url = '{{ route("admin.market_search",":query") }}';
        url = url.replace(':query', query );
        // console.log(end);
        // var firstDropVal = $('#').val();
        $.ajax({
        url:url,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data)
        {

        $.each(data, function(key, value) {   
        $('#market_name').append('<option value="'+ value.market_name +'">'+ value.market_name +'</option>') 
        });

        }
        })
        });

        });



        </script>
        @endsection

@extends('layouts.admin-layouts')

@section('content')
<div class="container">




{{ __('You are logged in! ADMIN') }}
</div>
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

            <div class="row justify-content" style="padding: 0 2rem 2rem 2rem;">
            <div class="col-md-12">
            <div class="card table-responsive">
            <div class="card-body">
            <table  class="dashtable-1 table-bordered table-hover  text-center" >

            <tr>
            <th>District Name</th>
            <th>Market Name</th>
            <th>Shop_Name</th>
            <th>400ml</th>
            <th>500ml</th>
            <th>Total</th>

            </tr>
            <tbody>
            @foreach($area as $info) 
            <tr>
            <td class="width-fix-title">

            {{$info->district_name}}
            </td>
            <td class="width-fix-title">

            {{$info->market_name}}
            </td>
            <td class="width-fix-title">

            {{$info->shop_name}}
            </td>
            <td class="width-fix-title">

            {{$info->product_sku_400ml}}
            </td>
            <td class="width-fix-title">

            {{$info->product_sku_500ml}}
            </td>

            <td class="width-fix-title">

            {{$info->product_sku_400ml + $info->product_sku_500ml}}
            </td>
            @endforeach            
            </table>

            <p style="text-align: right;">
            <b>Total
            {{$total}}</br>
            <a href="display_member_info" class="link-primary">More Data</a>
            </b>
            </p>

            </div>
            </div>
            </div>
            </div>





            <div class="row justify-content" style="padding: 0 2rem 2rem 2rem;">
            <div class="col-md-6">
            <div class="card table-responsive" style="height: 17rem;">

            <div class="card-body">
            <table  class="dashtable-2 table-bordered table-hover " >

            <tr>

            <th rowspan = "2" style="padding: 0 0 0 1rem;">Market Name</th>
            <th colspan = "2" style="padding: 0 0 0 1rem;" >Total Sale</th>
            </tr>

            <tr>

            <th style="padding: 0 0 0 1rem;">100ml</th>
            <th style="padding: 0 0 0 1rem;">200ml</th>
            </tr>
            <tr>


            </tr>
            <tr>
            @foreach($area as $info) 

            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->market_name}}

            </td>

            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->product_sku_400ml}}

            </td> 
            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->product_sku_500ml}}

            </td>
            </tr>        
            @endforeach
            </table>
            </div>
            </div>
            </div>



            <div class="col">
            <div class="card table-responsive" style="height: 17rem;">
            <div class="card-body">
            <table  class="dashtable-3 table-bordered table-hover " >

            <tr>

            <th  rowspan = "2" style="padding: 0 0 0 1rem;">Market Name</th>
            <th  rowspan = "2" style="padding: 0 0 0 1rem;">Shop_Name</th>
            <th  colspan = "2" style="padding: 0 0 0 1rem;">Total Sale</th>
            </tr>

            <tr>

            <th style="padding: 0 0 0 1rem;">100ml</th>
            <th style="padding: 0 0 0 1rem;">200ml</th>
            </tr>
            <tr>
            @foreach($area as $info) 

            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->market_name}}

            </td>

            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->shop_name}}

            </td>
            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->product_sku_400ml}}

            </td>
            <td class="width-fix-title" style="padding: 0 0 0 1rem;">

            {{$info->product_sku_500ml}}

            </td>

            </tr>
            @endforeach


            </table>
            </div>
            </div>
            </div>
            </div>



<style>


.dashtable-1,.dashtable-2,.dashtable-3
{
margin-left: auto;
margin-right: auto;
width: 100%;
padding:2%;

}


</style> 
@endsection

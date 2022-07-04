<?php

namespace App\Http\Controllers\User;

use App\LogActivity;
use App\User;
use App\Area;
use App\MemberInfo;
use App\Product;
use App\Stock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use File;
use Storage;

class UserController extends Controller
{
    public function index(){
      return view('user.index');
    }
    public function save_member_info(Request $request)
    {
      $memberinfo = new MemberInfo(); 
      
      $memberinfo->district_name = $request->input('district_name');
      $memberinfo->market_name = $request->input('market_name');
      $memberinfo->shop_name = $request->input('shop_name');
      $memberinfo->customer_name = $request->input('customer_name');
      $memberinfo->phone = $request->input('phone');
      $memberinfo->product_sku = $request->input('product_sku');
      $memberinfo->total_consume_amount = $request->input('total_consume_amount');
      $memberinfo->save();
        // return redirect('user/dashboard'); 
        return redirect('user/dashboard')->with('message', 'for your feedback.');
     }
    public function show_select_data(){
      $area = Area::all();
      return view('user.index', compact('area'));
    }
    public function display(){
      $memberInfo = MemberInfo::all();
      return view('user.display', compact('memberInfo'));
    }
    public function edit_memberinfo($id){
      $memberInfo = MemberInfo::find($id);
      $area = Area::all();
      return view('user.edit_memberinfo', compact('memberInfo','area'));
    }
    public function update_memberinfo(Request $request,$id){
      $memberinfo =MemberInfo::find($id);

       
      $memberinfo->district_name = $request->input('district_name');
      $memberinfo->market_name = $request->input('market_name');
      $memberinfo->shop_name = $request->input('shop_name');
      $memberinfo->customer_name = $request->input('customer_name');
      $memberinfo->phone = $request->input('phone');
      $memberinfo->product_sku = $request->input('product_sku');
      $memberinfo->total_consume_amount = $request->input('total_consume_amount');
      $memberinfo->save();
      return redirect('user/display');
    }

    //stock controls

    public function add_stock(){
      $products = Product::all();
      return view('user.add_stock', compact('products'));
    }
    public function save_stock(Request $request)
    {
      $stock = new Stock(); 
      
      $stock->product_id = $request->input('product_id');
      $stock->input_date = $request->input('input_date');
      $stock->status = $request->input('status');
      $stock->amount = $request->input('amount');
      $stock->save();
      return Redirect::route('user.add_stock')->with('message', 'stock updated successful.');
      
    }
    public function display_stock(){
      $stocks = Stock::with('product')->OrderBy('product_id')
                   ->get();
      return view('user.displayStock', compact('stocks'));
    }
    public function edit_stock($id){
      $stock = Stock::find($id);
      $products = Product::all();
      return view('user.edit_stock', compact('stock','products'));
    }
    public function update_stock(Request $request,$id){
      $stock = Stock::find($id);

      $stock->product_id = $request->input('product_id');
      $stock->input_date = $request->input('input_date');
      $stock->status = $request->input('status');
      $stock->amount = $request->input('amount');
      $stock->save();
      return Redirect::route('edit_stock', ['id' => $id]);
    }
}


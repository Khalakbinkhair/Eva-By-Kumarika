@extends('layouts.user-latouts')
@section('content')
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Input Date</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach($stocks as $info)
                <tr>
                  <td class="width-fix-title">
                    {{$info->product->name}}
                  </td>
                  <td class="width-fix-title">
                    {{date('Y-m-d', strtotime($info->input_date))}}
                  </td>
                  <td class="width-fix-title">
                    @if($info->status)
                    In
                    @else
                    Out
                    @endif
                    
                  </td>
                  <td class="width-fix-title">
                    {{$info->amount}}
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-md-6">
                        <a class="btn btn-primary" href="{{ route('edit_stock',$info['id'])}}">
                          <i class="fa fa-edit fa-lg"></i>
                        </a>
                      </div>
                      <div class="col-md-6">

                    </div>
                  </div>
                  </td>
                </tr>
                @endforeach
                <tr>
                  <th>Product Name</th>
                  <th>Input Date</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
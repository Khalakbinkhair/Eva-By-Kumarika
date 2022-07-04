<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap-datetimepicker.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


  
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar">
    <div class="card" style="height: 40rem;">
      <div class="image">
        <center>
          <a href="{{URL::to('/admin/dashboard')}}" class="brand-link text-center">
            <img src=" {{asset('frontend/image/logo/Eva-logo.png')}}"  class="img-fluid">
          </a>
        </center>
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <div class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Admin Dashboard
              </p>
            
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Manage User <i class="right fa fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{ route('register_user')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.assign_market')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Assing Market</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.display_user')}}" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>User List</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
              Manage Customer <i class="right fa fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.add_memberinfo')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Add Customer</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ route('display_member_info')}}" class="nav-link">
                  <!-- <i class="fa fa-circle-o nav-icon"></i> -->
                  <i class="nav-icon fa fa-table"></i>
                  <p>Customer List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Area Information
                <i class="right fa fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add_Area')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Add Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('displayArea')}}" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>Area List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Stock
                <i class="right fa fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.add_stock')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Update Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.display_stock')}}" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>Stock List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
        <div class="fatmonk-image " >
         

        <center>
          <a href="https://fatmonkltd.com/" target="_blank">
          <img style="width: 10rem;" src=" {{asset('admin/images/site-logo/fatmonk logo 21-01.png')}}" class="fatmonk-img img-fluid">
        </a>

        </center>
   
    </div>
  </aside>
  <div class="content-wrapper">
    @yield('content')
  </div>
</div>
  <footer class="main-footer">
    <strong> Copyright &copy;2022 design & development by <a  style="color: #dc143c" href="https://fatmonkltd.com/" target="_blank">fatmonkltd</a></strong>
  </footer>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>



  <script type="text/javascript">
  $(function () {
    $('#datetimepicker2').datetimepicker();
  });
</script>
    <script type="text/javascript">
        function checkdelete()
        {
            return confirm("Are You Sure?");
        }
    </script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>

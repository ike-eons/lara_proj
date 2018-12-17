
@include('layouts.header')
  <!-- Navbar -->
  @include('layouts.topnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
    <!-- Sidebar -->
    @include('layouts.sidebar')
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
    @include('layouts.breadcrumb')
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  

    @include('layouts.footer')

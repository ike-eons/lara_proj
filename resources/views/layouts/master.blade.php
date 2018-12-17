
@include('layouts.header')

<div class="wrapper" id="app">
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
    <div class="content">
      <div class="container-fluid">
        <!-- @yield('content') -->

        <!-- display component content here -->
        <router-view></router-view>
      </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    @include('layouts.footer')

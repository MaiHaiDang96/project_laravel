<!DOCTYPE html>
<html lang="en">
   <head>
      @include('admin.blocks.header')
      @stack('css')
      <!-- Fontawesome Icon -->
      <link rel="stylesheet" href="{{ asset('administrator/icon/css/all.min.css') }}">
      <script src="{{ asset('administrator/icon/js/all.min.js') }}"></script>

      <!-- Datetimepicker Popperjs -->
      <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
      <!-- Datetimepicker Tempus Dominus JavaScript -->
      <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js" crossorigin="anonymous"></script>      
      <!-- CKeditor -->
      <script src="{{ asset('administrator/ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('administrator/ckeditor/config.js') }}"></script>

   </head>
   <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
         @include('admin.blocks.nav')
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         @include('admin.blocks.sidebar')

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('admin.blocks.content-header')

            <!-- Main content -->
            <section class="content">
               <!-- Default box -->
               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                     </ul>
                  </div>
               @endif

               @if(Session::has('success'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
               @endif
               @if(Session::has('error'))
                  <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
               @endif

               @yield('content')

            </section>
            <!-- /.content -->
         </div>

         <!-- /.content-wrapper -->
         @include('admin.blocks.footer')

         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>

      <!-- ./wrapper -->

      @include('admin.blocks.foot')
      
      @stack('js')

      @stack('jshand')
      <script src="{{ asset('jquery.js') }}"></script>

   </body>
</html>
@extends('admin.master')

@section('module', 'Support Question')
@section('action', 'Manage')

@push('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush



@push('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('administrator/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

@endpush

@push('jshand')
{{-- <script type='text/javascript'>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script> --}}


@endpush

@section('content')

<div class="card">
  {{-- <div class="card-header">
     <h3 class="card-title">DataTable with minimal features & hover style</h3>
  </div> --}}
  <!-- /.card-header -->
  <div class="card-body">
    <a class="btn btn-app" href="{{ route('admin.support.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new @yield('module')</h6>
    </a>
    <table id="example1" class="table table-bordered table-hover my-2">
      <thead>
        <tr>
          <th class="col-md-1">ID</th>
          <th class="col-md-1">Category</th>
          <th class="col-md-1">Title</th>
          <th class="col-md-2">Question</th>
          <th class="col-md-1">Image</th>
          <th class="col-md-1">Video</th>
          <th class="col-md-3">Answer</th>
          <th class="col-md-1">Edit</th>
          <th class="col-md-1">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($supports as $item)
        @if( $item->answer != '' ) 
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->cateName }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->question }}</td>
          <td><img src="{{ $item->image }}" alt="" width="100px" height="100px"></td>
          <td><video src="{{ $item->video }}" alt="" width="100px" height="100px"></td>
          <td>{{ $item->answer }}</td>
          <td><a href="{{ route('admin.support.edit', ['id' => $item->id]) }}">Edit</a></td>
          <td><a href="{{ route('admin.support.delete', ['id' => $item->id]) }}">Delete</a></td>
        </tr>@endif
        @endforeach
      </tbody>
    </table>

    <div class="row"><h2>User Question</h2></div>

    <table id="example1" class="table table-bordered table-hover my-2">
      <thead>
        <tr>
          <th class="col-md-1">ID</th>
          <th class="col-md-1">Category</th>
          <th class="col-md-1">Title</th>
          <th class="col-md-2">Question</th>
          <th class="col-md-1">Image</th>
          <th class="col-md-1">Video</th>
          <th class="col-md-3">Answer</th>
          <th class="col-md-1">Edit</th>
          <th class="col-md-1">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($supports as $item)
        @if( $item->answer == '' ) 
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->cateName }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->question }}</td>
          <td><img src="{{ $item->image }}" alt="" width="100px" height="100px"></td>
          <td><video src="{{ $item->video }}" alt="" width="100px" height="100px"></td>
          <td>{{ $item->answer }}</td>
          <td><a href="{{ route('admin.support.edit', ['id' => $item->id]) }}">Edit</a></td>
          <td><a href="{{ route('admin.support.delete', ['id' => $item->id]) }}">Delete</a></td>
        </tr>@endif
        @endforeach
      </tbody>
    </table>

@endsection
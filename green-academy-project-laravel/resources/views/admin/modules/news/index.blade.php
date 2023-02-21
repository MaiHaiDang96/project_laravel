@extends('admin.master')

@section('module', 'News')
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

{{-- @push('jshand')
<script type='text/javascript'>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush --}}

@section('content')
<div class="card">
  {{-- <div class="card-header">
     <h3 class="card-title">DataTable with minimal features & hover style</h3>
  </div> --}}
  <!-- /.card-header -->
  <div class="card-body">
    <a class="btn btn-app" href="{{ route('admin.news.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new @yield('module')</h6>
    </a>
    <table id="example1" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="col-md-1">ID</th>
          <th class="col-md-2">Title</th>
          <th class="col-md-auto">Content</th>
          <th class="col-md-1">Image</th>
          <th class="col-md-1">Video</th>
          <th class="col-md-1">Edit</th>
          <th class="col-md-1">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($newses as $a)
        <tr>
          <td>{{ $a->id }}</td>
          <td>{{ $a->name }}</td>
          <td>{{ $a->content }}</td>
          <td><img src="{{ $a->image }}" alt="NULL" width="100px" height="100px"></td>
          <td><video src="{{ $a->video }}" alt="Not found" width="100px" height="100px"></td>
          <td><a href="{{ route('admin.news.edit', ['id' => $a->id]) }}">Edit</a></td>
          <td><a href="{{ route('admin.news.delete', ['id' => $a->id]) }}">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection
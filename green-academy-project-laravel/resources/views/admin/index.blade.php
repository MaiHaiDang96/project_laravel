@extends('admin.master')

@section('module', 'Database')
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


@section('content')
<div class="card">
  <div class="row mx-auto">
    @if(Auth::check())
    <h1>{{ Auth::user()->username }} is online now!</h1>
    @endif 
  </div>
  <!-- /.card-header -->
  <div class="row justify-content-around">
    <a class="btn btn-app col-3" href="{{ route('admin.bill.create') }}">
      <i class="fas fa-edit"></i> <h6>Cart</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.cart.create') }}">
      <i class="fas fa-edit"></i> <h6>Store</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.category-forum.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new category forum</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.class.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new class</h6>
    </a>

    {{-- <a class="btn btn-app col-3" href="{{ route('admin.comment.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new comment</h6>
    </a> --}}
    
    <a class="btn btn-app col-3" href="{{ route('admin.history-purchase.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new history purchase</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.item.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new item</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.payment.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new pay method</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.post-forum.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new post forum</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.skill.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new skill</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.user.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new user</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.news.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new news</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.category-support.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new category support</h6>
    </a>

    <a class="btn btn-app col-3" href="{{ route('admin.support.create') }}">
      <i class="fas fa-edit"></i> <h6>Create new support questions</h6>
    </a>


    {{-- <a class="btn btn-app col-3 disabled" href="">
      <i class="fas fa-edit"></i> <h6>Coming...</h6>
    </a> --}}
    
  </div>
@endsection
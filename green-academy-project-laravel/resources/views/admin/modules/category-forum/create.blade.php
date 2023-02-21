@extends('admin.master')

@section('module', 'Category Forum')
@section('action', 'Create')

@section('content')
<div class="container">
    <!-- form start -->
    <form action="{{ route ('admin.category-forum.store') }}" method="post">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Category-Forum-Create</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Forum</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{ old('name') }}">
                </div>        
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.category-forum.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
            <!-- /.card-footer-->
        </div>
    </form>
</div>
 <!-- /.card -->
 
 @endsection
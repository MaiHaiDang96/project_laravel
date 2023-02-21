@extends('admin.master')

@section('module', 'Category Support')
@section('action', 'Edit')

@section('content')
<div class="container col-md-4 card">
    <form action="{{ route ('admin.category-support.update', ['id'=> $category_support->id]) }}" method="post">
        @csrf
        <div class="card-header">
            <h3 class="card-title">Category support edit</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category support</label>
                <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{ old('name', $category_support->name) }}">
            </div>        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route ('admin.category-support.index') }}"><h5>Cancel</h5></a>
        </div>
        <!-- /.card-footer-->
    </form>
</div>
 <!-- /.card -->
 
 @endsection
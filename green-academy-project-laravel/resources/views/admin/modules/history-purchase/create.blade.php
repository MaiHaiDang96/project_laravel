@extends('admin.master')

@section('module', 'History Purchase')
@section('action', 'Create')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Create new history purchase</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.history-purchase.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- /.card-header -->
            <div class="card-body">
                <!-- User -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="form-label">Add User ID</label>
                    <select class="form-control">
                        <option value="1">user_id 1</option>
                        <option value="2">user_id 2</option>
                        <option value="3">user_id 3</option>
                        <option value="4">user_id 4</option>
                        <option value="5">user_id 5</option>
                    </select>
                </div>
                <!-- Bill -->
                <div class="form-group">
                    <label for="" class="form-label">History purchase</label>
                    <div><input type="checkbox" name="bill_id" value="1"> bill detail 1</div>
                    <div><input type="checkbox" name="bill_id" value="2"> bill detail 2</div>
                    <div><input type="checkbox" name="bill_id" value="3"> bill detail 3</div>        
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <a href="{{ route ('admin.history-purchase.index') }}"><h5>Back to list @yield('module')</h5></a>
    </div>
    <!-- /.card -->
</div> 
 @endsection
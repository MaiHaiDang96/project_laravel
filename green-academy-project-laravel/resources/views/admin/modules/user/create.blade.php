@extends('admin.master')

@section('module', 'User')
@section('action', 'Create')

@section('content')
<div class="container">

    <form action="{{ route ('admin.user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Enter your information</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter email" value="{{ old('username') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
                </div>
                <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkterm" name="checkterm">
                        <label class="custom-control-label" for="checkterm">I agree to the <a href="#">terms of service.</a>.</label>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.user.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
        </div>
    </form>
    <!-- /.card -->
</div> 
 @endsection
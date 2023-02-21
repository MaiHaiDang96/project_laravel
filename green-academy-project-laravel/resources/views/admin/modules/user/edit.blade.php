@extends('admin.master')

@section('module', 'User')
@section('action', 'Edit')

@section('content')
<div class="card">
    <form action="{{ route ('admin.user.update', ['id'=> $user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" name="username" class="form-control" placeholder="Enter email" value="{{ old('name', $user->username) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Current Password</label>
                <input type="password" name="current_password" class="form-control" placeholder="Password">
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
                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('name', $user->email) }}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route ('admin.user.index') }}"><h5>Cancel</h5></a>
        </div>
    </form>
</div>
 <!-- /.card -->
 
 @endsection
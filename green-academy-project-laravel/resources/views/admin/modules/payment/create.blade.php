@extends('admin.master')

@section('module', 'Payment')
@section('action', 'Create')

@section('content')
<div class="container">
    <form action="{{ route ('admin.payment.store') }}" method="post">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create new payment method</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pay Method</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter payment method name" value="{{ old('name') }}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.payment.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
        </div>
            <!-- /.card-footer-->
    </form>

</div>
 <!-- /.card -->
 
 @endsection
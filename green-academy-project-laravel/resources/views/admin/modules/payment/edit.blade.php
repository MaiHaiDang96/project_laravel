@extends('admin.master')

@section('module', 'Payment')
@section('action', 'Edit')

@section('content')
<div class="container">
    <form action="{{ route ('admin.payment.update', ['id'=> $payment->id]) }}" method="post">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Payment Method Edit</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Payment Method</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter payment method name" value="{{ old('name', $payment->name) }}">
                </div>        
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!-- /.card-footer-->
    </form>
</div>
 <!-- /.card -->
 
 @endsection
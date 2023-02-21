@extends('admin.master')

@section('module', 'Bill')
@section('action', 'Edit')

@section('content')
<div class="card">
    <form action="{{ route ('admin.bill.update', ['id'=> $bill->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header card-primary">
            <h2 class="card-title">Edit bill detail item</h2>
        </div>
        <div class="card-body">
            <!-- User -->
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="form-label">Add by User ID</label>
                <select class="form-control">
                    <option name="user" value="1">user_id 1</option>
                    <option name="user" value="2">user_id 2</option>
                    <option name="user" value="3">user_id 3</option>
                    <option name="user" value="4">user_id 4</option>
                    <option name="user" value="5">user_id 5</option>
                </select>
            </div>
            <!-- Bill detail -->
            <div class="form-group">
                <label for="" class="form-label">Bill detail ID</label>
                    <div><input type="checkbox" name="billdetail" value="1"> bill detail 1</div>
                    <div><input type="checkbox" name="billdetail" value="2"> bill detail 2</div>
                    <div><input type="checkbox" name="billdetail" value="3"> bill detail 3</div>        
            </div>
            <!-- Money -->
            <div class="form-group">
                <label for="exampleInputEmail1">Total money</label>
                <input type="number" name="totalmoney" class="form-control" placeholder="Enter total money" value="{{ old('totalmoney', $bill->totalmoney) }}">
            </div>
            <!-- Pay Method -->
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="form-label">Pay Method</label>
                <select class="form-control">
                    <option name="paymethod" value="1">pay_method_id 1</option>
                    <option name="paymethod" value="2">pay_method_id 2</option>
                    <option name="paymethod" value="3">pay_method_id 3</option>
                    <option name="paymethod" value="4">pay_method_id 4</option>
                    <option name="paymethod" value="5">pay_method_id 5</option>
                </select>
            </div>
            <!-- Pay status -->
            <div class="form-group">
                <label for="exampleInputEmail1">Pay status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paystatus" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Paid</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="paystatus" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Unpaid</label>
                  </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
 <!-- /.card -->
 
 @endsection
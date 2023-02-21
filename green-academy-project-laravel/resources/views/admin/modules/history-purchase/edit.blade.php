@extends('admin.master')

@section('module', 'History Purchase')
@section('action', 'Edit')

@section('content')
<div class="card">
    <form action="{{ route ('admin.history-purchase.update', ['id'=> $history_purchase->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header card-primary">
            <h2 class="card-title">Edit history purchase</h2>
        </div>
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
</div>
 <!-- /.card -->
 
 @endsection
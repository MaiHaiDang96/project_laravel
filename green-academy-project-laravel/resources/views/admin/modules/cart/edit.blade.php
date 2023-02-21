@extends('admin.master')

@section('module', 'Cart')
@section('action', 'Edit')
@push('js')
<script src="{{ asset('jquery.js') }}"></script>
@endpush

@push('jshand')
<script>
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    
    $("select[name='item']").change(function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "{{ route('getPrice') }}",
            data: {iditem: id},
            dataType: "html",
            success: function (result) {
                // $('div#price').html(result)
                $("input#price").val(result);

            }
        });
    })
    $("select[name='item']").change(function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "{{ route('getDiscount') }}",
            data: {iditem: id},
            dataType: "html",
            success: function (result) {
                // $('div#discount').html(result)
                $("input#discount").val(result);

            }
        });
    })
});

function calculate() {
    // var price = +document.getElementById("price").innerHTML;
    // var discount = +document.getElementById("discount").innerHTML;
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;
    var discount = document.getElementById("discount").value;

    var money = (price * (1-(discount/100))) * quantity;
    console.log(price);    console.log(discount);    console.log(quantity);
    console.log(money);
    $("input#money").val(money);
    // document.getElementById("money").innerHTML = money;
}
</script>
@endpush
@section('content')
<div class="container">
    <form action="{{ route ('admin.cart.update', ['id'=> $cart->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Edit cart item</h2>
            </div>
            <div class="card-body">
                <!-- User -->
                <div class="form-group">
                    <label for="">Username</label>
                    <select class="custom-select" id="user" name="user">
                        <option value="">-----------</option>
                        {{-- @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->username}}</option>
                        @endforeach --}}
                    </select>
                </div>
                <!-- Item -->
                <div class="form-group">
                    <label for="">Item list</label>
                    <select class="custom-select" id="item" name="item">
                        <option value="">Choose item add to cart</option>
                        {{-- @foreach ($items as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="row">
                    <!-- Price Item -->
                    <div class="col-3 form-group">
                        <label for="">Item price</label>
                        <input name="price" id="price" class="form-control" >
                        {{-- <div id="price"></div> --}}
                    </div>
                    <!-- Discount -->
                    <div class="col-3 form-group">
                        <label for="">Discount</label>
                        <input name="discount" id="discount" class="form-control" >
                        {{-- <div id="discount"></div> --}}
                    </div>
                    <!-- Quantity Item -->
                    <div class="col-2 form-group">
                        <label for="">Item quantity</label>
                        <input type="number" id="quantity" class="form-control">
                    </div>
                    <div class="col-1 form-group">
                        <label for="">Click here</label>
                        <button type="button" onclick="calculate()">Calculate</button>
                    </div>
                    <!-- Money Item -->
                    <div class="col-3 form-group">
                        <label for="">Bill for Item</label>
                        <input name="money" id="money" class="form-control" >
                    </div>
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
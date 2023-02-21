@extends('admin.master')

@section('module', 'Bill')
@section('action', 'Create')

@push('jshand')
<script>
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    
    $("select[name='user']").change(function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "{{ route('getBillDetail') }}",
            data: {iduser: id},
            dataType: "html",
            success: function (result) {
                $('tbody#userBill').html(result)
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
        <!-- form start -->
        <form action="{{ route ('admin.bill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">Create new bill</h2>
                </div>
                <div class="card-body">
                    <!-- User -->
                    <div class="form-group">
                        <label for="">Username</label>
                        <select class="custom-select" id="user" name="user">
                            <option value="">-----------</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->username}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Item 1-->
                    {{-- <div class="form-group">
                        <label for="">Bill list</label>
                        <table border="1px">
                            <thead>
                                <tr>
                                    <td class="col-2">Bill Detail ID</td>
                                    <td class="col-2">Item Name</td>
                                    <td class="col-2">Money</td>
                                    <td class="col-2">Datetime</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bill_details as $item)
                                <tr>
                                    <td class="col-2"><input class="form-check-input" type="checkbox" value="{{$item->id}}" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">{{$item->id}}</label></td>
                                    <td class="col-2"><label class="form-check-label" for="flexCheckDefault">{{$item->itemName}}</label></td>
                                    <td class="col-2"><label class="form-check-label" for="flexCheckDefault">{{$item->money}}</label></td>
                                    <td class="col-2"><label class="form-check-label" for="flexCheckDefault">{{$item->created_at}}</label></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                    <!-- Item 2 -->
                    <div class="form-group">
                        <label for="">Bill list</label>
                        <table border="1px">
                            <thead>
                                <tr>
                                    <td class="col-2">Bill Detail ID</td>
                                    <td class="col-2">Item Name</td>
                                    <td class="col-2">Money</td>
                                    <td class="col-2">Datetime</td>
                                </tr>
                            </thead>
                            <tbody id="userBill">
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        {{-- <div class="col-1 form-group">
                            <label for="">Click here</label>
                            <button type="button" onclick="calculate()">Calculate</button>
                        </div> --}}
                        <!-- Money Item -->
                        <div class="col-3 form-group">
                            <label for="">Bill for Item</label>
                            <input name="money" id="money" class="form-control" >
                        </div>
                    </div>
                </div>
                <!-- Pay status -->
                {{-- <div class="form-group">
                    <label for="exampleInputEmail1">Pay status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paystatus" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Paid</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="paystatus" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Unpaid</label>
                      </div>
                </div> --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <a href="{{ route ('admin.bill.index') }}"><h5>Back to list @yield('module')</h5></a>
    </div>
    <!-- /.card -->
</div> 
 @endsection
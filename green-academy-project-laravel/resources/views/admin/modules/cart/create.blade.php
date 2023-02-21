@extends('admin.master')

@section('module', 'Item')
@section('action', 'Store')

@push('js')
<script src="{{ asset('jquery.js') }}"></script>
@endpush

@push('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('administrator/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
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

$(document).ready(function () {
        var price = document.getElementById('item_price').value;
        var discount = document.getElementById('item_discount').value;
        var final_price = (price * (1-(discount/100)));
        console.log(price);console.log(discount);console.log(final_price);
        $('#final_price').val(final_price);
    }
);

$("input#quantity").change(function (event) {
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("item_price").value;
    var discount = document.getElementById("item_discount").value;
    var itemName = document.getElementById("item_name").innerHTML;
    var money = (price * (1-(discount/100))) * quantity;
    $("td#itemMoney").val(money);
    document.getElementById("itemName").innerHTML = itemName;
    console.log(itemName);
    console.log(price);
    console.log(discount);
    console.log(quantity);
    console.log(money);
});

function addBillDetail() {

};
</script>
@endpush

@push('css')
<style>
    .img .item-img {
        position: relative;
        width: 100%;
        height: auto;
    }

    .item-discount {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100px;
        height: 30px;
        background-color: rgb(255, 252, 55);
        border: 1px solid #73AD21;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Purchase Item</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- /.card-header -->
            <div class="card-body">
                <!-- User -->
                @if(Auth::check())
                <h4>{{ Auth::user()->username }}</h4>
                <button type="submit" class="btn btn-primary">Your Cart</button>
                @endif
                <!-- Item -->
                <div class="row">
                    @foreach ($items as $item)
                    <div class="card col-4">
                        <div style="width:100%; text-align:center" class="item-img">
                            <img src="{{ $item->image }}" alt="" width="100px" height="100px">
                        </div>
                        <div class="card-body" style="width:100%; text-align:center">
                            <h4 id="item_name">{{$item->name}}</h4>
                            <p class="card-text">{{ $item->description }}</p>
                            <div style="width:100%; height:50px">
                                @if( $item->discount === 0) <div class="py-3"><?php echo number_format($item->price, 2, ",", ".") . " VND"?></div>
                                @else
                                <div class="item-discount">
                                    Discount <span id="item_discount">{{$item->discount}}</span> %
                                </div>
                                <div>
                                    <del id="item_price"><?php echo number_format($item->price, 2, ",", ".")." VND"?></del>
                                    <?php
                                    $first_price = $item->price;
                                    $discount = $item->discount;
                                    $final_price = $first_price * ((100-$discount)/100);
                                    echo "<h5 style='color:red'><b><i>" . number_format($final_price, 2, ",", ".") . " VND</i></b></h5>"
                                    ?>
                                </div>
                                @endif
                            </div>
                            <input style="width:100%; text-align:center" type="number" id="quantity" class="form-control my-2" placeholder="Quantity">
                            <button class="btn btn-primary" onclick="addBillDetail()">Purchase</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Show Item list -->
                {{-- <div class="row">
                    <!-- Price Item -->
                    <div class="col-3 form-group">
                        <label for="">Item price</label>
                        <input name="price" id="price" class="form-control" >
                    </div>
                    <!-- Discount -->
                    <div class="col-3 form-group">
                        <label for="">Discount</label>
                        <input name="discount" id="discount" class="form-control" >
                    </div>
                    <!-- Quantity Item -->
                    <div class="col-3 form-group">
                        <label for="">Item quantity</label>
                        <input type="number" id="show_quantity" class="form-control">
                    </div>
                    <!-- Money Item -->
                    <div class="col-3 form-group">
                        <label for="">Bill for Item</label>
                        <input name="money" id="money" class="form-control" >
                    </div>
                </div> --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{-- <div><a href="{{ route ('admin.cart.index') }}"><h5>Back to list @yield('module')</h5></a></div> --}}
            </div>
        </form>
        
    </div>
    <!-- /.card -->
</div> 
 @endsection
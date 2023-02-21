@extends('admin.master')

@section('module', 'Item')
@section('action', 'Create')
@push('js')
<script src="{{ asset('jquery.js') }}"></script>
@endpush

@push('jshand')

<script>
function setClassImage(input) {
  let $imgBox = $(input).closest('dd').find('.img_box');
  var reader = new FileReader();
  reader.onload = function (e) {
      $imgBox.html( $('<img>').attr('src', e.target.result) );
      let fileName = input.files[0].name;
      $(input).closest('dd').find(".folder_box img").attr('src',e.target.result)
      $(input).closest('dd').find(".folder_box img").attr('data-file',fileName)
      $(input).closest('dd').find('.info').html(fileName);
      $("#image_main_file_name").val(fileName);
  };
  reader.readAsDataURL(input.files[0]);
}
</script>
@endpush
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Create new Item</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.item.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Name -->
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Item name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter item" value="{{ old('name') }}">
                    </div>
                    <!-- Class -->
                    <div class="col-6 form-group">
                        <label for="">For Class</label>
                        <select class="custom-select" id="class" name="class">
                            <option value="All">For Class</option>
                            @foreach ($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label for="itm" class="form-label">Description item</label>
                    <textarea class="form-control" id="itm" name="description" rows="3" placeholder="Enter description" value="{{ old('description') }}"></textarea>
                    <script>CKEDITOR.replace('itm');</script>
                </div>
                <div class="row form-group">
                    <!-- Image -->
                    <div class="col-4 justify-content-between">
                        <label for="">Image input</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">Browse</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" onchange="setClassImage(this)" id="exampleInputFile1">
                                <input class="custom-file-label" for="exampleInputFile1" id="image_main_file_name">
                            </div> 
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="col-4 justify-content-between">
                        <label for="">Item price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('price') }}">
                    </div>
                    <!-- Discount -->
                    <div class="col-4 justify-content-between">
                        <label for="">Item discount</label>
                        <input type="number" name="discount" class="form-control" placeholder="Enter discount value" value="0">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.item.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
        </form> 
    </div>
    <!-- /.card -->
</div> 
 @endsection
@extends('admin.master')

@section('module', 'Item')
@section('action', 'Edit')
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
  const [file] = imgInp.files
  if (file) {
    img.src = URL.createObjectURL(file)
  }
};
</script>
@endpush

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Edit item</h2>
        </div>
        <form action="{{ route ('admin.item.update', ['id'=> $item->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <!-- Name -->
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Item name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter item" value="{{ old('name', $item->name) }}"
                        >
                    </div>
                    <!-- Class -->
                    <div class="col-6 form-group">
                        <label for="">For Class</label>
                        <select class="custom-select" id="class" name="class">
                            @foreach ($classes as $a)
                            <option value="{{ $a->id }}" {{ $a->id == $item->class ? 'selected' : '' }}>{{$a->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label for="itm" class="form-label">Description item</label>
                    <textarea class="form-control" id="itm" name="description" rows="3" placeholder="Enter description">{{ old('name', $item->description) }}</textarea>
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
                                <input type="file" id="imgInp" accept="image/*" name="image" class="custom-file-input" onchange="setClassImage(this)">
                                <input class="custom-file-label" for="imgInp" id="image_main_file_name">
                            </div> 
                        </div>
                        <label for="exampleInputFile">New image:</label>
                        <div style="height:150px"><img id="img" src="#" alt="" width="100px" height="100px"/></div>
                        <label for="exampleInputFile">Old image:</label>
                        <div style="height:150px"><img src="{{ $item->image }}" alt="" width="100px" height="100px"></div>
                    </div>
                    <!-- Price -->
                    <div class="col-4 justify-content-between">
                        <label for="">Item price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('name', $item->price) }}"
                        >
                    </div>
                    <!-- Discount -->
                    <div class="col-4 justify-content-between">
                        <label for="">Item discount</label>
                        <input type="number" name="discount" class="form-control" placeholder="Enter discount value" value="{{ old('name', $item->discount) }}"
                        >
                    </div>
                </div>
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route ('admin.item.index') }}"><h5>Cancel</h5></a>
            </div>
            </div>
        </form>
    </div>
</div>
 <!-- /.card -->
 
 @endsection
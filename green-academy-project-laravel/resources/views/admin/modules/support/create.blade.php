@extends('admin.master')

@section('module', 'Support Question')
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

function setClassVideo(input) {
  let $imgBox = $(input).closest('dd').find('.img_box');
  var reader = new FileReader();
  reader.onload = function (e) {
      $imgBox.html( $('<img>').attr('src', e.target.result) );
      let fileName = input.files[0].name;
      $(input).closest('dd').find(".folder_box img").attr('src',e.target.result)
      $(input).closest('dd').find(".folder_box img").attr('data-file',fileName)
      $(input).closest('dd').find('.info').html(fileName);
      $("#video_main_file_name").val(fileName);
  };
  reader.readAsDataURL(input.files[0]);
}

</script>
@endpush

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Create new support</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.support.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="card-body">
                <!-- Cate -->
                <div class="form-group">
                    <label for="">Select category</label>
                    <select class="custom-select" id="category" name="category">
                        @foreach($category as $a)
                        <option value="{{ $a->id }}">{{$a->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Title -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Title question</label>
                    <input type="text" name="title" class="form-control" placeholder="" value="{{ old('title') }}">
                </div>
                <!-- Question -->
                <div class="form-group">
                    <label for="cs" class="form-label">Question</label>
                    <textarea class="form-control" id="cs" name="question" rows="3" placeholder="Enter content" value="">{{ old('question') }}</textarea>
                    <script>CKEDITOR.replace('cs');</script>
                </div>
                <!-- Image - Video -->
                <div class="row form-group">
                    <div class="col-6 justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputFile">Image input</label>
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
                    </div>
                    <div class="col-6 justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputFile">Video input</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Browse</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="video" class="custom-file-input" onchange="setClassVideo(this)" id="exampleInputFile2">
                                    <input class="custom-file-label" for="exampleInputFile2" id="video_main_file_name">
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Answer -->
                <div class="form-group">
                    <label for="cs" class="form-label">Answer</label>
                    <textarea class="form-control" id="anw" name="answer" rows="3" placeholder="Enter content" value="">{{ old('answer') }}</textarea>
                    <script>CKEDITOR.replace('anw');</script>
                </div>
            </div>
            <!-- card-footer -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.support.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div> 
 @endsection
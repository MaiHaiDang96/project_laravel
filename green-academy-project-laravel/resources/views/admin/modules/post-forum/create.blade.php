@extends('admin.master')

@section('module', 'Post')
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
            <h2 class="card-title">Create new Post</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.post-forum.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- /.card-header -->
            <div class="card-body">
                <!-- User -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="form-label">Create by User</label>
                    @if(Auth::check()) <h5 name="username">{{ Auth::user()->username }}</h5>
                    @endif
                </div>
                <!-- Category -->
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select class="form-control" id="category_forum" name="category_forum">
                        @foreach ($category as $a)
                        <option value="{{$a->id}}">{{$a->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Title -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
                </div>
                <!-- Content -->
                <div class="form-group">
                    <label for="postf" class="form-label">Content</label>
                    <textarea class="form-control" id="postf" name="content" rows="5" placeholder="Enter content comment" value="">{{ old('content') }}</textarea>
                    <script>CKEDITOR.replace('postf');</script>
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
                <!-- Comment -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <a href="{{ route ('admin.post-forum.index') }}"><h5>Back to list @yield('module')</h5></a>

    </div>
    <!-- /.card -->
</div> 
 @endsection
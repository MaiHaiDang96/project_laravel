@extends('admin.master')

@section('module', 'Skill')
@section('action', 'Create')


@push('jshand')
<script>
function setImage(input) {
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
function setVideo(input) {
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
            <h2 class="card-title">Create new Skill</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.skill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Name -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Skill name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter skill" value="{{ old('name') }}">
                </div>
                <!-- Content -->
                <div class="form-group">
                    <label for="skl" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="skl" name="description" rows="3" placeholder="Enter content" value="{{ old('description') }}"></textarea>
                    <script>CKEDITOR.replace('skl');</script>
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
                                    <input type="file" name="image" class="custom-file-input" onchange="setImage(this)" id="exampleInputFile1">
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
                                    <input type="file" name="video" class="custom-file-input" onchange="setVideo(this)" id="exampleInputFile2">
                                    <input class="custom-file-label" for="exampleInputFile2" id="video_main_file_name">
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div><a href="{{ route ('admin.skill.index') }}"><h5>Back to list @yield('module')</h5></a></div>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div> 
 @endsection
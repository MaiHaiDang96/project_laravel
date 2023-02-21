@extends('admin.master')

@section('module', 'Support Question')
@section('action', 'Edit')

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
  const [file] = vidInp.files
  if (file) {
    vid.src = URL.createObjectURL(file)
  }
}
</script>
@endpush

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Edit question</h2>
        </div>
        <form action="{{ route ('admin.support.update', ['id'=> $support->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Cate -->
                <div class="form-group">
                    <label for="">Select category</label>
                    <select class="custom-select" id="category" name="category">
                        @foreach($category as $a)
                        <option value="{{ $a->id }}" {{ $a->id == $support->category ? 'selected' : '' }} >{{$a->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Title -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Title question</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter class" value="{{ old('title', $support->title) }}">
                </div>
                <!-- Question -->
                <div class="form-group">
                    <label for="qs" class="form-label">Question</label>
                    <textarea class="form-control" id="qs" name="question" rows="3" placeholder="Enter content" value="">{{ old('question', $support->question) }}</textarea>
                    <script>CKEDITOR.replace('qs');</script>
                </div>
                <!-- Image - Video - Skill -->
                <div class="row form-group">
                    <div class="col-6 justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputFile">Image input</label>
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
                            <div style="height:150px"><img src="{{ $support->image }}" alt="" width="100px" height="100px"></div>
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
                                    <input type="file" id="vidInp" accept="video/*" name="video" class="custom-file-input" onchange="setClassVideo(this)">
                                    <input class="custom-file-label" for="vidInp" id="video_main_file_name">
                                </div> 
                            </div>
                        </div>
                        <label for="">New video:</label>
                        <div style="height:150px"><video id="vid" src="#" alt="" width="100px" height="100px"></div>
                        <label for="">Old video:</label>
                        <div style="height:150px"><video src="{{ $support->video }}" alt="" width="100px" height="100px"></div>
                    </div>
                </div>
                <!-- Answer -->
                <div class="form-group">
                    <label for="cs" class="form-label">Answer</label>
                    <textarea class="form-control" id="anw" name="answer" rows="3" placeholder="Enter content" value="">{{ old('answer', $support->answer) }}</textarea>
                    <script>CKEDITOR.replace('anw');</script>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route ('admin.support.index') }}"><h5>Cancel</h5></a>
            </div>
        </form>
    </div>
</div>
 <!-- /.card -->
 
 @endsection
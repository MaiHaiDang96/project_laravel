@extends('admin.master')

@section('module', 'Post Forum')
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
<div class="card">
    <form action="{{ route ('admin.post-forum.update', ['id'=> $post_forum->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h2 class="card-title">Edit post</h2>
        </div>
        <div class="card-body">
            <!-- User -->
            <div class="row">
                <div class="form-group col-11">
                    <label for="exampleFormControlSelect1" class="form-label">Create by User</label>
                    @if(Auth::check()) <h5 name="username">{{ Auth::user()->username }}</h5>@endif
                </div>
                <div class="form-group col-1">
                    <label for="" class="form-label">Censorship</label>
                    <select class="form-control" id="censorship" name="censorship">
                        <option value="1" {{$post_forum->censorship == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{$post_forum->censorship == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <!-- Category -->
            <div class="form-group">
                <label for="" class="form-label">Category</label>
                <select class="form-control" id="category_forum" name="category_forum" disabled>
                    @foreach($categories as $a)
                    <option value="{{ $a->id }}" {{ $a->id == $post_forum->category_forum ? 'selected' : '' }}>{{$a->name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Title -->
            <div class="form-group">
                <label for="">Post title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title', $post_forum->title) }}" disabled>
            </div>
            <!-- Content -->
            <div class="form-group">
                <label for="postf" class="form-label">Content</label>
                <textarea class="form-control" id="postf" name="content" rows="5" placeholder="Enter content comment" value="" disabled>{{ old('name', $post_forum->content) }}</textarea>
                <script>CKEDITOR.replace('postf');</script>
            </div>
            <!-- Image - Video -->
            <div class="row form-group">
                <div class="col-6 justify-content-between">
                    {{-- <div class="form-group">
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
                        <div style="height:150px"><img id="img" src="#" alt="" width="100px" height="100px"/></div> --}}
                        <label for="exampleInputFile">Image:</label>
                        <div style="height:150px"><img src="{{ $post_forum->image }}" alt="" width="100px" height="100px"></div>
                    {{-- </div> --}}
                </div>
                <div class="col-6 justify-content-between">
                    {{-- <div class="form-group">
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
                    <div style="height:150px"><video id="vid" src="#" alt="" width="100px" height="100px"></div> --}}
                    <label for="">Video:</label>
                    <div style="height:150px"><video src="{{ $post_forum->video }}" alt="" width="100px" height="100px"></div>
                </div>
            </div>
            <!-- Comment -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
 <!-- /.card -->
 @endsection
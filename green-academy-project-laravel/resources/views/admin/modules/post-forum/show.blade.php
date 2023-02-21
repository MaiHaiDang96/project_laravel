@extends('admin.master')

@section('module', 'Post Forum')
@section('action', 'Show')
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
        <div class="card-header">
            <b><i>{{$post_forum->cateName}}</i></b> > <b><i>{{$post_forum->title}}</i></b>
        </div>
        <div class="card-body">
            <!-- User -->
                <div class="form-group">
                    Create by <label for="" class="form-label">{{$post_forum->userName}}</label>
                    at <label for="" class="form-label">{{$post_forum->created_at}}</label>
                </div>
            <!-- Content -->
            <div class="form-group">
                <textarea class="form-control" name="content" rows="auto" value="" disabled>{{ $post_forum->content }}</textarea>
            </div>
            <!-- Image - Video -->
            <div class="row form-group">
                @if($post_forum->image) {
                <div class="col-6 justify-content-between">
                    <label for="">Image:</label>
                    <div style="height:150px"><img src="{{ $post_forum->image }}" alt="" width="100%" height="100%"></div>
                </div>
                }@endif
                @if($post_forum->video) {
                <div class="col-6 justify-content-between">
                    <label for="">Video:</label>
                    <div style="height:150px"><video src="{{ $post_forum->video }}" alt="" width="100%" height="100%"></div>
                </div>
                }@endif
            </div>
            <!-- Comment -->
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="form-label">Comment : </label>
                @foreach ($comments as $c)
                <div class="row form-group" style="border:1px solid rgb(50, 112, 148);width:auto">
                    <div class="col-1 justify-content-between">
                        <i for="">{{$c->userName}}</i>
                    </div>
                    <div class="col-11 justify-content-between">
                        <p for="">:{{$c->content}}</p>
                    </div>
                    <div class="row form-group">
                        @if($c->image) {
                        <div class="col-6 justify-content-between">
                            <label for="">Image:</label>
                            <div style="height:150px"><img src="{{ $c->image }}" alt="" width="100%" height="100%"></div>
                        </div>
                        }@endif
                        @if($c->video) {
                        <div class="col-6 justify-content-between">
                            <label for="">Video:</label>
                            <div style="height:150px"><video src="{{ $c->video }}" alt="" width="100%" height="100%"></div>
                        </div>
                        }@endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{ route ('admin.post-forum.index') }}"><h5>Back to list @yield('module')</h5></a>
        </div>
</div>
 <!-- /.card -->
 @endsection
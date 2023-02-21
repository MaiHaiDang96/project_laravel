@extends('admin.master')

@section('module', 'Comment')
@section('action', 'Edit')

@section('content')
<div class="card">
    <form action="{{ route ('admin.comment.update', ['id'=> $comment->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h2 class="card-title">Edit comment</h2>
        </div>
        <div class="card-body">
            <!-- User -->
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="form-label">Create by User ID</label>
                <select class="form-control">
                    <option value="1">user_id 1</option>
                    <option value="2">user_id 2</option>
                    <option value="3">user_id 3</option>
                    <option value="4">user_id 4</option>
                    <option value="5">user_id 5</option>
                </select>
            </div>
            <!-- Content -->
            <div class="form-group">
                <label for="cmt" class="form-label">Content</label>
                <textarea class="form-control" id="cmt" name="content" rows="3" placeholder="Enter content comment" value="{{ old('content', $comment->content) }}"></textarea>
                <script>CKEDITOR.replace('cmt');</script>
            </div>
            <!-- Image - Video -->
            <div class="form-group">
                <div class="row">                        
                    <!-- Image -->
                    <div class="card-body col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Image input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload image</span>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video -->
                    <div class="card-body col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Video input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                <span class="input-group-text">Upload video</span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
 <!-- /.card -->
 
 @endsection
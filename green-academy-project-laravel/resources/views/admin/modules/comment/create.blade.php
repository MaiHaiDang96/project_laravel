@extends('admin.master')

@section('module', 'Comment')
@section('action', 'Create')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Comment</h2>
        </div>
        <!-- form start -->
        <form action="{{ route ('admin.comment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h2 class="card-title">Create comment</h2>
            </div>
            <!-- /.card-header -->
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
                    <textarea class="form-control" id="cmt" name="content" rows="3" placeholder="Enter content comment" value="{{ old('content') }}"></textarea>
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
        <a href="{{ route ('admin.comment.index') }}"><h5>Back to list @yield('module')</h5></a>
    </div>
    <!-- /.card -->
</div> 
 @endsection
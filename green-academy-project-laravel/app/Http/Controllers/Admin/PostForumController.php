<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PostForum\StoreRequest;
use App\Http\Requests\Admin\PostForum\UpdateRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class PostForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts_forum'] = DB::table('posts_forum')
        ->join('users', 'posts_forum.user', '=', 'users.id')
        ->join('categories_forum', 'posts_forum.category_forum', '=', 'categories_forum.id')
        ->select('posts_forum.id', 'users.username as userName', 'categories_forum.name as cateName', 'posts_forum.title', 'posts_forum.content', 'posts_forum.image', 'posts_forum.video', 'posts_forum.censorship')
        ->get();
        return view('admin.modules.post-forum.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data['category'] = DB::table('categories_forum')->get();
        return view('admin.modules.post-forum.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();


        if(!empty($request->image)) {
        $file_image = $request->image;
        $name_image = time() . "-" . $file_image->getClientOriginalName();
        $path_image = public_path('/administrator/upload/image');
        $link_image = '/administrator/upload/image/' . $name_image;
        $data['image'] = $link_image;
        $file_image->move($path_image, $name_image);
        }
        
        if(!empty($request->video)) {
        $file_video = $request->video;
        $name_video = time() . "-" . $file_video->getClientOriginalName();
        $path_video = public_path('/administrator/upload/video');
        $link_video = '/administrator/upload/video/' . $name_video;
        $data['video'] = $link_video;
        $file_video->move($path_video, $name_video);
        }

        $data['category_forum'] = $request->input('category_forum');
        $data['user'] = Auth::user()->id;
        DB::table('posts_forum')->insert($data);

        return redirect()->route('admin.post-forum.index')->with('success', "Create post succeed!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['post_forum'] = DB::table('posts_forum')
        ->join('users', 'posts_forum.user', '=', 'users.id')
        ->join('categories_forum', 'posts_forum.category_forum', '=', 'categories_forum.id')
        ->select('posts_forum.id', 'users.username as userName', 'categories_forum.name as cateName', 'posts_forum.created_at', 'posts_forum.title', 'posts_forum.content', 'posts_forum.image', 'posts_forum.video', 'posts_forum.censorship')
        ->where('posts_forum.id', $id)->first();


        $data['comments'] = DB::table('comments')
        ->join('users', 'comments.user', '=', 'users.id')
        ->select('comments.id', 'users.username as userName', 'comments.content', 'comments.image', 'comments.video')
        ->where('comments.post', $id)->get();

        return view('admin.modules.post-forum.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post_forum'] = DB::table('posts_forum')->where('id', $id)->first();
        $data['categories'] = DB::table('categories_forum')->get();

        return view('admin.modules.post-forum.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        $dataPost = DB::table('posts_forum')->where('id', $id)->first();
        // dd($dataPost);
        $data['category_forum'] = $dataPost->category_forum;
        $data['user'] = Auth::user()->id;
        $data['censorship'] = $request->input('censorship');

        $file_image = $request->image;
        if(empty($file_image)) {
            $name_image = DB::table('posts_forum')->where('id', $id)->get('image');
        }else {
            $name_image = time() . "-" . $file_image->getClientOriginalName();
            $path_image = public_path('/administrator/upload/image');
            $link_image = '/administrator/upload/image/' . $name_image;
            $data['image'] = $link_image;
            $file_image->move($path_image, $name_image);
        }

        $file_video = $request->video;
        if(empty($file_video)) {
            $name_video = DB::table('classes')->where('id', $id)->get('video');
        }else{
            $name_video = time() . "-" . $file_video->getClientOriginalName();
            $path_video = public_path('/administrator/upload/video');
            $link_video = '/administrator/upload/video/' . $name_video;
            $data['video'] = $link_video;
            $file_video->move($path_video, $name_video);
        }

        DB::table('posts_forum')->where('id', $id)->update($data);

        return redirect()->route('admin.post-forum.index')->with('success', "Update post succeed!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('posts_forum')->where('id', $id)->delete();

        return redirect()->route('admin.post-forum.index')->with('success', "Delete post succeed!");     }
}

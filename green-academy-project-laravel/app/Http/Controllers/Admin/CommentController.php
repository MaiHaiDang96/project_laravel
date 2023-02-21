<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Comment\StoreRequest;
use App\Http\Requests\Admin\Comment\UpdateRequest;

use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['comments'] = DB::table('comments')
        ->join('users', 'comments.user', '=', 'users.id')
        ->select('comments.id', 'comments.post', 'users.username as userName', 'comments.content', 'comments.image', 'comments.video')
        ->get();
        return view('admin.modules.comment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.comment.create');
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

        DB::table('comments')->insert($data);
        return redirect()->route('admin.comment.index')->with('success', "Thêm bình luận thành công!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['comments'] = DB::table("comments")->where('id', $id)->first();
        return view('admin.modules.comment.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['comment'] = DB::table('comments')->where('id', $id)->first();

        return view('admin.modules.comment.edit', $data);    }

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

        DB::table('comments')->where('id', $id)->update($data);

        return redirect()->route('admin.comment.index')->with('success', "Cập nhật bình luận thành công!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('comments')->where('id', $id)->delete();

        return redirect()->route('admin.comment.index')->with('success', "Xóa bình luận thành công!");     }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;

use Illuminate\Support\Facades\DB;

class CategoryForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $data['categories_forum'] = DB::table('categories_forum')->get();
        return view('admin.modules.category-forum.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('admin.modules.category-forum.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store (StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();

        DB::table('categories_forum')->insert($data);

        return redirect()->route('admin.category-forum.index')->with('success', "Thêm category thành công!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $data['category'] = DB::table('categories_forum')->where('id', $id)->first();

        return view('admin.modules.category-forum.edit', $data);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (UpdateRequest $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();

        DB::table('categories_forum')->where('id', $id)->update($data);

        return redirect()->route('admin.category-forum.index')->with('success', "Cập nhật category thành công!");    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        DB::table('categories_forum')->where('id', $id)->delete();

        return redirect()->route('admin.category-forum.index')->with('success', "Xóa category thành công!");    
    }
}

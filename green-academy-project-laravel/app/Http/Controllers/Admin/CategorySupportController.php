<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategorySupport\StoreRequest;
use App\Http\Requests\Admin\CategorySupport\UpdateRequest;

use Illuminate\Support\Facades\DB;

class CategorySupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $data['categories_support'] = DB::table('categories_support')->get();
        return view('admin.modules.category-support.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('admin.modules.category-support.create');

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

        DB::table('categories_support')->insert($data);

        return redirect()->route('admin.category-support.index')->with('success', "Add category succeed!");

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
        $data['category_support'] = DB::table('categories_support')->where('id', $id)->first();

        return view('admin.modules.category-support.edit', $data);    
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

        DB::table('categories_support')->where('id', $id)->update($data);

        return redirect()->route('admin.category-support.index')->with('success', "Update category succeed!");    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        DB::table('categories_support')->where('id', $id)->delete();

        return redirect()->route('admin.category-support.index')->with('success', "Delete category succeed!");    
    }
}

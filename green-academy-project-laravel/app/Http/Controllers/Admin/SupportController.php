<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Support\StoreRequest;
use App\Http\Requests\Admin\Support\UpdateRequest;

use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['supports'] = DB::table('supports')
            ->join('categories_support', 'categories_support.id', '=', 'supports.category')
            ->select('supports.id', 'supports.title', 'supports.question', 'supports.answer', 'supports.image', 'supports.video', 'categories_support.name as cateName')
            ->get();
    return view('admin.modules.support.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = DB::table('categories_support')->get();
        return view('admin.modules.support.create', $data);
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

        if($request->image){
        $file_image = $request->image;
        $name_image = time() . "-" . $file_image->getClientOriginalName();
        $path_image = public_path('/administrator/upload/image');
        $link_image = '/administrator/upload/image/' . $name_image;
        $data['image'] = $link_image;
        $file_image->move($path_image, $name_image);

        }
        if($request->video) {
        $file_video = $request->video;
        $name_video = time() . "-" . $file_video->getClientOriginalName();
        $path_video = public_path('/administrator/upload/video');
        $link_video = '/administrator/upload/video/' . $name_video;
        $data['video'] = $link_video;
        $file_video->move($path_video, $name_video);

        }


        $data['category'] = $request->input('category');

        DB::table('supports')->insert($data);
        
        return redirect()->route('admin.support.index')->with('success', "Create support succeed!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['support'] = DB::table('supports')
        ->join('categories_support', 'supports.category', '=', 'categories_support.id')
        ->select('supports.id', 'supports.title', 'supports.question', 'supports.answer', 'supports.image', 'supports.video', 'categories_support.name as cateName', 'supports.category' )
        ->where('supports.id', $id)
        ->first();
        $data['category'] = DB::table('categories_support')->get();
        return view('admin.modules.support.edit', $data);
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

        $file_image = $request->image;
        if(empty($file_image)) {
            $name_image = DB::table('supports')->where('id', $id)->get('image');
        }else{
            $name_image = time() . "-" . $file_image->getClientOriginalName();
            $path_image = public_path('/administrator/upload/image');
            $link_image = '/administrator/upload/image/' . $name_image;
            $data['image'] = $link_image;
            $file_image->move($path_image, $name_image);
        }

        $file_video = $request->video;
        if(empty($file_video)) {
            $name_video = DB::table('supports')->where('id', $id)->get('video');
        }else{
            $name_video = time() . "-" . $file_video->getClientOriginalName();
            $path_video = public_path('/administrator/upload/video');
            $link_video = '/administrator/upload/video/' . $name_video;
            $data['video'] = $link_video;
            $file_video->move($path_video, $name_video);
        }
        $data['category'] = $request->input('category');

        DB::table('supports')->where('id', $id)->update($data);

        return redirect()->route('admin.support.index')->with('success', "Update support succeed!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('supports')->where('id', $id)->delete();

        return redirect()->route('admin.support.index')->with('success', "Delete support succeed!");
    }
}

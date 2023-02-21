<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Item\StoreRequest;
use App\Http\Requests\Admin\Item\UpdateRequest;

use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = DB::table('items')
        ->join('classes', 'classes.id', '=', 'items.class')
        ->select('items.id', 'items.name', 'items.description', 'items.image', 'items.price', 'items.discount', 'classes.name as className')
        ->get();
        return view('admin.modules.item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['classes'] = DB::table("classes")->get();
        return view('admin.modules.item.create', $data);
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

        $file_image = $request->image;
        $name_image = time() . "-" . $file_image->getClientOriginalName();
        $path_image = public_path('/administrator/upload/image');
        $link_image = '/administrator/upload/image/' . $name_image;
        $data['image'] = $link_image;

        $data['class'] = $request->input('class');
        
        DB::table('items')->insert($data);
        $file_image->move($path_image, $name_image);

        return redirect()->route('admin.item.index')->with('success', "Thêm vật phẩm thành công!");
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
        $data['item'] = DB::table('items')
        ->join('classes', 'items.class', '=', 'classes.id')
        ->select('items.id', 'items.name', 'items.image', 'items.description', 'items.price', 'items.discount', 'classes.name as className', 'items.class')//item.class
        ->where('items.id', $id)->first();



        $data['classes'] = DB::table("classes")->get();


        return view('admin.modules.item.edit', $data);
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
            $name_image = DB::table('items')->where('id', $id)->get('image');
        }else{
            $name_image = time() . "-" . $file_image->getClientOriginalName();
            $path_image = public_path('/administrator/upload/image');
            $link_image = '/administrator/upload/image/' . $name_image;
            $data['image'] = $link_image;
            $file_image->move($path_image, $name_image);
        }

        $data['class'] = $request->input('class');

        DB::table('items')->where('id', $id)->update($data);

        return redirect()->route('admin.item.index')->with('success', "Cập nhật thông tin vật phẩm thành công!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('items')->where('id', $id)->delete();

        return redirect()->route('admin.item.index')->with('success', "Xóa vật phẩm thành công!");
    }

}

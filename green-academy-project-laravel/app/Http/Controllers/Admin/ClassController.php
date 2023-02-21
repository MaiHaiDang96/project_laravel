<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Class\StoreRequest;
use App\Http\Requests\Admin\Class\UpdateRequest;

use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('classes')->get();
        $result['classes'] = DB::table('classes')
                    ->join('skills', 'classes.skill', '=', 'skills.id')
                    ->select('classes.id', 'classes.name', 'classes.classstory', 'classes.image', 'classes.video', 'skills.name as skillName')
                    ->get();
    return view('admin.modules.class.index', $result); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['skills'] = DB::table('skills')->get();
        return view('admin.modules.class.create', $data);
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

        $file_video = $request->video;
        $name_video = time() . "-" . $file_video->getClientOriginalName();
        $path_video = public_path('/administrator/upload/video');
        $link_video = '/administrator/upload/video/' . $name_video;


        $data['image'] = $link_image;
        $data['video'] = $link_video;

        $data['skill'] = $request->input('skill');

        DB::table('classes')->insert($data);
        $file_image->move($path_image, $name_image);
        $file_video->move($path_video, $name_video);
        
        return redirect()->route('admin.class.index')->with('success', "Create class succeed!");
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
        $data['class'] = DB::table('classes')
        ->join('skills', 'classes.skill', '=', 'skills.id')
        ->select('classes.id', 'classes.name', 'classes.image', 'classes.video', 'classes.classstory', 'skills.name as skillName', 'classes.skill' )
        ->where('classes.id', $id)
        ->first();
        $data['skills'] = DB::table('skills')->get();
        return view('admin.modules.class.edit', $data);
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
            $name_image = DB::table('classes')->where('id', $id)->get('image');
        }else{
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
        $data['skill'] = $request->input('skill');

        DB::table('classes')->where('id', $id)->update($data);

        return redirect()->route('admin.class.index')->with('success', "Update class succeed!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('classes')->where('id', $id)->delete();

        return redirect()->route('admin.class.index')->with('success', "Delete class succeed!");
    }
}

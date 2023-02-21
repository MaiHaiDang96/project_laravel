<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Skill\StoreRequest;
use App\Http\Requests\Admin\Skill\UpdateRequest;

use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['skills'] = DB::table('skills')->get();
        return view('admin.modules.skill.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.skill.create');
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
        // dd($path_image);
        $data['image'] = $link_image;
        $data['video'] = $link_video;
        DB::table('skills')->insert($data);

        $file_image->move($path_image, $name_image);
        $file_video->move($path_video, $name_video);
        
        return redirect()->route('admin.skill.index')->with('success', "Create skill succeed!");
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
        $data['skill'] = DB::table('skills')->where('id', $id)->first();

        return view('admin.modules.skill.edit', $data);
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
            $name_image = DB::table('skills')->where('id', $id)->get('image');
        }else{   
            $name_image = time() . "-" . $file_image->getClientOriginalName();
            $path_image = public_path('/administrator/upload/image');
            $link_image = '/administrator/upload/image/' . $name_image;
            $data['image'] = $link_image;
            $file_image->move($path_image, $name_image);
        }

        $file_video = $request->video;
        if(empty($file_video)) {
            $name_video = DB::table('skills')->where('id', $id)->get('video');
        }else{
            $name_video = time() . "-" . $file_video->getClientOriginalName();
            $path_video = public_path('/administrator/upload/video');
            $link_video = '/administrator/upload/video/' . $name_video;
            $data['video'] = $link_video;
            $file_video->move($path_video, $name_video);
        }

        DB::table('skills')->where('id', $id)->update($data);

        return redirect()->route('admin.skill.index')->with('success', "Update skill succeed!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('skills')->where('id', $id)->delete();

        return redirect()->route('admin.skill.index')->with('success', "Delete skill succeed!");     }
}

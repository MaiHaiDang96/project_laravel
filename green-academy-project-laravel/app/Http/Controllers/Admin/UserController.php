<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = DB::table('users')->get();
        return view('admin.modules.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'checkterm','password_confirmation'); 
        $data['created_at'] = new \DateTime();
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);

        return redirect()->route('admin.user.index')->with('success', "Account registration completed!");    
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
        $data['user'] = DB::table('users')->where('id', $id)->first();

        return view('admin.modules.user.edit', $data); 
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
        $current_password = $request->current_password;
        $old_data = DB::table('users')->where('id', $id)->first();
        if(Hash::check($current_password, $old_data->password)){
        $data = $request->except('_token','password_confirmation','current_password');
        $data['updated_at'] = new \DateTime();
        $data['password'] = Hash::make($data['password']);

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('admin.user.index')->with('success', "Change infomation user success!");
        }else{
            // return view ('admin.user.update', ['id'->$id]);
            // $data['user'] = DB::table('users')->where('id', $id)->first();

            // return view('admin.modules.user.edit', $data)->with('error', "Password hien tai khong chinh xac"); 
            return redirect()->route('admin.user.edit', ['id'=>$old_data->id])->with('error', "Current password not match!");    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $account = DB::table('users')->where('id', $id)->first();
        if($account->role == 0) {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->route('admin.user.index')->with('success', "Deleted account user success!");
        }else{
            return redirect()->route('admin.user.index')->with('error', "Cant delete account admin!");
        }
    }
}

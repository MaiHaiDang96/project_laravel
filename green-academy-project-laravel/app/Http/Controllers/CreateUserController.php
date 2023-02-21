<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'checkterm', 'password_confirmation'); 
        $data['created_at'] = new \DateTime();
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
        return redirect()->route('login')->with('success', "Register success, login now!");    
    }

}

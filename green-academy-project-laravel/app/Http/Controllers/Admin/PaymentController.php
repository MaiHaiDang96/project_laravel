<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Payment\StoreRequest;
use App\Http\Requests\Admin\Payment\UpdateRequest;

use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $data['payments'] = DB::table('payments')->get();
        return view('admin.modules.payment.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('admin.modules.payment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();

        DB::table('payments')->insert($data);

        return redirect()->route('admin.payment.index')->with('success', "Thêm thanh toán thành công!");

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
        $data['payment'] = DB::table('payments')->where('id', $id)->first();

        return view('admin.modules.payment.edit', $data);    
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

        DB::table('payments')->where('id', $id)->update($data);

        return redirect()->route('admin.payment.index')->with('success', "Cập nhật thanh toán thành công!");    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        DB::table('payments')->where('id', $id)->delete();

        return redirect()->route('admin.payment.index')->with('success', "Xóa thanh toán thành công!");    
    }
}

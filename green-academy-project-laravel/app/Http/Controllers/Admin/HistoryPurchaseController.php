<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\HistoryPurchase\StoreRequest;
use App\Http\Requests\Admin\HistoryPurchase\UpdateRequest;

use Illuminate\Support\Facades\DB;

class HistoryPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['history_purchases'] = DB::table('history_purchases')->get();
        return view('admin.modules.history-purchase.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.history-purchase.create');
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

        DB::table('history_purchases')->insert($data);
        return redirect()->route('admin.history-purchase.index')->with('success', "Thêm lịch sử mua hàng thành công!");
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
        $data['history_purchase'] = DB::table('history_purchases')->where('id', $id)->first();

        return view('admin.modules.history-purchase.edit', $data);    }

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

        DB::table('history_purchases')->where('id', $id)->update($data);

        return redirect()->route('admin.history-purchase.index')->with('success', "Cập nhật lịch sử mua hàng thành công!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('history_purchases')->where('id', $id)->delete();

        return redirect()->route('admin.history-purchase.index')->with('success', "Xóa lịch sử mua hàng thành công!");     }
}

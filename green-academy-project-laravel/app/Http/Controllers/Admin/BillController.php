<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Bill\StoreRequest;
use App\Http\Requests\Admin\Bill\UpdateRequest;

use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bills'] = DB::table('bills')->get();
        return view('admin.modules.bill.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = DB::table('users')->get();
        $data['carts'] = DB::table('carts')
        ->join('items', 'carts.item', '=', 'items.id')
        ->select('carts.id', 'items.name as itemName', 'carts.money', 'carts.created_at')
        ->get();
        return view('admin.modules.bill.create', $data);
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

        DB::table('bills')->insert($data);
        return redirect()->route('admin.bill.index')->with('success', "Thêm hóa đơn thành công!");
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
        $data['bill'] = DB::table('bills')->where('id', $id)->first();

        return view('admin.modules.bill.edit', $data);    }

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

        DB::table('bills')->where('id', $id)->update($data);

        return redirect()->route('admin.bill.index')->with('success', "Cập nhật hóa đơn thành công!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('bills')->where('id', $id)->delete();

        return redirect()->route('admin.bill.index')->with('success', "Xóa hóa đơn thành công!");
    }

    public function getCart (Request $request) {
        $idUser = $request->iduser;
        $userCart = DB::table('carts')
        ->join('items', 'carts.item', '=', 'items.id')
        ->where('user', $idUser)
        ->select('carts.id', 'items.name as itemName', 'carts.money', 'carts.created_at')
        ->get();

        foreach($userCart as $item) {
            echo '<tr>';
            echo "<td>$item->id</td>";
            echo "<td>$item->itemName</td>";
            echo "<td>$item->money</td>";
            echo "<td>$item->created_at</td>";
            echo '</tr>';
        }
        $totalmoney = DB::table('carts')->where('user', $idUser)->sum('money');
        // dd($totalmoney);
    }

    
}

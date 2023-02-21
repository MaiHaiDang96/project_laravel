<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Cart\StoreRequest;
use App\Http\Requests\Admin\Cart\UpdateRequest;

use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['carts'] = DB::table('carts')
        ->join('users', 'carts.user', '=', 'users.id')
        ->join('items', 'carts.item', '=', 'items.id')
        ->select('carts.id', 'users.username as userName', 'items.name as itemName', 'carts.money')
        ->get();
        return view('admin.modules.cart.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataUser['users'] = DB::table('users')->get();
        $dataItem['items'] = DB::table('items')->get();
        $maxQuantity = DB::table('items')->max('id');
        return view('admin.modules.cart.create', $dataUser, $dataItem, $maxQuantity);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'price', 'discount', 'quantity', 'calculate');
        $data['created_at'] = new \DateTime();
        $data['user'] = $request->input('user');
        $data['item'] = $request->input('item');
        DB::table('carts')->insert($data);
        return redirect()->route('admin.cart.index')->with('success', "Thêm vật phẩm vào hóa đơn thành công!");
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
        $data['cart'] = DB::table('carts')->where('id', $id)->first();
        // $dataUser['users'] = DB::table('users')->get();
        // $dataItem['items'] = DB::table('items')->get();
        return view('admin.modules.cart.edit', $data);
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
        $data = $request->except('_token', 'price', 'discount', 'quantity', 'calculate');
        $data['created_at'] = new \DateTime();
        $data['user'] = $request->input('user');
        $data['item'] = $request->input('item');

        DB::table('carts')->where('id', $id)->update($data);

        return redirect()->route('admin.cart.index')->with('success', "Cập nhật vật phẩm vào hóa đơn thành công!");     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('carts')->where('id', $id)->delete();

        return redirect()->route('admin.cart.index')->with('success', "Xóa vật phẩm trong hóa đơn thành công!");
    }

    /*Get price item for bill detail money */
    public function getPrice (Request $request) {
        $idIT = $request->iditem;
        $itemName = DB::table('items')->where('id', $idIT)->get();
        foreach($itemName as $item) {
            echo $item->price;
        }
    }
    public function getDiscount (Request $request) {
        $idIT = $request->iditem;
        $itemName = DB::table('items')->where('id', $idIT)->get();
        foreach($itemName as $item) {
            echo $item->discount;
        }
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
    public function account($id)
    {
        $data['user'] = DB::table('users')->where('id', $id)->first();
        return view('client.page.account', $data);
    }
}

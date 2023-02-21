<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $data['news'] = DB::table('newses')->get();

        return view('client.page.news');
    }
}

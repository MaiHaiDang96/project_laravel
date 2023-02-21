<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function forum()
    {
        $data['forum'] = DB::table('forums')->get();
        return view('client.page.forum', $data);
    }
}

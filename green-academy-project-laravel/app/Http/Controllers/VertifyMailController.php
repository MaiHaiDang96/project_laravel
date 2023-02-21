<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VertifyMail;
use Illuminate\Support\Facades\Mail;


class VertifyMailController extends Controller
{
    public function sendVertifyMail () {
        $mailData = [
            'title' => 'Mail form haidang.site',
            'body' => 'this is vertify account mail'
        ];
        Mail::to('maihaidang96@gmail.com')->send(new VertifyMail());
    }
}
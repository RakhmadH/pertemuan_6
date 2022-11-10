<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class SendEmailController extends Controller
{
    public function index() {
        return view('kirim-email');
    }

    public function store(Request $request){
        $data = $request->all();
        dispatch(new SendEmailJob($data));
        return
        redirect()->route('kirim-email')->with('status',
        'Email berhasil dikirim');
    }

}

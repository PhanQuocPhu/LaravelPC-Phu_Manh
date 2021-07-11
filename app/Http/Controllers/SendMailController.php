<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }
    public function send_mail(Request $request)
    {
        $data = $request->all();
        /* dd($data); */
        $emails = $data['emails']??'';
        //Gửi mail
        \Mail::to($emails)->send(new SendMail(['emails'=>$emails]));
        return view('mail.content');
    }
}

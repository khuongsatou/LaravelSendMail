<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class SendMailController extends Controller
{
    public function send(){

        $objDemo = new \stdClass();
        $objDemo->nguoi_nhan = "Mr Tuan";
        $objDemo->noi_sinh ="Quang ngai";
        $objDemo->nam_sinh = "19...";
        $objDemo->nguoi_gui = "Mr Secret";

        Mail::to("takagiks99@gmail.com")->send(new DemoMail($objDemo));
    }
}

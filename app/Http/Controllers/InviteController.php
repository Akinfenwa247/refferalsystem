<?php

namespace App\Http\Controllers;

use App\Mail\SendReferralMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{
    public function invite(Request $request)
    {
        Mail::to($request->email)->send(new SendReferralMail());
    }
}

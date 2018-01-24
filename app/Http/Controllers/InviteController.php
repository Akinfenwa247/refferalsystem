<?php

namespace App\Http\Controllers;

use App\Mail\SendReferralMail;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{
    public function invite(Request $request)
    {
        //prepare a data array that will be used in Mail function and in email template view
        $data = array(
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'sender'=> Auth::user()->name,
            'link' => url('register/').'/'.Auth::user()->affiliate_id,
            );

        // notify referee
        Mail::send('invite', $data, function($message) use ($data)
        {
            $message->to($data['email'], $data['name'])->subject('Referral System');
            $message->from('referral@system.com',$data['sender']);
        });
        return redirect()->back()->with('status', 'Invitation Sent Successfully');
    }

}

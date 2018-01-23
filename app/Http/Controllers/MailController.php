<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use Mail;

use Log;

class MailController extends Controller
{
	public function sendInquiry(Request $request) {
		Log::info($request);
		// $name = $request->input('name');
		// $email = $request->input('email');
		// $message = $request->input('message');
		// Mail::send('email_template', compact('name','email','message'), function ($msg) {
		// 	$msg->subject('inquiry');
		// 	$msg->from('inquiry@topmusicmanagement.com', 'Top Music Management Inquiry Form (Do not reply)');
		// 	$msg->to("info@topmusicmanagement.com");
		// });

		return redirect('/');
	}
}

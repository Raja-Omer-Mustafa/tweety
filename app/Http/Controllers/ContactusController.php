<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
class ContactusController extends Controller
{
    public function index()
    {
    	return view('contact');
    }
    public function sendMail(Request $request){
        $data = $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'message' => 'required'
              ]);
      $admin_email = "hamza.asghar728@gmail.com";
      Mail::to($admin_email)->send(new ContactEmail($data));
       return response()->json(['success'=>'Data is successfully send']);
    }
}

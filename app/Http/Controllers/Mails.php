<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Mail;

class Mails extends Controller
{
    public function signup($id)
    {
        if($user = User::find($id))
        {
            Mail::send('mails.clientSignup', ['user'=>$user], function ($message) use ($user) {
                $message->to($user->email, $user->firstname.$user->lastname);
        	    $message->from('info@rei-az.com', 'Reiaz');
        	    $message->subject('Welcome to Rei-az.com');
        	});
        }
    }
    
    public function forgotPassword($id, $new_password)
    {
        if($user = User::find($id)){
            Mail::send('mails.forgotPassword', ['user' => $user, 'new_password'=>$new_password], function ($m) use ($user) {
                $m->to($user->email, $user->firstname." ".$user->lastname)
                  ->subject('Password Recovery')
                  ->from('infreiaz@gmail.com', 'Admin');
            });
        }
    }
    
    
    public function contactToAdmin($request)
    {
        
        Mail::send('mails.contact-to-admin', ['request'=>$request], function ($message) use ($request) {
            $message->to( env('EMAIL_INFO') , 'To whom it may concern')
                    ->from( env('EMAIL_SYS') , 'Notification System')
    	            ->subject('New Contact Request has arrived');
    	    
    	});
        
    }
    
   
    
}

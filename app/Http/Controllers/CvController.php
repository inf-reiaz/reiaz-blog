<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Mail;
class CvController extends Controller
{
    public function getIndex()
    {
        return view('cv.index');
    }
    
    
    
    public function postMessages(Request $request)
    {
        $data = $request->all();

        $mymessag = Message::create($data);
        
        // return $mymessag;
        
        $this->sendEmail($mymessag);
        
        return back()->withErrors(['success'=> 'Message has been received successfully.']);
    }
    
    
    
    
    private function sendEmail($mymessag){
        Mail::send('cv.messages',['user'=>$mymessag],function($m) use ($mymessag){
            $m->to( env('EMAIL_INFO') , 'To whom it may concern');
            $m->subject('rei-az.com');
        });
    }
    
}

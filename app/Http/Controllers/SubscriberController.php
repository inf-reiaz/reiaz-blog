<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function getSubscriber()
    {
        return view('admin.pages.subscriber.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    //
    public function store(Request $request) 
    {
       
        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()->back();
    }

}

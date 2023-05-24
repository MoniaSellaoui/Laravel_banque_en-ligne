<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Notice;
use App\Models\Message;

class ClientController extends Controller
{
    //
    public function home()
    { if(Session::has('client'))
        { return view('client.home');

        }
        else{
            return redirect('/login');
        }
       
    }
    public function account()
    {
        return view('client.account');
    }
    public function statements()
    {
        return view('client.statements');
    }
    public function fundstransfer()
    {
        return view('client.fundstransfer');
    }
    public function notice()
    {
        $notices=Notice::where('accountnumber',Session::get('client')->accountnumber)->get();
        return view('client.notice')->with('notices',$notices);
    }
    public function feedback()
    {
        return view('client.feedback');
    }

    public function clientmessage(Request $request)
    {
        $message=new Message();
        $message->name=Session::get('client')->name;
        $message->accountnumber=Session::get('client')->accountnumber;
        $message->phone=Session::get('client')->phone;
        $message->message=$request->input('message');

        $message->save();
        return redirect()->back()->with('status','le message a été envoyer avec success');
    }
}

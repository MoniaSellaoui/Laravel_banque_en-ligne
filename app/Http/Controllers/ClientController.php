<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Notice;
use App\Models\Message;
use App\Models\Account;
use App\Models\Statement;

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
    {$account=Account::where('accountnumber',Session::get('client')->accountnumber)->first();
        return view('client.account')->with('account',$account);
    }
    public function statements()
    {$statements=Statement::get();
        return view('client.statements')->with('statements',$statements);
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


    public function clienttransfer(Request $request)
    {
        $account=Account::where('accountnumber',$request->accountnumber)->first();

        if($account)
        {
            if($account->accountnumber != Session::get('client')->accountnumber)
            {
                return view('client.fundstransferdetails')->with('account',$account);
            }
            else{
                return back()->with('status','vous ne poubez pas transferer a votre compte ');
            }
        }
        else{
            return back()->with('status','le numero de compte n éxiste pas');

        }


    }
    public function transfer(Request $request)
    {
        $account=Account::where('accountnumber',Session::get('client')->accountnumber)->first();
        $account1=Account::where('accountnumber',$request->accountnumber)->first();

        $account->balance= $account->balance - $request->amount;
        $account1->balance= $account1->balance + $request->amount;

        $statement=new Statement();
        $statement->name=$account->name;
        $statement->source=$account->accountnumber;
        $statement->destination=$account1->accountnumber;
        $statement->amount=$request->amount;
        $statement->status=1;
        $statement->save();

        $statement=new Statement();
        $statement->name=$account1->name;
        $statement->source=$account->accountnumber;
        $statement->destination=$account1->accountnumber;
        $statement->amount=$request->amount;
        $statement->status=2;
        $statement->save();
Session::forget("client");
Session::put("client",$account);
        $account->update();
        $account1->save();
    return redirect('/client/fundstransfer')->with('status1','votre transfer a été envoyer avec success');


    }
}

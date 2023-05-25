<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Account;
use App\Models\Cashier;

class LoginController extends Controller
{
    //
    public function login()
    {
        if(Session::has('client'))
        {
return redirect('client/home');
        }
        elseif(Session::has('admin'))
        {
            return redirect('admin/home');
        }
        elseif(Session::has('cashier'))
        {
            return redirect('cashier/home');
        }
        else{
            return view ('login.login');
        }
     
    }
    public function clientaccess(Request $request)
    {$account=Account::where('email',$request->email)->first();

        if($account)
        {if($account->password==$request->password)
            {
                Session::put('client',$account);
                return redirect('/client/home');
            }
            else{
                return redirect()->back()->with('status','invalid  password ');
    
            }

        }
        else{
            return redirect()->back()->with('status','invalid mail  ');

        }


    }
    public function clientlogout()
    {
        Session::forget('client');
        return redirect('/login');
    }

    public function cashieraccess(Request $request)
    {
        $cashier=Cashier::where('email',$request->email)->first();

        if($cashier)
        {if($cashier->password==$request->password)
            {
                Session::put('cashier',$cashier);
                return redirect('/cashier/home');
            }
            else{
                return redirect()->back()->with('status','invalid  password ');
    
            }

        }
        else{
            return redirect()->back()->with('status','invalid mail  ');

        }
}
public function cashierlogout()
{
    Session::forget('cashier');
    return redirect('/login');
}
}

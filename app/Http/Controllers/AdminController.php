<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashier;

class AdminController extends Controller
{
    //
    public function home()
    {
        return view('admin.home');
    }
    public function accounts()
    { $cashiers=Cashier::all();
        return view('admin.accounts')->with('cashiers',$cashiers);
    }
    public function addaccounts()
    {
        return view('admin.addnewaccount');
    }
    public function feedback()
    {
        return view('admin.feedback'); 
    }
    public function clientdetails()
    {
        return view('admin.clientdetails');
    }
    public function notice()
    {
        return view('admin.notice');
    }
   public function addcashier(Request $request)

{ $cashier=new Cashier();
    $cashier->email=$request->input('email');
    $cashier->password=$request->input('password');
    $cashier->accounttype= 'Cashier';
    $cashier->save();
   return redirect()->back()->with('status','le compte caissier a été créé avec succés ');

}
public function updatecashier(Request $request)
{

    $cashier=Cashier::find($request->input('id'));
    $cashier->email=$request->input('email');
    $cashier->password=$request->input('password');
    $cashier->update();
    return redirect()->back()->with('status','le compte caissier a été modifié avec succés ');

}
public function deletecashier($id)
{  $cashier=Cashier::find($id);
    $cashier->delete();
    return redirect()->back()->with('status','le compte caissier a été supprimé avec succés ');

}
}

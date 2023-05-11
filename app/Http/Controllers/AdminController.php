<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cashier;
use App\Models\Account;
use App\Models\Statement;

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
public function saveaccount(Request $request)
{
    $this->validate($request,[
        'image' => 'image|max:1999'
    ]);

    $fileNameWithEx=$request->file('image')->getClientOriginalName();
    $filename=pathinfo( $fileNameWithEx ,PATHINFO_FILENAME);
    $Ex=$request->file('image')->getClientOriginalExtension();
    $fileNameTostore= $filename.'_'.time().'.'.$Ex;


    $account=new Account();
    $account->name=$request->input('name');
    $account->accountnumber=$request->input('accountnumber');
    $account->city=$request->input('city');
    $account->email=$request->input('email');
    $account->balance=$request->input('balance');
    $account->phone=$request->input('phone');
    $account->cnic=$request->input('cnic');
    $account->accounttype=$request->input('accounttype');
    $account->address=$request->input('address');
    $account->password= $request->input('password');
    $account->source=$request->input('source');
    $account->photo=$fileNameTostore;
    $account->branchname='branchname';
    $account->branchcode=123455;

    $statement=new Statement();
    $statement->name=$request->input('name');
    $statement->source=$request->input('accountnumber');
    $statement->destination=$request->input('accountnumber');
    $statement->amount=$request->input('balance');
    $statement->status=0;

    $statement->save();
    $account->save();

    $path=$request->file('image')->storeAs('public/account_images',$fileNameTostore);
    return back()->with('status','le compte client a été créé avec succés');

}
}

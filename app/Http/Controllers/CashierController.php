<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Cashier;
use App\Models\Statement;

class CashierController extends Controller
{
    //
    public function home()
    {
        return view('cashier.home');
    }
    public function transaction()
    {
        return view('cashier.transaction');
    }


    public function clienttransfer(Request $request)
    {
        $account=Account::where('accountnumber',$request->accountnumber)->first();

        if($account)
        {
            
        return view('cashier.transaction')->with('account',$account);
            }
           
      
        else{
            return back()->with('status','le numero de compte n éxiste pas');

        }
    }
    public function clientwithdraw(Request $request)
    {

        $account=Account::where('accountnumber',$request->accountnumber)->first();

        $account->balance= $account->balance - $request->amount;


$statement=new Statement();
$statement->name=$account->name;
$statement->source=$account->accountnumber;
$statement->destination=$account->accountnumber;
$statement->amount=$request->amount;
$statement->status=3;

$account->update();
$statement->save();

 return redirect('/cashier/home')->with('status1' ,'votre retrait a été effectué avec success');
       
    }
    public function clientdeposit(Request $request)
    {

        $account=Account::where('accountnumber',$request->accountnumber)->first();

        $account->balance= $account->balance + $request->amount;

        $statement=new Statement();
        $statement->name=$account->name;
        $statement->source=$account->accountnumber;
        $statement->destination=$account->accountnumber;
        $statement->amount=$request->amount;
        $statement->status=0;
        
        $account->update();
        $statement->save();
        return redirect('/cashier/home')->with('status1' ,'votre dépot a été effectué avec success');
    }
}

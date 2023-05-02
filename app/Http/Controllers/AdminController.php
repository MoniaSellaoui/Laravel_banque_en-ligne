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
   
}

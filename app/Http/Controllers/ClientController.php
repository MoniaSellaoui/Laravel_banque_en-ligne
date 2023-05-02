<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home()
    {
        return view('client.home');
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
        return view('client.notice');
    }
    public function feedback()
    {
        return view('client.feedback');
    }
}

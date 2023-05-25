@extends('cashierLayout.master')
@section('title')
   Transaction
@endsection

@section('content')
<div class="row w-100" style="padding: 11px">
    <div class="col">
      <div class="card text-center w-75 mx-auto">
        <div class="card-header">
          Account Information
        </div>  
        <div class="card-body">
          <div class="row">
            <div class="col">
              Account No.
              <input type="text" value="{{$account->accountnumber}}" name="accountnumber" class="form-control " readonly="" required="">
              Account Holder Name.
              <input type="text" class="form-control" value="{{$account->name}}" readonly="" required="">
              Account Holder Bank Name.
              <input type="text" class="form-control" value="{{$account->branchname}}" readonly="" required="">Bank Balance
              <input type="text" class="form-control my-1" value="${{$account->balance}}" readonly="" required="">
            </div>
            @if (Session::has('status1'))
            <div class="alert alert-success">
              {{Session::get('status1')}}
            </div>
                
            @endif
            <div class="col">
              Transaction Process.
              <form action="/cashier/clientwithdraw" method="POST"> 
                @csrf

                <div class="form-group">
                    <input type="hidden" name="accountnumber" value="{{$account->accountnumber}}">
                    <input type="number" class="form-control my-1" name="amount" placeholder="Write Amount for withdraw" max="{{$account->balance}}" required="">
                </div> 

                <button type="submit" name="withdraw" class="btn btn-primary btn-bloc btn-sm my-1"> Withdraw</button>

              </form>
                
              <form action="/cashier/clientdeposit" method="POST"> 
                @csrf

                <div class="form-group">
                    <input type="hidden" name="accountnumber" value="{{$account->accountnumber}}">
                      <input type="number" class="form-control my-1" name="amount" placeholder="Write Amount for deposit" required="">
                </div>

                <button type="submit" name="deposit" class="btn btn-success btn-bloc btn-sm my-1"> Deposit</button>

              </form>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          MCB Bank  
        </div>
      </div>
    </div> 
  </div>
@endsection
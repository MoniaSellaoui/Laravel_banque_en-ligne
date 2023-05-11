@extends('adminLayout.master')
@section('title')
    Home
@endsection

@section('content')

<div class="container">
    <div class="card w-100 text-center shadowBlue">
      <div class="card-header">
        All accounts
      </div>
      <div class="card-body">
       
        <table class="table table-bordered table-sm bg-dark text-white">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Holder Name</th>
              <th scope="col">Account No.</th>
              <th scope="col">Branch Name</th>
              <th scope="col">Current Balance</th>
              <th scope="col">Account type</th>
              <th scope="col">Contact</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <input type="hidden" {{$increment=1}}>
          @foreach ($accounts as $account )
          <tr>
            <th scope="row">{{$increment}}</th>
            <td>{{$account->name}}</td>
            <td>{{$account->accountnumber}}</td>
            <td>{{$account->branchname}}</td>
            <td>{{$account->balance}}</td>
            <td>{{$account->accounttype}}</td>
            <td>{{$account->phone}}</td>
            <td>
              <a href="/admin/clientdetails/{{$account->id}}" class='btn btn-success btn-sm' data-toggle='tooltip' title="View More info">View</a>
              <a href="{{url('admin/notice')}}" class='btn btn-primary btn-sm' data-toggle='tooltip' title="Send notice to this">Send Notice</a>
              <a href="/admin/deleteclient/{{$account->id}}" class='btn btn-danger btn-sm' data-toggle='tooltip' title="Delete this account">Delete</a>
            </td>
          </tr>
          <input type="hidden" {{$increment++}}>
          @endforeach
          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
              
          @endif
      
          
          </tbody>
        </table>
      </div>
      <div class="card-footer text-muted">
        MCB Bank  
      </div>
    </div>
 </div>
    
@endsection



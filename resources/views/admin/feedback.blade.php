@extends('adminLayout.master')
@section('title')
    Feedback
@endsection

@section('content')
    <!-- start content -->
    <div class="container">
      <div class="card w-100 text-center shadowBlue">
        <div class="card-header">
          Feedback from Account Holder
        </div>
        @if (Session::has('status'))
        <div class="alert alert-success">
          {{Session::get('status')}}
        </div>
            
        @endif
        <div class="card-body">
          <table class="table table-bordered table-sm bg-dark text-white">
            <thead>
              <tr>
                <th scope="col">From</th>
                <th scope="col">Account No.</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($messages as $message)
              <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->accountnumber}}</td>
                <td>{{$message->phone}}</td>
                <td>{{$message->message}}</td>
                <td>
                  <a href="/admin/deletemessage/{{$message->id}}" class='btn btn-danger btn-sm' data-toggle='tooltip' title="Delete this Message">Delete</a>
                </td> 
              </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
          MCB Bank  
        </div>
      </div>
    </div>
    <!-- end content -->
@endsection
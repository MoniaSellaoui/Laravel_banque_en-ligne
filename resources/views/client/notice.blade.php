@extends('clientLayout.master')
@section('title')
    Notice
@endsection

@section('content')
     <!-- start content -->
     <div class="container">
        <div class="card  w-75 mx-auto">
          <div class="card-header text-center">
            Notification from Bank
          </div>
          <div class="card-body">
            @foreach ($notices as $notice )

            <div class='alert alert-success'>
              <p>{{$notice->message}}</p>
            </div>
            @endforeach
        
         
          <div class="card-footer text-muted">
          MCB Bank  
          </div>
        </div>
      </div>
      <!-- end content -->
@endsection
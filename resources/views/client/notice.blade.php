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
            <div class='alert alert-success'>Dear Ali,<br>
        Our privacy policy has been changed please visit nearest <kbd> MCB </kbd> branch for new prospectus.
            </div>  
          </div>
          <div class="card-footer text-muted">
          MCB Bank  
          </div>
        </div>
      </div>
      <!-- end content -->
@endsection
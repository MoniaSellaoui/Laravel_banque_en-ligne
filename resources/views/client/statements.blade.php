@extends('clientLayout.master')
@section('title')
    Statements
@endsection

@section('content')
   <!-- start content -->
    <div class="container">
      <div class="card  w-75 mx-auto">
        <div class="card-header text-center">
          Transaction made against you account
        </div>
        <div class="card-body">
          <div class='alert alert-secondary'>You withdraw Rs.1012 from your account at 2017-12-17 08:04:58</div><div class='alert alert-success'>You deposit Rs.600 in your account at 2017-12-17 08:04:39</div><div class='alert alert-success'>You deposit Rs.12 in your account at 2017-12-17 07:59:20</div><div class='alert alert-secondary'>You withdraw Rs.12 from your account at 2017-12-17 07:59:02</div><div class='alert alert-success'>You deposit Rs.1200 in your account at 2017-12-17 07:56:29</div>  
        </div>
        <div class="card-footer text-muted">
        MCB Bank  
        </div>
      </div>
    </div>
    <!-- end content -->
@endsection
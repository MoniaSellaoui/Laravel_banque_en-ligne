@extends('clientLayout.master')
@section('title')
    Funds Transfer
@endsection

@section('content')
    <!-- start content -->
    <div class="container">
        <div class="card  w-75 mx-auto">
          <div class="card-header text-center">
            Funds Transfer
          </div>
          <div class="card-body">
            <form method="POST">
              <div class="alert alert-success w-50 mx-auto">
                <h5>New Transfer</h5>
                <input type="text" name="otherNo" class="form-control " placeholder="Enter Receiver Account number" required>
                <button type="submit" name="get" class="btn btn-primary btn-bloc btn-sm my-1">Get Account Info</button>
              </div>
            </form>
            <br>
            <h5>Transfer History</h5>
            <div class='alert alert-warning'>Transfer have been made for  Rs.200 from your account at 2022-03-28 15:35:46 in  account no.10054777</div>  
          </div>
          <div class="card-footer text-muted">
          MCB Bank  
          </div>
        </div>
      </div>
      <!-- end content -->

@endsection
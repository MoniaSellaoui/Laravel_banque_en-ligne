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
              <tr>
                <td>Ali khan</td>
                <td>10054777</td>
                <td>03356910260</td>
                <td>This is testing message to admin or manager by fk</td>
                <td>
                  <a href="" class='btn btn-danger btn-sm' data-toggle='tooltip' title="Delete this Message">Delete</a>
                </td> 
              </tr>
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
@extends('adminLayout.master')
@section('title')
    Client details
@endsection

@section('content')

    <!-- start content -->
    <div class="container">
      <div class="card w-100 text-center shadowBlue">
        <div class="card-header">
          Account profile for {{$account->name}}<kbd> {{$account->accountnumber}}</kbd>  
        </div>
        <div class="card-body bg-dark text-white">
          <div class="text-center">
            <img src="/storage/account_images/{{$account->photo}}" height="100" width="100" alt="" class="rounded-circle m-2" style="border : 2px solid #FFF;">
          </div>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Name</td>
                <th>{{$account->name}}</th>
                <td>Account No</td>
                <th>{{$account->accountnumber}}</th>
              </tr><tr>
                <td>Branch Name</td>
                <th>{{$account->branchname}}</th>
                <td>Branch Code</td>
                <th>{{$account->branchcode}}</th>
              </tr><tr>
                <td>Current Balance</td>
                <th>{{$account->balance}}</th>
                <td>Account Type</td>
                <th>{{$account->accounttype}}</th>
              </tr><tr>
                <td>Cnic</td>
                <th>{{$account->cnic}}</th>
                <td>City</td>
                <th>{{$account->city}}</th>
              </tr><tr>
                <td>Contact Number</td>
                <th>{{$account->phone}}</th>
                <td>Address</td>
                <th>{{$account->address}}</th>
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
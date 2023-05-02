@extends('adminLayout.master')
@section('title')
    Client details
@endsection

@section('content')

    <!-- start content -->
    <div class="container">
      <div class="card w-100 text-center shadowBlue">
        <div class="card-header">
          Account profile for Fayyaz Khan<kbd>#1513410837</kbd>  
        </div>
        <div class="card-body bg-dark text-white">
          <div class="text-center">
            <img src="{{asset('images/hillary.jpg')}}" height="100" width="100" alt="" class="rounded-circle m-2" style="border : 2px solid #FFF;">
          </div>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Name</td>
                <th>Fayyaz Khan</th>
                <td>Account No</td>
                <th>1513410837</th>
              </tr><tr>
                <td>Branch Name</td>
                <th>Dera Ghazi Khan</th>
                <td>Brach Code</td>
                <th>100101</th>
              </tr><tr>
                <td>Current Balance</td>
                <th>12121</th>
                <td>Account Type</td>
                <th>current</th>
              </tr><tr>
                <td>Cnic</td>
                <th>3240338834902</th>
                <td>City</td>
                <th>Taunsa</th>
              </tr><tr>
                <td>Contact Number</td>
                <th>03356910260</th>
                <td>Address</td>
                <th>Dera Ghazi Khan</th>
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
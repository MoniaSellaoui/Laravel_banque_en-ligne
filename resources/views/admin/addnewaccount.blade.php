

@extends('adminLayout.master')
@section('title')
    Add New Accounts
@endsection

@section('content')


    <!-- start content -->
    <div class="container">
      <div class="card w-100 text-center shadowBlue">
        <div class="card-header">
        New Account Forum
        </div>
        <div class="card-body bg-dark text-white">
          @if (count($errors))
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
            </ul>
          </div>
              
          @endif
          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
              
          @endif
          <table class="table">
            <tbody>
              <tr>
                <form  action="/admin/saveaccount" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <th>Name</th>
                  <td><input type="text" name="name" class="form-control input-sm" required></td>
                  <th>CNIC</th>
                  <td><input type="number" name="cnic" class="form-control input-sm" required></td>
              </tr>
              <tr>
                  <th>Account Number</th>
                  <td><input type="" name="accountnumber" readonly value="{{time()}}" class="form-control input-sm" required></td>
                  <th>Account Type</th>
                  <td>
                    <select class="form-control input-sm" name="accounttype" required>
                      <option value="current" selected>Current</option>
                      <option value="saving" selected>Saving</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <th>City</th>
                  <td><input type="text" name="city" class="form-control input-sm" required></td>
                  <th>Address</th>
                  <td><input type="text" name="address" class="form-control input-sm" required></td>
              </tr>
              <tr>
                  <th>Email</th>
                  <td><input type="email" name="email" class="form-control input-sm" required></td>
                  <th>Password</th>
                  <td><input type="password" name="password" class="form-control input-sm" required></td>
              </tr>
              <tr>
                  <th>Deposit</th>
                  <td><input type="number" name="balance" min="500" class="form-control input-sm" required></td>
                  <th>Source of income</th>
                  <td><input type="text" name="source" class="form-control input-sm" required></td>
              </tr>
              <tr>
                  <th>Contact Number</th>
                  <td><input type="number" name="phone"  class="form-control input-sm" required></td>
                  <th>Photo</th>
                  <td>
                    <input type="file" name="image"  class="form-control input-sm" required>
                  </td>
              </tr>
              <tr>
                <td colspan="4">
                  <button type="submit" name="saveAccount" class="btn btn-primary btn-sm">Save Account</button>
                  <button type="Reset" class="btn btn-secondary btn-sm">Reset</button>
                </form>
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
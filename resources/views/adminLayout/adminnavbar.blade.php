<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
      <img src="{{asset('style/images/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt=""> MCB Bank  
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link {{request()->is('admin/home')?'active':''}}" href="{{url('admin/home')}}">Home </a>
        </li>
        <li class="nav-item ">  <a class="nav-link {{request()->is('admin/accounts')?'active':''}}" href="{{url('admin/accounts')}}">Accounts</a></li>
        <li class="nav-item ">  <a class="nav-link {{request()->is('admin/addnewaccounts')?'active':''}}" href="{{url('admin/addnewaccounts')}}">Add New Account</a></li>
        <li class="nav-item ">  <a class="nav-link {{request()->is('admin/feedback')?'active':''}}" href="{{url('admin/feedback')}}">Feedback</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success">Welecome Manager</button>
          <a href="" data-toggle="tooltip" title="Logout" class="btn btn-outline-danger mx-1" ><i class="fa fa-sign-out fa-fw"></i></a>    
      </form>    
    </div>
  </nav><br><br><br>
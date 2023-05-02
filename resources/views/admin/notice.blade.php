@extends('adminLayout.master')
@section('title')
    notice
@endsection

@section('content')

 
 
    <!-- start content -->
    <div class="container">
      <div class="card w-100 text-center shadowBlue">
        <div class="card-header">
          Send Notice to Ali khan  
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="alert alert-success w-50 mx-auto">
              <h5>Write notice for Ali khan</h5>
              <input type="hidden" name="userId" value="2">
              <textarea class="form-control" name="notice" required placeholder="Write your message"></textarea>
              <button type="submit" name="send" class="btn btn-primary btn-block btn-sm my-1">Send</button>
            </div>
          </form>  
        </div>
        <div class="card-footer text-muted">
          MCB Bank  
        </div>
      </div>
    </div>
    <!-- end content -->


@endsection
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
          @foreach ($statements as $statement)

              @if ($statement->source==Session::get('client')->accountnumber)
                  @if ($statement->status==0)
                      <div class='alert alert-success'>
                        You deposit ${{$statement->amonnt}} in your account at {{$statement->created_at}}
                      </div>
                    @elseif($statement->status==1)
                    <div class='alert alert-primary'>
                      You transfer ${{$statement->amount}} to account num {{$statement->accountnumber}} at {{$statement->created_at}}
                    </div>
                    @elseif($statement->status==3)
                    <div class='alert alert-secondary'>
                      You withdraw ${{$statement->amount}} from your account at {{$statement->created_at}}
                    </div>
                      
                  @endif
                  
              @else
                    @if ($statement->destination==Session::get('client')->accountnumber && $statement->status==2)
                        <div class='alert alert-warning'>
                          You received ${{$statement->amount}} from{{$statement->source}} your account at {{$statement->created_at}}
                        </div>
                    @endif 
              @endif
              
          @endforeach
          
        </div>

        <div class="card-footer text-muted">
        MCB Bank  
        </div>
      </div>
    </div>
    <!-- end content -->
@endsection
@extends('clientLayout.master')
@section('title')
    Home
@endsection

@section('content')
<div class="row w-100" >
    <div class="col" style="padding: 22px;padding-top: 0">
      <div class="jumbotron shadowBlack" style="padding: 25px;min-height: 241px;max-height: 241px">
        <h4 class="display-5">Welecome to MCB Bank</h4>
        <p  class="lead alert alert-warning"><b>Latest Notification:</b>
        hi</p>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('style/images/1.jpg')}}" alt="First slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('style/images/2.jpg')}}" alt="Second slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('style/images/3.jpg')}}" alt="Third slide" style="max-height: 250px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col">
      <div class="row" style="padding: 22px;padding-top: 0">
        <div class="col">
          <div class="card shadowBlack ">
            <img class="card-img-top" src="{{asset('style/images/acount.jpg')}}" style="max-height: 155px;min-height: 155px" alt="Card image cap">
            <div class="card-body">
              <a href="{{url('/client/account')}}" class="btn btn-outline-success btn-block">Account Summary</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadowBlack ">
            <img class="card-img-top" src="{{asset('style/images/transfer.jpg')}}" alt="Card image cap" style="max-height: 155px;min-height: 155px">
          <div class="card-body">
            <a href="{{url('client/fundstransfer')}}" class="btn btn-outline-success btn-block">Transfer Money</a>
          </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding: 22px">
        <div class="col">
          <div class="card shadowBlack ">
            <img class="card-img-top" src="{{asset('style/images/bell.gif')}}" style="max-height: 155px;min-height: 155px" alt="Card image cap">
            <div class="card-body">
              <a href="{{url('client/notice')}}"class="btn btn-outline-primary btn-block">Check Notification</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadowBlack ">
            <img class="card-img-top" src="{{asset('style/images/contacts.gif')}}" alt="Card image cap" style="max-height: 155px;min-height: 155px">
          <div class="card-body">
            <a href="{{url('client/feedback')}}"class="btn btn-outline-primary btn-block">Contact Us</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<!DOCTYPE html>
<html>
  <head>
    <title>Banking</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/font-awesome/css/font-awesome.min.css')}}">
    <script src='{{asset('style/js/jquery-3.2.1.min.js')}}'></script>
    <script src='{{asset('style/js/popper.min.js')}}' ></script>
    <script src='{{asset('style/js/bootstrap.min.js')}}'></script>
    <script type="text/javascript">
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    </script>    
  </head>

  <body style="background:#96D678;background-size: 100%">
    <!-- start navbar -->
 @include('cashierLayout.cashiernavbar')
    <!-- end navbar -->
    <!-- start content -->
    @yield('content')
    <!-- end content -->
  </body>
</html>
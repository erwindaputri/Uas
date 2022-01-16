<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/login') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('public/login') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public/login') }}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('public/login') }}/css/style.css">

    <title>Login To User</title>
  </head>
  <body>

<style type="text/css">
  body{
    background: #FFEBCD;
  background-color: #FFEBCD;
    background: #FFEBCD;    
}
.vertical-offset-100{
    padding-top:100px;
}
</style>


<div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
            <h3 class="panel-title">Login</h3>
        </div>
                 @include('admin.utils.notif')
                <form action="{{url('login')}}" method="post">
                 @csrf
          <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                
            <div class="input-group mb-3">
              <label for="password">Masuk sebagai</label>
              <select name="login_as" class="form-control">
                <option value="1">Pembeli</option>
                <option value="2">Admin</option>
              </select>
            </div>
              <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                  </label>
                </div>
              <button  href="{{url('admin.dashboard')}}" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Login</button>
            </fieldset>
              </form>
          </div>
                </form>
      </div>
    </div>

    <script type="text/javascript">
       $(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
    </script>
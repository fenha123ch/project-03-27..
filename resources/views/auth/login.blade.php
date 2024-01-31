<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('authen/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('authen/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('authen/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('authen/css/style.css')}}">

    <title>Login </title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('authen/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Sign in With  <strong></strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">username</label>
                  <input name="username" type="text" class="form-control" placeholder="your-name" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <span ><a href="{{route('register')}}" class="caption">Sign up</a></span>
                    

                  <span class="ml-auto"><a href="{{route('password.request')}}" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('authen/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('authen/js/popper.min.js')}}"></script>
    <script src="{{asset('authen/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('authen/js/main.js')}}"></script>
  </body>
</html>
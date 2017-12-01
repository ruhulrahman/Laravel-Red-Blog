<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_asset/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Wecome To Admin Login Panel</h1>
                  </div>
                  <p>This project developed by <a style="color:yellow;" href="http://www.facebook.com/Ruhul2233" target="_blank">Ruhul Amin.</a> PHP and laravel programer</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <h4 style="color:red;">
                    <?php
                        $exception = Session::get('exception');
                        if($exception){
                          echo $exception;
                          Session::put('exception', null);
                        }
                    ?>
                  </h4>

                  <h4 style="color:green;">
                    <?php
                        $message = Session::get('message');
                        if($message){
                          echo $message;
                          Session::put('message', null);
                        }
                    ?>
                  </h4>

                  {!! Form::open(['url' => 'admin/admin_login_check', 'method' => 'post']) !!}
                    <div class="form-group">
                      <input id="login-username" type="email" name="admin_email" required="" class="input-material">
                      <label for="login-username" class="label-material">User Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="admin_password" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary">
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  {!! Form::close() !!}
                  <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="{{ URL::to('admin/register') }}" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="{{ asset('admin_asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin_asset/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/charts-home.js') }}"></script>
    <script src="{{ asset('admin_asset/js/front.js') }}"></script>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/resources/assets/admin/css/main.css')}}">
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>{{ $info['sTitle']}}</h1>
      </div>
      <div class="login-box">
		{!! Form::open(['route'=>'login', 'method'=>'post','class'=>'login-form','files'=>'true']) !!}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input type="email" name="email" placeholder="Email" autofocus class="form-control">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
		  <div class="form-group">
                  <label>Captcha</label>
                       {!! Recaptcha::render() !!}
                      @if ($errors->has('g-recaptcha-response'))
                          <span class="help-block">
                              <strong style="color:red">Captcha Field Must Be Selected!</strong>
                          </span>
                      @endif
           </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input name="remember" type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a href="{{ route('password.request') }}">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">SIGN IN <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
         {!! Form::close() !!}
        <form action="index.html" class="forget-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" placeholder="Email" class="form-control">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET <i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a id="noFlip" href="#"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="{{ URL::to('resources/assets/admin/js/jquery-2.1.4.min.js')}}"></script>
  <script src="{{ URL::to('resources/assets/admin/js/essential-plugins.js')}}"></script>
  <script src="{{ URL::to('resources/assets/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::to('resources/assets/admin/js/plugins/pace.min.js')}}"></script>
  <script src="{{ URL::to('resources/assets/admin/js/main.js')}}"></script>
</html>
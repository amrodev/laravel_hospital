<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hospital Admin</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="admin/resources/img/favicon.ico" />
        <link rel="stylesheet"    href="admin/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"    href="admin/vendor/iCheck/all.css" /> 

        <!-- Icons -->
        <link href="admin/resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="admin/resources/icons/themify-icons/themify-icons.css" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="admin/resources/css/main-style.min.css">
        <link rel="stylesheet" href="admin/resources/css/skins/all-skins.min.css">
        <link rel="stylesheet" href="admin/resources/css/demo.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112423372-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112423372-1');
</script>
</head>
    <body class="skin-blue login-page">
        <div class="box-login">
            <div class="box-login-body">
                <h3><span><b>Hospital</b>Admin</span></h3>

                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-5 control-label">E-Mail Address</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-5 control-label">Password</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                {{--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>  --}}
                            </div>
                        </div>
                    </form>


                
            </div>
        </div>
        
        <!-- JS scripts -->
        <script src="vendor/jQuery/jquery-2.2.3.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/iCheck/icheck.min.js"></script>
        <script src="resources/js/pages/jquery-icheck.js"></script>
        <script src="vendor/fastclick/fastclick.min.js"></script>
        <script src="resources/js/demo.js"></script>
    </body>

<!-- Mirrored from pixelcreattor.com/demos/medical/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 15:36:32 GMT -->
</html>

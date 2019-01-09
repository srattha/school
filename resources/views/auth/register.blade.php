
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
         <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="name" value="{{ old('name') }}" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                <label for="lastName">Last name</label>
            </div>
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group">
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required="required">
    <label for="inputEmail">Email address</label>
</div>
@if ($errors->has('email'))
<span class="help-block">
    <strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <div class="form-row">
    <div class="col-md-6">
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
        <label for="inputPassword">Password</label>
    </div>
    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>
<div class="col-md-6">
  <div class="form-label-group">
    <input type="password" id="confirmPassword" class="form-control" name="password_confirmation" placeholder="Confirm password" required="required">
    <label for="confirmPassword">Confirm password</label>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary btn-block" href="login.html">Register</button>
</form>
<div class="text-center">
    <a class="d-block small mt-3" href="/login">Login Page</a>
    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

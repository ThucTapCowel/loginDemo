<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="POST" role="form">
                    <legend>Login Page</legend>
                
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="txtUser"  id="txtUser" placeholder="Username">
                        @if($errors->has('txtUser'))
                        <p style="color:red">{{ $errors->first('txtUser')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="txtPass" id="txtPass" placeholder="Password">
                        @if($errors->has('txtPass'))
                        <p style="color:red">{{ $errors->first('txtPass')}}</p>
                        @endif
                    </div>
                
                    
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
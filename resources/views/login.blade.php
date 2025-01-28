<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/index.css'); }}">
    <link rel="stylesheet" href="{{ asset('css/input.css'); }}">
    <link rel="stylesheet" href="{{ asset('css/login.css'); }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <img src="/assets/images/logo-placeholder.jpg" alt="" class="logo" height="80">
        </div>
        <div class="form-container">
            <div class="form-header">
                <h3>Sign In</h3>
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="input-field">
                    <label for="">Email Address</label>
                    <input type="email" name="email" id="" placeholder="Email Address">
                </div>
                <div class="input-field">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="Password">
                </div>
                <a href="">Forgot Password?</a>
                <br>
                @if ($errors->has('login_error'))
                <div class="error-message">
                    <p>{{ $errors->first('login_error') }}</p>
                </div>
                @endif
                <br>
                <input class="button filled w-100" type="submit" value="Sign in">
            </form>
        </div>
    </div>
</body>

</html>
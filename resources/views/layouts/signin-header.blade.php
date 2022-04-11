<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | GoFundMe</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/signinstyle.css">
</head>
<body>
    <nav class="top-nav">
            <a href="{{ url('/') }}"><img src="../images/gofundme.png" alt="" class="signin-gfm-logo"></a>
        <ul class="signin-ul">
            <li class="signin-newaccount">Do not have an account?</li>
            <li><a class="signin-signup" href="{{ url('sign-up') }}">Sign up</a></li>
        </ul>
    </nav>
    @yield('content')
    </body>
</html>

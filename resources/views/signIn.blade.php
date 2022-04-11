@extends('layouts.signin-header')
@section('content')
   <div class="signin-bodycontent">
        <div class="signin-section">
            <h1 class="signin-heading">Sign in</h1>
            <form action="" method="get" class="signin-form">
                <input class="signin-email" type="email" name="email" id="email" placeholder="Email address" required> 
                <input class="signin-password" type="password" id="pass" name="password" placeholder="Password" minlength="8" required>
            </form>
            <button class="signin-button">Sign in to GoFundMe</button>
            <div class="signin-forgotpassword">Forgot your password?</div>
        </div>
    </div>
@endsection

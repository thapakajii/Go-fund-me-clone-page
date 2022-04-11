<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | GoFundMe</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/signupstyle.css">
</head>
<body>
    <nav class="signup-top-nav">
            <a href="{{ url('/') }}"><img src="../images/gofundme.png" alt="" class="signup-gfm-logo"></a>
        <ul class="signup-ul">
            <li class="signup-newaccount">Already have an account?</li>
            <li><a class="signup-signin" href="{{ url('sign-in') }}">Sign in</a></li>
        </ul>
    </nav>
    <div class="signup-bodycontent">
        <div class="signup-section">
            <h1 class="signup-heading">Sign up</h1>
                <div class="signup-title-one">Do you work for a charity?
                <a class="signup-title-two" href="#charityaccount">Sign up for a charity account</a></div>
            <hr class="first-line">
            <form action="{{ route('register') }}" method="POST" class="signup-names">
            @csrf
                <div class="signup-name">
                    <input class="signup-name" type="text" name="name" id="name" placeholder="Name" required>  
                </div>
            
                <div>
                    <input class="signup-email" type="email" name="email" id="email" placeholder="Email address" required> 
                    <input class="signup-password" type="password" id="pass" name="password" placeholder="Password" minlength="8" required>
                </div>  
                <div> 
                    <input class="signup-password" type="password" id="pass" name="confirm_password" placeholder="Confirm Password" minlength="8" required>
                </div>    
                <div class="signup-promotion">
                    <input type="checkbox" id="scales" name="scales" class="promotion-checkbox">
                    <p class="promotion-text">Get tips to help you make the most of your fundraiser and receive updates about important causes. Unsubscribe at any time.</p>
                </div>
                <input type="submit" class="signup-next-button" value="Next"/>
                <div class="signup-terms">By continuing, you agree to the GoFundMe <a class="GFMterms" href="#terms">terms</a> and you acknowledge receipt of our <a class="GFMpolicy" href="#privacypolicy">privacy policy.</div>
            </form>
    </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFundMe: No.1 Fundraising Platform for Crowdfunding</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <nav>
      <ul>
            <li><a href="#Search">Search</a></li>
            <li><a href="#Individuals">For individuals</a></li>
            <li><a href="#Charities">For Charities</a></li>
      </ul>
            <a href="{{ url('/') }}"><img src="../images/gofundme.png" alt="" class="first-gfm-logo"></a>
        <ul>
            <li><a href="#howitworks">How it works</a></li>
            @if(Auth::user())
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @else
            <li><a href="{{ url('login') }}">Sign in</a></li>
            @endif
            <li><a href="#startafund"><button class="first-start-gfm">Start a GoFundMe</button></a></li>
        </ul>
    </nav>
    @yield('content')
    <div class="ready-for-fundraise">
        <div class="ready-for-fundraise-heading">Ready to start fundraising?</div>
        <button class="ready-for-fundraise-button">Start a GoFundMe</button>
    </div>
    <div class="solid-line-one"></div>
    <footer class="fundraise-footer">
        <div class="first-footer-layout">
            <div class="footer-lists">
                <img src="../images/gofundme.png" alt="" class="footer-img">
                <div class="lists-under-logo">
                    <div class="footer-country">&#127462;&#127482; </div>
                    <div><strong> Australia </strong></div>
                    <div><strong> . </strong></div>
                    <div><strong> English </strong></div>
                </div>    
            </div>
            <div class="footer-lists">
                <h2 class="footer-title">Fundraise For</h2>
                <ul class="footer-nav">
                    <li class="footer-nav-lists">Medical</li>
                    <li class="footer-nav-lists">Emergency</li>
                    <li class="footer-nav-lists">Memorial</li>
                    <li class="footer-nav-lists">Education</li>
                    <li class="footer-nav-lists">Charity</li>
                    <li class="footer-nav-lists">Coronavirus fundraising</li>
                </ul>
                </div>    
            <div class="footer-lists">
                <h2 class="footer-title">Learn More</h2>
                <ul class="footer-nav">
                    <li class="footer-nav-lists">How GoFundMe works</li>
                    <li class="footer-nav-lists">Common questions</li>
                    <li class="footer-nav-lists">Success stories</li>
                    <li class="footer-nav-lists">Supported countries</li>
                    <li class="footer-nav-lists">Charity fundraising</li>
                    <li class="footer-nav-lists">Pricing</li>
                </ul>
                </div>
            <div class="footer-lists">
                <h2 class="footer-title">Resources</h2>
                <ul class="footer-nav">
                    <li class="footer-nav-lists">Help centre</li>
                    <li class="footer-nav-lists">Blog</li>
                    <li class="footer-nav-lists">Press centre</li>
                    <li class="footer-nav-lists">Careers</li>
                    <li class="footer-nav-lists">About</li>
                    <li class="footer-nav-lists">More resources</li>
                </ul>
                </div>
        </div>
        <div class="solid-line-two"></div>
        <div class="second-footer-layout">
            <div class="left-under-lists">
                <div class="footer-terms">&copy; 2010-2022 GoFundMe</div>
                <div class="footer-terms">Terms</div>
                <div class="footer-terms">Privacy</div>
                <div class="footer-terms">Legal</div>
            </div>
            
            <div class="right-under-lists">
                <img src="../images/logo9.png" alt="" class="footer-social">
                <img src="../images/logo10.png" alt="" class="footer-social">
                <img src="../images/logo11.png" alt="" class="footer-social">
                <img src="../images/logo12.png" alt="" class="footer-social">
                <img src="../images/logo13.png" alt="" class="footer-social">
                <img src="../images/logo14.png" alt="" class="footer-social">
            </div>
        </div>    
    </footer>
</body>
</html>
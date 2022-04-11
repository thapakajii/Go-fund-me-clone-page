@extends('layouts.header-footer')
@section('content')

<!-- @foreach($users as $user)
    {{$user->name}}<br/>
    {{ $user->email }}
    @endforeach -->
    <div class="first-content">
        <h1 class="firstheading">Fundraising for the people and charities you care about</h1>
        <br>
        <h2 class="secondheading">Get help. Give kindness. Start in just 5 minutes.</h2>
        <div class="belowheading">
            <button class="startafund">Start a GoFundMe</button>
            <button class="fundwork">  &#9658; See how GoFundMe works</button>
        </div>
    </div>
    <h2 class="featuredheading">Featured</h2>
    <div class="second-content">
        <div class="featured-fund-left">
            <img src="../images/icon4.webp" alt="" class="featured-image"/>
            <h2 class="featured-header-one">Urgent Cause</h2>
            <h2 class="featured-title">How to help: Donate to Ukraine relief efforts</h2>
            <p class="featured-des">Donate to Ukraine relief today. Together, we can support those impacted by the crisis in Ukraine. </p>
            <button class="featured-button">Donate now &#62;</button>
        </div>    
        <div class="featured-fund-right">
            <img src="../images/icon5.jpeg" alt="" class="featured-image"/>
            <h2 class="featured-header-two">Disaster relief</h2>
            <h2 class="featured-title">Emergency flood relief</h2>
            <p class="featured-des">Help those impacted by "the worst floods in decades" across Queensland and New South Wales. Help with urgent relief and long-term recovery efforts.</p>
            <button class="featured-button">Help today &#62;</button>
        </div>    
    </div>
    <h2 class="fundraisers-heading">Top fundraisers</h2>
    <div class="top-fundraisers">
        <div class="fundraiser-one">
            <img src="../images/icon6.webp" alt="" class="fundraiser-img">
            <h2 class="fundraiser-heading">Haymarket NSW</h2>
            <h2 class="fundraising-title">#Enough: Defamation Defence Le...</h2>
            <p class="fundraising-des">On Wednesday October 27, former federal Attorney G...</p>
            <p class="fundraising-lastdonation">Last donation 1d ago</p>
            <hr class="to-collect">
            <p class="fundraising-amount"><strong>$246,131 raised</strong> of $250,000</p>
        </div> 
        <div class="fundraiser-two">
            <img src="../images/icon7.webp" alt="" class="fundraiser-img">
            <h2 class="fundraiser-heading">North Wollongong NSW</h2>
            <h2 class="fundraising-title">DV - Justice for Mackenzie & Elijah.</h2>
            <p class="fundraising-des">If you haven't seen the news, Mackenzie who was only 2...</p>
            <p class="fundraising-lastdonation">Last donation 14m ago</p>
            <hr class="to-collect">
            <p class="fundraising-amount"><strong>$48,555 raised</strong> of $10,000</p>
        </div> 
        <div class="fundraiser-three">
            <img src="../images/icon8.webp" alt="" class="fundraiser-img">
            <h2 class="fundraiser-heading">Padstow NSW</h2>
            <h2 class="fundraising-title">Research to find a cure for brain t...</h2>
            <p class="fundraising-des">As a parent, the most devastating news you can...</p>
            <p class="fundraising-lastdonation">Last donation 37m ago</p>
            <hr class="to-collect">
            <p class="fundraising-amount"><strong>$81,835 raised</strong> of $90,000</p>
        </div>
              
    </div>
    <div class="see-more-fundraise">
            <button class="see-more-button">See more &#62;</button>  
    </div>
    <div class="fundraise-story">
        <div class="story-des">
            <h2 class="story-heading">GoFundMe Fundraising Stories</h2>
            <h2 class="story-title">Downloading hope</h2>
            <p class="story-description">With aboriginal youth commiting suicide at an uprecedented rate, Australia Indegenious Elders raised $239,464 to develop an app that will save young lives.</p>
    
        </div>
        <img src="../images/icon11.jpg" alt="" class="slideshow">
    </div>
    <h2 class="fourth-heading">The leader in online fundraising</h2>
    <div class="fourth-content">
        <div class="content-grid">
            <img src="../images/logo1.png" alt="" class="content-logo">
            <h2 class="content-heading">Worlwide leader</h2>
            <p class="content-description">GoFundMe is trusted around the world for its simple, reliable fundraising platform.</p>
        </div>
        <div class="content-grid">
            <img src="../images/logo2.png" alt="" class="content-logo">
            <h2 class="content-heading">Simple setup</h2>
            <p class="content-description">You can personalise and share your GoFundMe in just a few minutes.</p>
        </div> 
        <div class="content-grid">
            <img src="../images/logo3.png" alt="" class="content-logo">
            <h2 class="content-heading">Secure</h2>
            <p class="content-description">Our Trust & Safety team works around the clock to protect you against fraud.</p>
        </div> 
        <div class="content-grid">
            <img src="../images/logo4.png" alt="" class="content-logo">
            <h2 class="content-heading">Mobile app</h2>
            <p class="content-description">The GoFundMe app makes it simple to launch and manage your fundraiser on the go.</p>
        </div> 
        <div class="content-grid">
            <img src="../images/logo5.png" alt="" class="content-logo">
            <h2 class="content-heading">Social reach</h2>
            <p class="content-description">Harness the power of social media to spread your story and get more support.</p>
        </div> 
        <div class="content-grid">
            <img src="../images/logo6.png" alt="" class="content-logo">
            <h2 class="content-heading">Expert advice</h2>
            <p class="content-description">Our best-in-class customer care specialists will answer your questions, day or night.</p>
        </div>     
    </div>
    <div class="start-a-fund">
        <button class="start-a-fund-button">Start a GoFundMe</button>
    </div>
    <div class="fundraise-app">
        <img src="../images/icon12.jpg" alt="" class="fundraise-app-img">
        <div class="fundraise-app-abt">
            <h2 class="fundraise-app-heading">Available Now</h2>
            <h2 class="fundraise-app-title">The GoFundMe App</h2>
            <p class="fundraise-app-des">Start and manage fundraisers, engage with supporters and discover important causes - all on the go</p>
            <div class="fundraiser-app-logo">
                <img src="../images/logo7.png" alt="" class="fundraise-app-logo">
                <img src="../images/logo8.png" alt="" class="fundraise-app-logo">
            </div>
        </div>
    </div>
@endsection
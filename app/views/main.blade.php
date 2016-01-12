@extends('layouts.master')

@section('title', 'Zachary Gulde')

@section('top-script')
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif' rel='stylesheet' type='text/css'>
@stop

@section('bottom-script')
    <script type="text/javascript" src="js/main.js"></script>
@stop

@section('content')
    <div class="area" id="title-area">
        <h1 class="hero-text-title">Zach Gulde</h1>
        <h5 class="hero-text-subtitle">Web Developer, Weekend Bartender, Full-Time Father</h5>

        <div class="hero-sidebar">
            <a href="http://github.com/zgulde"><i class="fa fa-github"></i></a>
            <a href="mailto:zachgulde@gmail.com"><i class="fa fa-envelope"></i></a>
            <a href=""><i class="fa fa-linkedin-square"></i></a>
            <a href="http://soundcloud.com/intracoastalturnaround"><i class="fa fa-soundcloud"></i></a>
            <a href="codepen.io/zgulde"><i class="fa fa-codepen"></i></a>
            <a href="#contact"><i class="fa fa-info-circle"></i></a>
        </div>
    </div>
    <div id="navbar-space"></div>
    <nav id="navbar">
        <a href="#projects" id="projects-nav">Projects</a>
        <a href="#blog" id="blog-nav">Blog</a>
        <a href="#personal" id="personal-nav">Personal</a>
        <a href="#contact" id="contact-nav">Contact</a>
    </nav>
    <div class="area about-me">
        <div class="container">
            <div class="row">
                <div class="two columns">&nbsp;</div>
                <div class="eight columns">
                    <h3>About Me</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim adipisci nostrum, nobis dolore natus commodi aut quo exercitationem ut repellendus, cumque quidem cupiditate quis ullam doloremque! Doloribus tempore facilis quas!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="area" id="project-area">
        <div class="container">
            <a id="projects" class="navlink"></a>
            <div class="row heading">
                <h2>Projects</h2>
            </div>
            <div class="row project">
                <div class="four columns project-title">
                    <h4><a href="{{ action('HomeController@showSimpleSimon') }}">Simple Simon</a></h4>
                </div>
                <div class="eight columns project-description">
                    <p>Simple Simon game written in HTML, CSS, and JavaScript with Jquery. I spent a lot of time on the sounds -- go play with all the different notes! A major focus for me on this project was UI styling; I wanted the buttons to look great (hover and click on all of them to see what I mean). I also had some fun with CSS animations. I am still working on optimizing the sounds for mobile devices.</p>
                </div>
            </div>
            <div class="row project">
                <div class="four columns project-title">
                    <h4><a href="{{ action('HomeController@showWeatherMap') }}">Weather Map</a></h4>
                </div>
                <div class="eight columns project-description">
                    <p>Weather application written in HTML, CSS, and JavaScript with Jquery. You can check the weather in different levels of detail and see the location on a map. I used the <a href="http://openweathermap.org/api">openweathermap.org</a> and <a href="https://developers.google.com/maps/?hl=en">google maps</a> APIs to create the application. This project was a big learning experience in interacting with APIs and using two different APIs together. I used the Bootstrap CSS framework for this project.</p>
                </div>
            </div>
            <div class="row project">
                <div class="four columns project-title">
                    <h4><a href="http://zgulde.com">zgulde.com</a></h4>
                </div>
                <div class="eight columns project-description">
                    <p>My personal homepage. I wanted to create a clean, simple layout without using a pre-built template, and this page is the result. I had a lot of fun writing the javascript for a docking navbar and using jquery to animate the scrolling to internal page links. I used the <a href="http://getskeleton.com/">skeleton css framework</a> for this project.</p>
                </div>
            </div>
            <div class="row project">
                <div class="four columns project-title">
                    <h4><a href="https://github.com/zgulde/typedMessage">typedMessage.js</a></h4>
                </div>
                <div class="eight columns project-description">
                    <p>I came across <a href="http://lea.verou.me/2011/09/pure-css3-typing-animation-with-steps/">this cool CSS typing animation</a>, and wanted to make it easy to implement. This open-source project is some Javascript that creates a simple API to create cool looking typed messages.</p>
                </div>
            </div>
            <div class="row project">
                <div class="twelve columns project-description">
                    <p>Take a look at my <a href="http://codepen.io/zgulde">codepen</a> for some code snippets.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="area" id="blog-area">
        <div class="container">
            <a id="blog" class="navlink"></a>
            <div class="row heading">
                <h2>Blog</h2>
            </div>
            <div class="row">
                <div class="two columns">
                    <img src="http://placehold.it/500" alt="blog post pic" class="u-max-full-width">
                </div>
                <div class="ten columns">
                    <h3><a href="#">something</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet natus eum, impedit. Officia asperiores pariatur voluptatem quos ad aliquid illo. Saepe sed reprehenderit cupiditate, alias officia nulla ad a temporibus!</p>
                </div>
            </div>
            <div class="row">
                <div class="two columns">
                    <img src="http://placehold.it/500" alt="blog post pic" class="u-max-full-width">
                </div>
                <div class="ten columns">
                    <h3><a href="#">something</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet natus eum, impedit. Officia asperiores pariatur voluptatem quos ad aliquid illo. Saepe sed reprehenderit cupiditate, alias officia nulla ad a temporibus!</p>
                </div>
            </div>
            <div class="row">
                <div class="two columns">
                    <img src="http://placehold.it/500" alt="blog post pic" class="u-max-full-width">
                </div>
                <div class="ten columns">
                    <h3><a href="#">something</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet natus eum, impedit. Officia asperiores pariatur voluptatem quos ad aliquid illo. Saepe sed reprehenderit cupiditate, alias officia nulla ad a temporibus!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="area" id="personal-area">
        <div class="container">
            <a id="personal" class="navlink"></a>
            <div class="row heading">   
                <h2>Personal</h2>
            </div>
            <div class="row personal">
                <div class="twelve columns">
                    <p>When I'm not at work or school I love spending time with my girlfriend, Heather, and my son, Ryan. I also enjoy playing the guitar, drinking craft beer, and listening to terrible jokes.</p>
                </div>
            </div>
            <div class="row personal">
                <div class="six columns">
                    <h3>My Son</h3>
                    <p>Ryan Patrick Gulde was born happy and healthy on January 24th, 2015. He's the baby, not the bear.</p>
                </div>
                <div class="six columns">
                    <img src="/media/ryan-newborn.jpg" alt="Newborn Ryan with a big stuffed bear" class="u-max-full-width">
                </div>
            </div>
            <div class="row personal">
                <div class="six columns">
                    <img src="/media/ryan-bathtime.jpg" alt="ryan in the kitchen sink getting bathed" class="u-max-full-width">
                </div>
                <div class="six columns">
                    <p>Ryan enjoys bathtime, naps, and his walker. He is also very seriuos about his food.</p>
                </div>
            </div>
            <div class="row personal">
                <div class="six columns">
                    <p>Me and the family shortly before stuffing ourselves with turkey.</p>
                </div>
                <div class="six columns">
                    <img src="/media/thanksgiving.jpg" alt="my family on thanksgiving" class="u-max-full-width">
                </div>
            </div>
            <div class="row personal">
                <h3>Music</h3>
                <p>Check me out on <a href="http://soundcloud.com/intracoastalturnaround">soundcloud</a>.</p>
            </div>
        </div>
    </div>
    <div class="area" id="contact-area">
        <div class="container">
            <a class="navlink" id="contact"></a>
            <div class="row heading">
                <h2>Contact Me</h2>
            </div>
            <div class="row contact">
                <div class="twelve columns">
                    <p>Feel free to <a href="mailto:zachgulde@gmail.com">email me</a>, fork me on <a href="http://github.com/zgulde">github</a>, contact me on <a href="">linkedin</a>, or send me a <a class="modal-trigger" target="phone-number">text</a>.</p>
                    <p><a href="{{action('HomeController@showResume')}}">Resume</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="phone-number" class="modal">
        <a href="tel://1-210-473-0725">(210) 473 0725</a>
    </div>
@stop

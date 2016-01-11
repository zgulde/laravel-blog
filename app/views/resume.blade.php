@extends('layouts.master')

@section('title', 'resume')

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="/css/resume.css">
@stop

@section('content')
<div class="container">
    <h1 class="pull-left">Zachary Gulde</h1>

    <div class="pull-right">
        <p>210.473.0725</p>
        <p><a href="mailto:zachgulde@gmail.com">zachgulde@gmail.com</a></p>
        <p><a href="http://zgulde.com">zgulde.com</a></p>
    </div>

    <h4 class="clear">Full Stack Web Developer</h4>

    <hr class="clear">
    
    <div class="row">
        <div class="col-md-8">

            <h1>Skills</h1>

            <h3>Languages and Frameworks</h3>

            <ul>
                <li>PHP
                    <ul>
                        <li>Laravel and Slim frameworks</li>
                    </ul>
                </li>

                <li>Javascript
                    <ul>
                        <li>Angular and Jquery</li>
                        <li>Node.js</li>
                        <li>JSON</li>
                        <li>AJAX</li>
                    </ul>
                </li>

                <li>CSS
                    <ul>
                        <li>SASS</li>
                        <li>Twitter Bootstrap and Skeleton frameworks</li>
                    </ul>
                </li>

                <li>HTML</li>
                <li>Bash</li>
                <li>SQL</li>
                <li>Familiarity with Ruby</li>
            </ul>

            <h3>Technical Skills</h3>

            <ul>
                <li>Working with git version control in a team environment</li>
                <li>bash, node.js, and php scripting</li>
                <li>Comfortable working in a command line linux environment</li>
                <li>Object Oriented Programming</li>
                <li>Model View Controller frameworks</li>
                <li>Relational Database Managment Systems</li>
                <li>Responsive Design</li>
            </ul>

            <h3>Other</h3>

            <ul>
                <li>Strong Interpersonal skills gained from almost 10 years of customer service experience</li>
                <li>Detail Oriented</li>
                <li>Experience in multiple leadership roles</li>
            </ul>

            <h1>Work Experience</h1>

            <p><strong>Applebee's</strong> <em>2012 - present</em></p>

            <ul>
                <li>Lead Trainer for multiple positions</li>
                <li>Work in leadership positions not only as a trainer, but also as a closing server and bartender</li>
            </ul>

            <p><strong>Transportation Services at Texas A&amp;M Univeristy</strong> <em>2010 - 2012</em></p>

            <p><strong>Chick-fil-A</strong> <em>2006 - 2010</em></p>

            <ul>
                <li>Was quickly promoted to Team Leader position</li>
            </ul>

            <h1>Education</h1>

            <p><strong>Codeup Full Stack Bootcamp</strong> <em>graduated february 2016</em></p>

            <p><strong>Texas A&amp;M University</strong> <em>coursework completed towards degree in anthropology</em></p>

            <ul>
                <li>13 hours of computer science coursework</li>
            </ul>

            <p><strong>Central Catholic High School</strong> <em>graduated may 2008</em></p>

        </div>

        <div class="col-md-4">
            <h1>Projects</h1>
            
            <h3><a href="{{ action('HomeController@showSimpleSimon') }}">Simple Simon</a></h3>
            <p>Simple Simon game written in HTML, CSS, and JavaScript with Jquery. I spent a lot of time on the sounds -- go play with all the different notes! A major focus for me on this project was UI styling; I wanted the buttons to look great (hover and click on all of them to see what I mean). I also had some fun with CSS animations. All of the CSS for this project is custom.</p>
            
            <h3><a href="{{ action('HomeController@showWeatherMap') }}">Weather Map</a></h3>
            <p>Weather application written in HTML, CSS, and JavaScript with Jquery. You can check the weather in different levels of detail and see the location on a map. I used the <a href="http://openweathermap.org/api">openweathermap.org</a> and <a href="https://developers.google.com/maps/?hl=en">google maps</a> APIs to create the application. This project was a big learning experience in interacting with APIs and using two different APIs together. I used the Bootstrap CSS framework for this project.</p>

            <h3><a href="http://zgulde.com">zgulde.com</a></h3>
            <p>My personal homepage. I wanted to create a clean, simple layout without using a pre-built template, and this page is the result. I had a lot of fun writing the javascript for a docking navbar and using jquery to animate the scrolling to internal page links. I used the <a href="http://getskeleton.com/">skeleton css framework</a> for this project.</p>

            <h3><a href="https://github.com/zgulde/typedMessage">typedMessage.js</a></h3>
            <p>I came across <a href="http://lea.verou.me/2011/09/pure-css3-typing-animation-with-steps/">this cool CSS typing animation</a>, and wanted to make it easy to implement. This open-source project is some Javascript that creates a simple API to create cool looking typed messages.</p>

        </div>
    </div>

</div>
@stop

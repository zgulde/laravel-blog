"use strict";
$(document).ready(function(){
    var $body = $('body');
    var $window = $(window);
    var $dom = $(document);
    var navOffsetTop = $('#navbar').offset().top;


    function resize() {
        $body.removeClass('navbar-docked');
        navOffsetTop = $('#navbar').offset().top;
        onScroll();
    }

    $('#projects').text('color','red');

    function onScroll() {
        var windowPosition = $window.scrollTop();

        var projectsOffset = $('#projects').offset().top;
        var blogOffset = $('#blog').offset().top;
        var personalOffset = $('#personal').offset().top;
        var contactOffset = $('#contact').offset().top - 20;

        //set current navlink
        $('#navbar a').removeClass('nav-current');

        if(windowPosition >= projectsOffset && windowPosition < blogOffset){
            $('#projects-nav').addClass('nav-current');
        } else if (windowPosition >= blogOffset && windowPosition < personalOffset) {
            $('#blog-nav').addClass('nav-current');
        } else if(windowPosition >= personalOffset && windowPosition < contactOffset){
            $('#personal-nav').addClass('nav-current');
        } else if(windowPosition >= contactOffset){
            $('#contact-nav').addClass('nav-current');
        }

        //navbar docking
        if(navOffsetTop < windowPosition && !$body.hasClass('navbar-docked')) {
            $body.addClass('navbar-docked');
        } else if(navOffsetTop > windowPosition && $body.hasClass('navbar-docked')) {
            $body.removeClass('navbar-docked');
        }

        // hero sidebar
        if (windowPosition > 250) {
            $('.hero-sidebar').css({
                right: '-50px'
            });
        } else {
            $('.hero-sidebar').css({
                right: '10px'
            });
        }
    }

    function openModal($modal){
        $modal.addClass('modal-open');
        setTimeout( function(){
            $dom.on('click',function(e){
                if ( (e.target != $modal.get(0) ) && (e.target != $modal.children().get(0) ) ) {
                    $modal.removeClass('modal-open');
                    $dom.off('click')
                }
            });
        }, 300);
    }

    $('.modal-trigger').on('click',function(){
        var $modal = $('#'+$(this).attr('target'));
        openModal($modal);
    });

    $window.on('scroll', onScroll);
    $window.on('resize', resize);

    $('#navbar a').on('click',function(e){
        var scrollLocation = $( $(this).attr('href') ).offset().top;
        e.preventDefault();

        // the proper section was not highlighting on mobile devices, for some 
        // reason this fixes it
        if ($window.scrollTop() < navOffsetTop) scrollLocation += 20;

        $('body, html').animate({"scrollTop": scrollLocation}, 500);
    });


});

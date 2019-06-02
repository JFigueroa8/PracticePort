$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
    });

    $('.top-nav .nav-link').on('click', function() {
        $('.menu-toggle').removeClass('open');
        $('.top-nav').removeClass('open');
    });

    $('nav a[href*="#"]').on('click', function() {
       $('.arrows-container').css('visibility', 'hidden');
       $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
       }, 2000);
    });

    $('#up').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
       }, 1000);
    });

    $('#down').on('click', function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50
       }, 1000);
       $('.arrows-container').css('visibility', 'hidden');
    });

    $('#down').on('tapstart', function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50
       }, 1000);
       $('.arrows-container').css('visibility', 'hidden');
    });

    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    });

});
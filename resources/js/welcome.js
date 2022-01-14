$("header").addClass('d-none');
$("header").addClass('fixed-top');
$(".navbar").addClass('mb-5');
$('button#menuBtn').addClass('d-none');


$(document).ready(function () {

    var headerSection = $("header");
    var menuBtn = $('button#menuBtn');
    var topScrollSection = $("section.description").offset();
    topScrollSection = topScrollSection.top;


    // check position of section header for show header
    $(window).on('scroll', function () {

        var scroll = $(window).scrollTop();
        var w = window.innerWidth;

        if (scroll < topScrollSection){

            headerSection.addClass('d-none');
            menuBtn.addClass('d-none');

        } else {

            headerSection.removeClass('d-none');
            menuBtn.removeClass('d-none');

        }

    });


    // toggle of card description
    $("button").on('click', function() {

        $(this).parent().toggleClass("open");

    });

});
$("header").addClass('d-none');


$(document).ready(function () {


    $(window).scroll(function () {

        var scroll = $(window).scrollTop();
        var w = window.innerWidth;

        if ((scroll < 1116 && w > 400) || (scroll < 1668 && w <= 400)){
            $("header").addClass('d-none');
        } else {
            $("header").removeClass('d-none');
        }

    });

});
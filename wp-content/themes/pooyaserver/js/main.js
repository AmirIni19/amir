$('#main_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('#multi_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    },
    dots:true,
    autoplay:true,
    autoplayTimeout:5000
})

$('#course_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    },
    dots:false,
    autoplay:false,
})



$('#related_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    },
    dots:true,
    autoplay:true,
})


$(document).ready(function (){
    $('.search-icon').click(function (){
        $('.searchbox').slideToggle();
    })
});

$(document).ready(function (){
    $('.lesson-course > ul > li').click(function (){
        $(this).find('ul').slideToggle();
    })
});

$(document).ready(function (){
    $('#access_title').click(function (){
        $('.list-access-dl').slideToggle();
    })
});
$(document).ready(function (){
    $('#hamberger').click(function (){
        $('.navigation').slideToggle();
    })
    $('.navigation ul.sub-menu').before("<i class='sub-menu-arrow fa fa-angle-left'></i> ");


    $( ".navigation .sub-menu-arrow" ).click(function() {
        if($(this).hasClass("fa-angle-left")) {
            $(this).next("ul.sub-menu").slideToggle();
            $(this).removeClass("fa-angle-left").addClass("fa-angle-down");
        }
        else {
            $(this).next("ul.sub-menu").hide(500);
            $(this).removeClass("fa-angle-down").addClass("fa-angle-left");
        }

    });
});

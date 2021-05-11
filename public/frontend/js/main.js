var slider3 = {slidesToShow: 3, slidesToScroll: 3, autoplay: true, autoplaySpeed: 3000, infinite: true, arrows: true, responsive: [{breakpoint: 601, settings: {slidesToShow:1,slidesToScroll:1}}]}

//header active nav
if(window.location.pathname === "/") {
    $('header .pagewrapper nav ul li:first-child').addClass('active');
}else {
    $("header nav ul li a").each(function(){
        if(window.location.pathname !== "/" && $(this).attr('href').indexOf(window.location.pathname) > 0) {
            $(this).closest('li').addClass('active');
        }
    });
}

//mobile header active
$("#mobnav").click(function(){
    if(!$('header').hasClass('active')) {
        $('header .mob-dropdown').slideDown(200);
        $('header').addClass('active');
        $('body, html').css('overflow-y', 'hidden');
    }
});
$("#close-nav").click(function(){
    if ($('header').hasClass('active')) {
        $('header .mob-dropdown').slideUp(200);
        $('header').removeClass('active');
        $('body, html').css('overflow-y', 'initial');
    }
});

//desktop open faq
$(".faq-desk").click(function(){
    $('.faq-desktop').fadeIn(200);
    $('body, html').css('overflow-y', 'hidden');
});
//desktop faq close
$(".faq-desktop .faq-lbox-cont .clsbtn").click(function(){
    $(".faq-list li.active .faq-content").slideUp(200);
    $(".faq-list li.active").removeClass('active');
    $('.faq-desktop').fadeOut(200);
    $('body, html').css('overflow-y', 'initial');
});
//open faq mobile
$(".faq").click(function(){
    $('header .mob-dropdown .menu').fadeOut(200, function(){
        $('header .mob-dropdown .faqs').fadeIn(200);
    })
});
//faq footer
$(".faq-footer").click(function(){
    if ($(window).width() > 999) {
        $('.faq-desktop').fadeIn(200);
        $('body, html').css('overflow-y', 'hidden');
    } 
    else {
        if(!$('header').hasClass('active')) {
            $("header .mob-dropdown .menu").fadeOut(100);
            $("header .mob-dropdown .faqs").fadeIn(100);
            $('header .mob-dropdown').slideDown(400);
            $('header').addClass('active');
            $('body, html').css('overflow-y', 'hidden');
        }
    }
});
//close faq section mobile
$("#close-faq").click(function(){
    $(".faq-list li.active .faq-content").slideUp(200);
    $(".faq-list li.active").removeClass('active');
    $('header .mob-dropdown .faqs').fadeOut(200, function(){
        $('header .mob-dropdown .menu').fadeIn(200);
    })
    $('body, html').css('overflow-y', 'initial');
});

//faqs tabs
$(".faq-top").click(function(){
    if (!($(this).closest('li').hasClass('active'))) {
        $(".faq-list li.active .faq-content").slideUp(200);
        $(".faq-list li.active").removeClass('active');
        $(this).next('.faq-content').slideDown(200);
        $(this).closest('li').addClass('active')
    }else {
        $(this).next('.faq-content').slideUp(200);
        $(this).closest('li').removeClass('active')
    }
});

//accord tabs
$(".accord-top").click(function(){
    if (!($(this).closest('li').hasClass('active'))) {
        $(".accordion li.active .accord-content").slideUp(200);
        $(".accordion li.active").removeClass('active');
        $(this).next('.accord-content').slideDown(200);
        $(this).closest('li').addClass('active')
    }else {
        $(this).next('.accord-content').slideUp(200);
        $(this).closest('li').removeClass('active')
    }
});

// sliders responsive
if($(window).width() <= 999) {
    //home projects list
    // if($(".project-list").length)
    //     $(".project-list").slick(slider3)
}
$(window).resize(function(){
    if($(window).width() <= 999) {
        //home projects list
        // if($(".project-list").length)
        //     $(".project-list").slick(slider3)

        if ($('.faq-desktop').css('display') === 'block')
            $('.faq-desktop').fadeOut(100);
    }
    else{
        //home projects list
        // if($(".project-list").length)
        //     $(".project-list").slick('unslick');
    }
});
$(window).on('orientationchange', function(){
    if($(window).width() <= 999) {
        //home projects list
        // if($(".project-list").length)
        //     $(".project-list").slick(slider3)
        
        if ($('.faq-desktop').css('display') === 'block')
            $('.faq-desktop').fadeOut(100);
    }
    else{
        //home projects list
        // if($(".project-list").length)
        //     $(".project-list").slick('unslick')
    }
})

//pagination simple
$(".pagination li a").each(function(){
    if($(this).attr('href') === window.location.search) {
        $(".pagination li").removeClass('active');
        $(this).closest('li').addClass('active');
    }
})





//DITO LAHAT NG GET STARTED FUNCTIONS 
//GET STARTED FUNCTIONS
//hide footer in get started

//STEP 2 global variables


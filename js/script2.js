$(document).ready(function () {
    $('.bx1').bxSlider({
        auto:true,
        speed:500,
        pause:4000
    });
    
    
    if($('html').width() > 480){
        $('.con4_slide').bxSlider({
        slideWidth:'250%',
        maxSlides:5,
        minSlides:1,
        pager:false
    });
    }
    
    if($('html').width() <= 480){
        $('.con4_slide').bxSlider({
        slideWidth:'450%',
        maxSlides:1,
        minSlides:1,
        pager:false
    });
    }

    $('.owl0').owlCarousel({
        loop: true,
        margin:30,
        nav:true,
        navText:["<img src='images/left_button.png'>","<img src='images/right_button.png'>"],
        navElement:'div',
        navClass:['owl-prev','owl-next'],
        navContainerClass:'owl-nav',
        dots:false,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });
    
//    $('.owl1').owlCarousel({
//        loop: true,
//        margin:0,
//        nav:true,
//        navText:["<img src='images/left_button.png'>","<img src='images/right_button.png'>"],
//        navElement:'div',
//        navClass:['owl-prev','owl-next'],
//        navContainerClass:'owl-nav',
//        dots:false,
//        responsive:{
//            0:{
//                items:1
//            },
//            500:{
//                items:2
//            },
//            1000:{
//                items:5
//            }
//        }
//    });
    
    $('.owl-prev').mouseenter(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("button","button_hover"))
    })
    
    $('.owl-prev').mouseleave(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("button_hover","button"))
    })
    
    $('.owl-next').mouseenter(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("button","button_hover"))
    })
    
    $('.owl-next').mouseleave(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("button_hover","button"))
    })
    
    
 
        $('.top_arrow').click(function(){
            $('html,body').animate({
                scrollTop : $('html,body').position().top
            })
        })

    
//    $('.one_depth').click(function(){
//        $('.two_depth').stop().slideUp()
//        $(this).children('.two_depth').stop().slideToggle()
//        $('.one_depth img').removeClass('rotate')
//        $(this).find('img').addClass('rotate')
//    })
//    
//    $('.join_search').click(function(){
//        $('.search_popup').fadeIn()
//        $('.m_menu').animate({
//            left : '-100%'
//        },1000)
//        $('.m_menu_btn').show()
//        $('.m_close').hide()
//        $('.m_close').animate({
//            left : 20
//        })
//        
//        $('.header_up').animate({
//            marginLeft : 0
//        })
//        $('.m_bg').fadeOut()
//    })
//    
//    $('.search_close').click(function(){
//        $('.search_popup').fadeOut()
//    })
//    
//    if($('html').width() > 768){
//        $('.m_menu_btn').click(function(){
//        $('.m_menu').animate({
//            left : 0
//        })
//        
//        $('.m_close').animate({
//            left : 230
//        })
//            
//        $('.m_bg').fadeIn()
//        
//        $('.m_menu_btn').hide()
//        $('.m_close').show()
//        
//        $('.header_up').animate({
//            marginLeft : 220
//        })
//    })
//    
//    $('.m_close').click(function(){
//        $('.m_menu').animate({
//            left : '-100%'
//        },1000)
//        $('.m_menu_btn').show()
//        $('.m_close').hide()
//        $('.m_close').animate({
//            left : 20
//        })
//        
//        $('.header_up').animate({
//            marginLeft : 0
//        })
//        $('.m_bg').fadeOut()
//    })
//    }
//    
//    if($('html').width() <= 768){
//        $('.m_menu_btn').click(function(){
//        $('.m_menu').animate({
//            left : 0
//        })
//        
//        $('.m_close').animate({
//            left : 230
//        })
//        
//        $('.m_bg').fadeIn()    
//            
//        $('.m_menu_btn').hide()
//        $('.m_close').show()
//        
//    })
//    
//    $('.m_close').click(function(){
//        $('.m_menu').animate({
//            left : '-100%'
//        },1000)
//        $('.m_menu_btn').show()
//        $('.m_close').hide()
//        $('.m_close').animate({
//            left : 20
//        },1000)
//        $('.m_bg').fadeOut()
//        
//    })
    
    
//    $('.click1').click(function(){
//        $('.click1').removeClass('active')
//        $(this).addClass('active')
//    })
//    
//    $('.click2').click(function(){
//        $('.click2').removeClass('active')
//        $(this).addClass('active')
//    })
//    
//    $('.click1').eq(0).trigger('click')
//    $('.click2').eq(0).trigger('click')
//});

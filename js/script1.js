$(document).ready(function(){
    $('.bx1').bxSlider();
    
    
    if($('html').width() > 480){
        $('.con4_slide').bxSlider({
        slideWidth:'250%',
        maxSlides:5,
        minSlides:1
    });
    }
    
    if($('html').width() <= 480){
        $('.con4_slide').bxSlider({
        slideWidth:'400%',
        maxSlides:1,
        minSlides:1
    });
    }
    
    $(".main1_carousel").owlCarousel({
        loop: true,
        nav: true,
        margin:4,
        dots: false,
        autoWidth:true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            }
          }
    });
    
    $(".main1_carousel1").owlCarousel({
        loop: true,
        nav: true,
        margin:20,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 2
            }
          }
    });
    
    
    $('.one_depth').click(function(){
        $('.two_depth').stop().slideUp()
        $(this).children('.two_depth').stop().slideToggle()
        $('.one_depth img').removeClass('rotate')
        $(this).find('img').addClass('rotate')
    })
    
    $('.join_search').click(function(){
        $('.search_popup').fadeIn()
        $('.m_menu').animate({
            left : '-100%'
        },1000)
        $('.m_menu_btn').show()
        $('.m_close').hide()
        $('.m_close').animate({
            left : 20
        })
        
        $('.header_up').animate({
            marginLeft : 0
        })
        $('.m_bg').fadeOut()
    })
    
    $('.search_close').click(function(){
        $('.search_popup').fadeOut()
    })
    
    if($('html').width() > 768){
        $('.m_menu_btn').click(function(){
        $('.m_menu').animate({
            left : 0
        })
        
        $('.m_close').animate({
            left : 230
        })
            
        $('.m_bg').fadeIn()
        
        $('.m_menu_btn').hide()
        $('.m_close').show()
        
        $('.header_up').animate({
            marginLeft : 220
        })
    })
    
    $('.m_close').click(function(){
        $('.m_menu').animate({
            left : '-100%'
        },1000)
        $('.m_menu_btn').show()
        $('.m_close').hide()
        $('.m_close').animate({
            left : 20
        })
        
        $('.header_up').animate({
            marginLeft : 0
        })
        $('.m_bg').fadeOut()
    })
    }
    
    if($('html').width() <= 768){
        $('.m_menu_btn').click(function(){
        $('.m_menu').animate({
            left : 0
        })
        
        $('.m_close').animate({
            left : 230
        })
        
        $('.m_bg').fadeIn()    
            
        $('.m_menu_btn').hide()
        $('.m_close').show()
        
    })
    
    $('.m_close').click(function(){
        $('.m_menu').animate({
            left : '-100%'
        },1000)
        $('.m_menu_btn').show()
        $('.m_close').hide()
        $('.m_close').animate({
            left : 20
        },1000)
        $('.m_bg').fadeOut()
        
    })
    }
    

    
        
    
    
    $('.click1').click(function(){
        $('.click1').removeClass('active')
        $(this).addClass('active')
    })
    
    $('.click2').click(function(){
        $('.click2').removeClass('active')
        $(this).addClass('active')
    })
    
    $('.click3').click(function(){
        $('.click3').removeClass('active')
        $(this).addClass('active')
    })
    
    $('.click1').eq(0).trigger('click')
    $('.click2').eq(0).trigger('click')
    $('.click3').eq(0).trigger('click')
});
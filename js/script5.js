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
    
    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoWidth:true,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
          }
    });
    
    $(".owl-carousel").on('changed.owl.carousel', function(event) {
        $('.img').mouseenter(function(){
            $(this).children('.hover').fadeIn()
        })
        
        $('.img').mouseleave(function(){
        $(this).children('.hover').fadeOut()
        })
    })

    
    
   
        $('.top_arrow').click(function(){
            $('html,body').animate({
                scrollTop : $('html,body').position().top
            })
        })

    
    
    
    $('.more_btn').mouseenter(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("icon","icon_hover"))
    })
    
    $('.more_btn').mouseleave(function(){                            $(this).find("img").attr("src",$(this).find("img").attr("src").replace("icon_hover","icon"))
    })

    
    $('.num1').click(function(){
        $('.num1').removeClass('color')
        $(this).addClass('color')
    })
        
    $('.num1').eq(0).trigger('click')
    
    $('.num2').click(function(){
        $('.num2').removeClass('color')
        $(this).addClass('color')
    })
        
    $('.num2').eq(0).trigger('click')
    
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
    
    $('.con1_con').mouseenter(function(){
        $(this).siblings('.con_hover').fadeIn()
    })
    
    $('.con_hover').mouseleave(function(){
        $('.con_hover').fadeOut()
    })
    
    $('.click1').eq(0).trigger('click')
    $('.click2').eq(0).trigger('click')
    $('.click3').eq(0).trigger('click')
});
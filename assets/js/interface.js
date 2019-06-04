/**	
	* Template Scripts
	* Created by DK

	Custom JS
	
	1. Btn Subir ao Topo
    2.
    3.
    4.
    5.
    6.
    7.
    8.
	13. PRELOADER 
	
	
**/

/* ----------------------------------------------------------- */
/*  FUNCTIONS
/* ----------------------------------------------------------- */


    

    /* ----------------------------------------------------------- */
    /*  Show or Hide ScrollToTop div
    /* ----------------------------------------------------------- */
    $(document).scroll(function () {
        var y = $(this).scrollTop();

        if (y > 600) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    
    });



    /* ----------------------------------------------------------- */
    /*  Menu Top Stick
    /* ----------------------------------------------------------- */ 
    $(document).scroll(function () {
    var y = $(this).scrollTop();

    if (y > 200) {
        $('header').addClass('compact');
        $('.site-title').addClass('compact1');
        $('.home').addClass('compact-home');
        $('.portfolio-presentation').addClass('compact-port');
    } else {
        $('header').removeClass('compact');
        $('.site-title').removeClass('compact1');
        $('.home').removeClass('compact-home');
        $('.portfolio-presentation').removeClass('compact-port');
    }

    });

    
    
/* ----------------------------------------------------------- */
/*  ****** DOCUMENT READY *******
/* ----------------------------------------------------------- */
$(document).ready(function(){


    try{
        

    }catch(e){}

    // MSG ENVIO EMAIL
    try{
        $(".msg-email").append("<a href='' class='close'>X</a>");

        $('.close').click(function(e) {
            event.preventDefault();
            $(".msg-email").fadeOut('slow');      
        });


    }catch(e){}


    //SCROLLORAMA
	try{
		// initialize the plugin, pass in the class selector for the sections of content (blocks)
		var scrollorama = $.scrollorama({ blocks:'.scrollblock' });
			
        // assign function to add behavior for onBlockChange event
        scrollorama.onBlockChange(function() {
            var i = scrollorama.blockIndex;
            $('#console')
                .css('display','block')
                .text('onBlockChange | blockIndex:'+i+' | current block: '+scrollorama.settings.blocks.eq(i).attr('id'));
        });			

			
        // animate the parallaxing
        scrollorama
            .animate('#parallax1',{ delay: 400, duration: 1200, property:'top', start:400, end:-1300 })
            .animate('#parallax1',{ duration: 1800, property:'rotate', start:720 })
            .animate('#parallax2',{ delay: 400, duration: 900, property:'top', start:100, end:-2000 })
            .animate('#parallax3',{ delay: 600, duration: 1000, property:'top', start:500, end:-1800 })
            .animate('#parallax3',{ duration: 1000, property:'rotate', start:420 })
            .animate('#parallax4',{ delay: 300, duration: 2000, property:'top', start:300, end:-1700 })
            .animate('#parallax4',{ duration: 2000, property:'rotate', start:120 });

	}catch(e){}

    // Bloquear o click novamente na lingua atual
    try {
        var $link = $('.barra-init ').find("li a.active");
        $link.click(function( event ) {
            event.preventDefault();       
        });
    } catch (t) {
        console.log(t);
    }


    // Hambuguer Menu
    try {
        $(".item-hamburguer, .menu-item a").click(function() {
            $("header, .menu-overlay, .ham").toggleClass("active");
        })
    } catch (t) {
        console.log(t)
    }

           
    /*  1. HTML FadeIn 🌵
	/* ----------------------------------------------------------- */
    $( "html" ).fadeIn('slow');

    
    // EFEITO MENU
    $('.menu-item a').hover(function() {
          $( this ).append( $( "<span class='ball1 animated fadeInUp delay-30ms'><img src='assets/img/ball1.png' alt=''></span>" ) );
          $( this ).prepend( $( "<span class='ball2 animated fadeInUp'><img src='assets/img/ball2.png' alt=''></span>" ) );
          $( this ).prepend( $( "<span class='ball3 animated fadeInUp delay-50ms '><img src='assets/img/ball3.png' alt=''></span>" ) );

          $( this ).addClass('animated tada');

        }, function() {
          $( this ).find( "span" ).remove();
        });
      

    
});


// Controle do footer - FadeOut se nao estiver perto do footer
  $(document).scroll(function () {
        var y = $(this).scrollTop();
        var x = $( document ).height();

        if (y >= x - 1000) {
            $('footer .container').fadeIn();
        } else {
            $('footer .container').fadeOut();
        }
    
    });



   



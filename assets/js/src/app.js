/**
 * Created by vnilov on 9/22/15.
 */
$(function(){
    
    /* menu */

    var activeClass = 'main-menu--active';
    var hamActiveClass = 'hamburger--active';
    
    function closeMenu(hamburger){
        $('.js-main-menu').removeClass(activeClass);
        $(hamburger).removeClass(hamActiveClass);
    }
    
    $('.js-hamburger').on('click', function(e){
        e.preventDefault();
        
        if ($('.js-main-menu').hasClass(activeClass)) {
            closeMenu($(this));
        } else {
            $('.js-main-menu').addClass(activeClass);
            $(this).addClass(hamActiveClass);

            $('.'+activeClass).on('click',function(a){
                a.preventDefault();
                closeMenu('.js-hamburger');
            });
        }
    });
    

    

    /* smooth scroll */
    smoothScroll.init({});


    /* accordion behaviour */
    $( "#workExperience" ).accordion({
        header: '.year',
        collapsible: true,
        heightStyle: 'content',
        icons: { "header": "mdi mdi-arrow-right", "activeHeader": "mdi mdi-arrow-down" },
        activate: function( event, ui) {
            var id = $('.year.ui-accordion-header-active').attr('id');
            
            if (id != undefined) {
                smoothScroll.animateScroll(
                    null,
                    '#' + $('.year.ui-accordion-header-active').attr('id'),
                    {    
                        callback: function ( toggle, anchor ) {
                            setTimeout( function() {
                                if ($('.header').hasClass('headroom--pinned')){
                                    $('.header').removeClass('headroom--pinned');
                                    $('.header').addClass('headroom--unpinned');
                                }
                                //console.log("remove menu");
                            }, 200);
                        }
                    }
                );
            }
        }
    });

    $( ".experience" ).accordion({
        header: '.project__name',
        collapsible: true,
        heightStyle: 'content'
    });

    
    /* headroom */
    $(".header").headroom({
       
    });
});
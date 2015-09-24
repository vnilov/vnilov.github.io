/**
 * Created by vnilov on 9/22/15.
 */

    /* menu */
    $('.js-hamburger').on('click', function(e){
        e.preventDefault();
        var activeClass = 'main-menu--active';
        if ($('.js-main-menu').hasClass(activeClass)) {
            $('.js-main-menu').removeClass(activeClass);
        } else {
            $('.js-main-menu').addClass(activeClass);
        }
    });

     




    /* accordion behaviour */
    $( "#workExperience" ).accordion({
        header: '.year',
        collapsible: true,
        heightStyle: 'content',
        activate: function( event, ui) {
            
        }
    });
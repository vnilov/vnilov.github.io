/**
 * Created by vnilov on 9/6/15.
 */




/* smooth scroll plugin init */
smoothScroll.init();




/* menu for_Rob collapse behaviour */
$('#bd-main-nav').on('show.bs.collapse', function(){ $('.js-nav-right').removeClass('pull-right'); });
$('#bd-main-nav').on('hidden.bs.collapse', function(){ $('.js-nav-right').addClass('pull-right'); });

$('.js-nav-link').on('click', function(){$('#bd-main-nav').collapse('hide');});





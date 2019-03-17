jQuery(document).ready(function($){
// Add your custom jQuery here

  var menuRight = $('#test-menu-right').slideMenu({
      submenuLinkAfter: ' &#8594;',
      backLinkBefore: '&#8592; '
  });

  $('.hamburger').click(function()
  {
    $('.hamburger').toggleClass('is-active');

    if ($('.hamburger').hasClass("is-active")) {
//         $('main').css('margin-right','320px');
//         $('main').css('margin-left','-320px');
         $('.controls').css('margin-right','320px');

    }
    else {
         $('main').css('margin-right','0px');  
//         $('main').css('margin-left','0px');
         $('.controls').css('margin-right','0px');  
    }

  });

 $(".menu-item").mouseover('.nav-link',function(e){
    $(".menu-item").removeClass("rollactive");
    $(this).addClass("rollactive");
  });
 $(".menu-item").mouseout('.nav-link',function(e){
    $(".menu-item").removeClass("rollactive");
//    $(this).addClass("rollactive");
  });

// move service blocks down
// var service = $('#serviceWrapper');
//  TweenMax.to(service, 2, {opacity:0.5, y: 50});

  var serviceImage1 = $('.box1');
  $(serviceImage1).mouseover(function(){
    TweenMax.to(serviceImage1, 1.5, {scale:1.15});
  });
  $(serviceImage1).mouseout(function(){
    TweenMax.to(serviceImage1, 1, {scale: 1});
  });

  var serviceImage2 = $('.box2');
  $(serviceImage2).mouseover(function(){
    TweenMax.to(serviceImage2, 1.5, {scale:1.15});
  });
  $(serviceImage2).mouseout(function(){
    TweenMax.to(serviceImage2, 1, {scale: 1});
  });

  var serviceImage3 = $('.box3');
  $(serviceImage3).mouseover(function(){
    TweenMax.to(serviceImage3, 1.5, {scale:1.15});
  });
  $(serviceImage3).mouseout(function(){
    TweenMax.to(serviceImage3, 1, {scale: 1});
  });


  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // build a scene
  var ourScene = new ScrollMagic.Scene({
    triggerElement: '#qualifications',
    triggerHook: 0.25
  })
  .setClassToggle('.home-header-title', 'fade-in') // add class to project01
//  .addIndicators()
  .addTo(controller);





});





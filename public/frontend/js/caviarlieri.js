// JavaScript Document


$(document).ready(function() {
    $('#home-slider').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: false},
      420: {items: 1, nav: false},
      768: {items: 1, nav: false},
      1280: {items: 1, nav: false, dots: true, loop: true}
      }
    })
  })
  
  $(document).ready(function() {
    $('#expert-slider').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: true, dots: false},
      420: {items: 1, nav: true, dots: false},
      768: {items: 1, nav: true, dots: false},
      1280: {items: 1, nav: false, dots: false, loop: true}
      }
    })
  })
  
  $(document).ready(function() {
    $('#doctors-review').owlCarousel({
      loop: false,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: true, dots: true},
      420: {items: 1, nav: true, dots: true},
      768: {items: 1, nav: true, dots: true},
      992: {items: 3, nav: false, dots: true, loop: false, margin: 0}
      }
    })
  })
  
  
  $(document).ready(function() {
    $('.expert-review').owlCarousel({
      loop: true, 
      margin: 0,
      autoplay: false,
      autoHeight:false,
      autoplayHoverPause: true,  
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: true, dots: false, loop: true},
      420: {items: 1, nav: true, dots: false, loop: true},
      768: {items: 3, nav: true, dots: false, loop: true},
      992: {items: 3, nav: false, dots: false, loop: false}
      }
    })
  })
  
  $(document).ready(function() {
    $('.expert-review-1').owlCarousel({
      loop: false, 
      margin: 0,
      autoplay: false,
      autoHeight:false,
      autoplayHoverPause: true,  
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: true, dots: false, loop: true},
      420: {items: 1, nav: true, dots: false, loop: true},
      768: {items: 3, nav: true, dots: false, loop: false},
      992: {items: 3, nav: false, dots: false, loop: false}
      }
    })
  })
  
  $(document).ready(function() {
    $('#video-gallery').owlCarousel({
      loop: false, 
      margin: 0,
      autoplay: false,
      autoHeight:false, 
      responsiveClass: true,
      responsive: {
      0: {items: 1, nav: false, dots: true},
      520: {items: 1, nav: false, dots: true},
      768: {items: 1, nav: false, dots: true},
      992: {items: 1, nav: false, dots: true}
      }
    })
  })
  
  
  
  $(document).ready(function() {
    $('#home-slider-mobile').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: false, dots: true},
      420: {items: 1, nav: false, dots: true},
      768: {items: 1, nav: false, dots: true},
      1280: {items: 1, nav: false, dots: true, loop: true}
      }
    })
  })
  
  
  
  $(document).ready(function() {
    $('#testimonial-slider').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 500,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: false, dots: false},
      420: {items: 1, nav: false, dots: false},
      768: {items: 1, nav: false, dots: false},
      1280: {items: 1, nav: true, dots: true, loop: true, margin: 0}
      }
    })
  })
  
  $(document).ready(function() {
    $('#discover-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: false,
      autoplayTimeout: 5000,
      smartSpeed: 1000,
      autoHeight:false,
      autoplayHoverPause: true,
      responsiveClass: false,
      responsive: {
      0: {items: 1, nav: false},
      420: {items: 1, nav: false},
      768: {items: 1, nav: false},
      1280: {items: 1, nav: false, dots: true, loop: true, margin: 0}
      }
    })
  })
  
  
  $(document).ready(function(){
  $("#menu").click(function(){
  $("#close").toggleClass("d-none d-block")
  $("#menu").toggleClass("d-block d-none")
    });
      
  $("#close").click(function(){
  $("#menu").toggleClass("d-block d-none")
  $("#close").toggleClass("d-block d-none")
    });	
  });	
  
  function openNav() {
  document.getElementById("mobile-sidebar").style.left = "0";
  $("#overlay").toggleClass("d-none d-block");
  $('#push-container').addClass('st-push-container');
  $('#push').addClass('st-pusher');	
  }
  
  function closeNav() {
  document.getElementById("mobile-sidebar").style.left = "-75vw";
  $("#overlay").toggleClass("d-block d-none");
  $('#push-container').addClass('ss-push-container');
  $('#push').addClass('ss-pusher');	
  $('#push-container').removeClass('st-push-container');
  $('#push').removeClass('st-pusher');	
  
  setTimeout(function() {
  $('#push-container').removeClass('ss-push-container');
  $('#push').removeClass('ss-pusher');	
  },600);
  }
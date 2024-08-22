

$(document).ready(function() {

  /**
   * Screen height and width
   */

  let windWid = $(window).width();
  let windHei = $(window).height();

  $(window).resize(function () {
    windWid = $(window).width();
    windHei = $(window).height();
  });

  if ($('.fulpage-wrapper').length){

    const roomsList = new Swiper("#all-rooms", {
      direction: "vertical",
      slidesPerView: 1,
      spaceBetween: 30,
      mousewheel: true,
      autoHeight: true,
    });

    /*$('.fulpage-wrapper').pagepiling({
      menu: null,
      direction: 'vertical',
      verticalCentered: false,
      normalScrollElements: '.site-footer'
    });
*/

    /*$('.fulpage-wrapper').fullpage({
      /!*fitToSection: true,*!/
      verticalCentered: false,
      scrollBar: true,


    });*/
  }

  $('#menu-btn').on('click', function () {
    $('#hidden-menu').toggleClass('active');
    $('.headbar').toggleClass('active');
  })

  $(".custom-menu .menu .main-menu-item").hover(function(){
    $(".custom-menu .menu .main-menu-item").removeClass('open-menu');
    $(this).addClass('open-menu');
  });

  $(".custom-menu .menu .menu-item").hover(function(){

    let imageSrc = $(this).find('a').attr('data-image');
    $('.elements-wrapper .menu-pic img').attr('src', imageSrc);
  });

  /**
   * Home Room Slider
   */

  if ( $('#home-room-slider').length ){

    $('#home-room-slider').slick({
       autoplay: true,
       autoplaySpeed: 1000,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
        centerMode: true,
      centerPadding: '25%',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            centerPadding: '15%',
          }
        },
        {
          breakpoint: 575,
          settings: {
            centerPadding: '5%',
          }
        },
        {
          breakpoint: 440,
          settings: {
            centerPadding: '0',
            centerMode: false,
            fade: true
          }
        }

      ]

   });
 }

  /**
   * Home Reviews Slider
   */

  if ( $('#home-review-slider').length ){

    $('#home-review-slider').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      centerMode: true,
      centerPadding: '15%',
      dots: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            centerPadding: '10%',
          }
        },
        {
          breakpoint: 767,
          settings: {
            centerPadding: '0',
            centerMode: false,
            fade: true
          }
        }

      ]

    });

    $('.reviews-wrapper .swiper-button__prev').click(function(e){
      e.preventDefault();

      $('#home-review-slider').slick('slickPrev');
    });

    $('.reviews-wrapper .swiper-button__next').click(function(e){
      e.preventDefault();

      $('#home-review-slider').slick('slickNext');
    });
  }

 /**
  * Home Services
  */

  if ( $('.our-services').length ){

    const thisBlock = $('.our-services');

    let firstImageDefault = thisBlock.find('.services ul li:first-child a').attr('data-first');
    let secondImageDefault = thisBlock.find('.services ul li:first-child a').attr('data-second');

    let firstImageWrapper = thisBlock.find('.first-pic-wrapper img');
    let secondImageWrapper = thisBlock.find('.secondary-pic-wrapper img');

    firstImageWrapper.attr('src', firstImageDefault);
    secondImageWrapper.attr('src', secondImageDefault);

    thisBlock.find('.services ul li:first-child a').addClass('active');

    thisBlock.find('.services ul li').hover( function () {
      let thisImageFirst = $(this).find('a').attr('data-first');
      let thisImageSecond = $(this).find('a').attr('data-second');

      thisBlock.find('.services ul li a').removeClass('active');
      $(this).find('a').addClass('active');

      firstImageWrapper.attr('src', thisImageFirst);
      secondImageWrapper.attr('src', thisImageSecond);
    })
  }

  /**
   * Hotel History
   */

  if ( $('.hotel-history').length ){

    let itemsCount = Number($('.hotel-history .bottom-content .hotel-history__item').length);

    let targetItem = Number(itemsCount - 1);

    if ( windWid > 850 ){
      $('.hotel-history .bottom-content .hotel-history__item.pic-item').css({'order' : itemsCount - 1});

      $('.hotel-history .bottom-content .hotel-history__item:nth-child('+targetItem+')').css({'order' : itemsCount + 1});

      $('.hotel-history .bottom-content .hotel-history__item:nth-child('+targetItem+')').addClass('last');
    }

  }

  /**
   * Leisure modal
   */

  if ( $('.leisure-item').length ){

    /*let modal = document.getElementById("modal-leisure");*/
    let modal = $('#modal-leisure');

    let span = $('#modal-leisure .popup-close');

    $('.leisure-item').on('click', function (e) {
      e.preventDefault();

      const thisLeisure = $(this);
      let thisTitle = thisLeisure .find('.card-box__title').text();
      let thisDescription = thisLeisure .attr('data-modal-content');
      let thisImg = thisLeisure .attr('data-modal-img');

      modal.find('.popup-pic img').attr('src', thisImg);
      modal.find('.popup-title').text(thisTitle);
      modal.find('.popup-text').html(thisDescription);

      modal.css({'display' : 'block'});
    });

    span.on('click', function () {
      modal.css({'display' : 'none'});
    })

    $(document).on('keyup', function(event) {
      if (event.which == 27) { // esc
        modal.css({'display' : 'none'});
      };
    });

    $(window).on('click', function(e) {
      if(e.target == modal[0]){
        modal.css({'display' : 'none'});
      }
    });

  }

  //Animation

  let animationTracking = $('.animation-tracking');

  console.log(animationTracking)

  animationTracking.each(function () {

    let thisTrack = $(this);

    thisTrack.viewportChecker({

      offset: 300,

      callbackFunction: function (elem, action) {

        $('.visible .first-up').addClass('animate');

        setTimeout(function () {
          $('.visible .second-up').addClass('animate');
        }, 500);

      }
    });
  })



  /**
   * Room Head Name
   */

  /*if ( $('.single-room').length ){
    const roomName = $('#hero .headline-title').text();

    let roomNameParts = roomName.split(' ');

    $('#hero .headline-title').html('<span>'+roomNameParts[0]+'</span>'+roomNameParts[1]);

  }*/



});






/*
let images = document.querySelectorAll('.parallax-image');

console.log(100);


new simpleParallax(images,{
  scale: 1.7
});
*/


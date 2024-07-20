

$(document).ready(function() {

  if ($('.fulpage-wrapper').length){
    $('.fulpage-wrapper').fullpage({
      fitToSection: true,
      verticalCentered: false,
    });
  }

  $('#menu-btn').on('click', function () {
    $('#hidden-menu').toggleClass('active');
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



});



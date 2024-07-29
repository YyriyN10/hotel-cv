

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
    $('.fulpage-wrapper').fullpage({
      fitToSection: true,
      verticalCentered: false,
      scrollBar: true,


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



  /**
   * Room Head Name
   */

  /*if ( $('.single-room').length ){
    const roomName = $('#hero .headline-title').text();

    let roomNameParts = roomName.split(' ');

    $('#hero .headline-title').html('<span>'+roomNameParts[0]+'</span>'+roomNameParts[1]);

  }*/



});



(function ($) {
  "use strict";

  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });



  var review = $('.textimonial_iner');
  if (review.length) {
    review.owlCarousel({
      items: 1,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      responsive: {
        0: {
          margin: 15,

        },
        600: {
          margin: 10,
        },
        1000: {
          margin: 10,
        }
      }
    });
  }
  var best_product_slider = $('.best_product_slider');
  if (best_product_slider.length) {
    best_product_slider.owlCarousel({
      items: 4,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: ["next", "previous"],
      responsive: {
        0: {
          margin: 15,
          items: 1,
          nav: false
        },
        576: {
          margin: 15,
          items: 2,
          nav: false
        },
        768: {
          margin: 30,
          items: 3,
          nav: true
        },
        991: {
          margin: 30,
          items: 4,
          nav: true
        }
      }
    });
  }

  //product list slider
  var product_list_slider = $('.product_list_slider');
  if (product_list_slider.length) {
    product_list_slider.owlCarousel({
      items: 1,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: ["next", "previous"],
      smartSpeed: 1000,
      responsive: {
        0: {
          margin: 15,
          nav: false,
          items: 1
        },
        600: {
          margin: 15,
          items: 1,
          nav: false
        },
        768: {
          margin: 30,
          nav: true,
          items: 1
        }
      }
    });
  }

  //single banner slider
  // var banner_slider = $('.banner_slider');
  // if (banner_slider.length) {
  //   banner_slider.owlCarousel({
  //     items: 1,
  //     loop: true,
  //     dots: false,
  //     autoplay: true,
  //     autoplayHoverPause: true,
  //     autoplayTimeout: 5000,
  //     nav: true,
  //     navText: ["next","previous"],
  //     smartSpeed: 1000,
  //   });
  // }

  if ($('.img-gal').length > 0) {
    $('.img-gal').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }


  //single banner slider
  $('.banner_slider').on('initialized.owl.carousel changed.owl.carousel', function (e) {
    function pad2(number) {
      return (number < 10 ? '0' : '') + number
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(pad2(carousel.current()));

  }).owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: ["next", "previous"],
    smartSpeed: 1000,
    responsive: {
      0: {
        nav: false
      },
      600: {
        nav: false
      },
      768: {
        nav: true
      }
    }
  });



  // niceSelect js code
  $(document).ready(function () {
    $('select').niceSelect();
  });

  // menu fixed js code
  // $(window).scroll(function () {
  //   var window_top = $(window).scrollTop() + 1;
  //   if (window_top > 50) {
  //     $('.main_menu').addClass('menu_fixed animated fadeInDown');
  //   } else {
  //     $('.main_menu').removeClass('menu_fixed animated fadeInDown');
  //   }
  // });


  $('.counter').counterUp({
    time: 2000
  });

  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 300,
    infinite: true,
    asNavFor: '.slider-nav-thumbnails',
    autoplay: true,
    pauseOnFocus: true,
    dots: true,
  });

  $('.slider-nav-thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider',
    focusOnSelect: true,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    centerMode: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        centerMode: false,
      }
    }]
  });


  // Search Toggle
  $("#search_input_box").hide();
  $("#search_1").on("click", function () {
    $("#search_input_box").slideToggle();
    $("#search_input").focus();
  });
  $("#close_search").on("click", function () {
    $('#search_input_box').slideUp(500);
  });

  //------- Mailchimp js --------//
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();

  //------- makeTimer js --------//
  function makeTimer() {

    //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
    var endTime = new Date("27 Sep 2019 12:56:00 GMT+01:00");
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }

    $("#days").html("<span>Days</span>" + days);
    $("#hours").html("<span>Hours</span>" + hours);
    $("#minutes").html("<span>Minutes</span>" + minutes);
    $("#seconds").html("<span>Seconds</span>" + seconds);

  }
// click counter js
(function() {

  window.inputNumber = function(el) {

    var min = el.attr('min') || false;
    var max = el.attr('max') || false;

    var els = {};

    els.dec = el.prev();
    els.inc = el.next();

    el.each(function() {
      init($(this));
    });

    function init(el) {

      els.dec.on('click', decrement);
      els.inc.on('click', increment);

      function decrement() {
        var value = el[0].value;
        value--;
        if(!min || value >= min) {
          el[0].value = value;
        }
      }

      function increment() {
        var value = el[0].value;
        value++;
        if(!max || value <= max) {
          el[0].value = value++;
        }
      }
    }
  }
})();

inputNumber($('.input-number'));



  setInterval(function () {
    makeTimer();
  }, 1000);

  // click counter js


  // var a = 0;
  // $('.increase').on('click', function(){



  //   console.log(  $(this).innerHTML='Product Count: '+ a++ );
  // });

 var product_overview = $('#vertical');
 if(product_overview.length){
  product_overview.lightSlider({
    gallery:true,
    item:1,
    vertical:true,
    verticalHeight:450,
    thumbItem:3,
    slideMargin:0,
    speed:600,
    autoplay: true,
    responsive : [
      {
          breakpoint:991,
          settings: {
              item:1,

            }
      },
      {
          breakpoint:576,
          settings: {
              item:1,
              slideMove:1,
              verticalHeight:350,
            }
      }
  ]
  });
 }
}(jQuery));


$(document).ready(function () {
    cartload();

    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var quantity = $(this).closest('.product_data').find('.qty-input').val();

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                'quantity': quantity,
                'product_id': product_id,
            },
            success: function (response) {
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
                cartload();
            },
        });
    });

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var thisClick = $(this);
        var quantity = $(this).closest(".cartpage").find('.qty-input').val();
        var product_id = $(this).closest(".cartpage").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity':quantity,
            'product_id':product_id,
        };

        $.ajax({
            url: '/update-to-cart',
            type: 'POST',
            data: data,
            success: function (response) {
                // window.location.reload();
                thisClick.closest(".cartpage").find('.cart-grand-total-price').text(response.gtprice);
                $('#totalajaxcall').load(location.href + ' .totalpricingload');
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

    $('.delete_cart_data').click(function (e) {
        e.preventDefault();

        var thisDeletearea = $(this);
        var product_id = $(this).closest(".cartpage").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            "product_id": product_id,
        };

        // $(this).closest(".cartpage").remove();

        $.ajax({
            url: '/delete-from-cart',
            type: 'DELETE',
            data: data,
            success: function (response) {
                // window.location.reload();
                thisDeletearea.closest(".cartpage").remove();
                $('#totalajaxcall').load(location.href + ' .totalpricingload');

                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

    $('.clear_cart').click(function (e) {
        e.preventDefault();

        $.ajax({
            url: '/clear-cart',
            type: 'GET',
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });

    });

});


function cartload()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/load-cart-data',
            method: "GET",
            success: function (response) {
                $('.basket-item-count').html('');
                var parsed = jQuery.parseJSON(response)
                var value = parsed; //Single Data Viewing
                $('.basket-item-count').append($('<span class="badge badge-pill badge-danger">'+ value['totalcart'] +'</span>'));
            }
        });
    }


// // add to cart code
// $(document).ready(function () {

// });


//  // Update Cart Data
//  $(document).ready(function () {



// });


// // Delete shopping cart Data
// $(document).ready(function () {



// });


//     // Clear Cart Data
//     $(document).ready(function () {


//     });


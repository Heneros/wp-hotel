(function($) {
  // $(".rate-yo-navbar").rateYo({
  //   ratedFill: "#F2994A",
  //   rating: 5,
  //   starWidth: "17px",
  //   normalFill: "#c4c4c4"
  // });
  // $(".rate-yo").rateYo({
  //   ratedFill: "#F2994A",
  //   rating: 5,
  //   starWidth: "17px",
  //   normalFill: "#c4c4c4"
  // });
  $("ul a").on("click", function (e) {
    e.preventDefault();
    var href = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(href).offset().top
    }, 800);
  });
  $(".banner-slider").slick({
    dots: false,
    prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"></button>',
    nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"></button>',
    responsive: [{
      breakpoint: 730,
      settings: {
        slidesToShow: 1,
        dots: true,
        arrows: false,
        infinite: true
      }
    }]
  });
  $(".slider-guests").slick({
    dots: false,
    prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"></button>',
    nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"></button>',
    arrows: true,
    responsive: [{
      breakpoint: 810,
      settings: {
        dots: true,
        arrows: false
      }
    }]
  });
  $('.menu__btn').on('click', function () {
    $('.menu-mobile__list').toggleClass('menu-mobile__list--active');
  });


$('[href="#modal-form"]').on('click', function(e){
  e.preventDefault();
var target = e.target;
var ID = target.getAttribute('data-post-id');
var btnOld = document.querySelector(".form");
var input = document.createElement('input');
input.setAttribute('type', 'hidden');
input.setAttribute('name', 'form-post-id');
input.setAttribute('value', ID);
btnOld.append(input);
});




$('[href="#modal-form"]').on('click', function(e){
  e.preventDefault();
var target = e.target;
var ID = target.getAttribute('data-review-id');
var btnOld = document.querySelector(".form");
var input = document.createElement('input');
input.setAttribute('type', 'hidden');
input.setAttribute('name', 'form-review-id');
input.setAttribute('value', ID);
btnOld.append(input);
});



$('.popup-close__email').click(function(){
  $('.popup-email').hide();
});

$(".review__btn").on("click", function(){
   $(".popup-review").css("display", "block");
});

$('.popup-close-review').click(function(){
  $('.popup-review').css("display", "none");
});
// $('.popup-review').click(function(){
//   $('.popup-review').css("display", "none");
// });


})( jQuery );
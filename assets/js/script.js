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
    prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"><img src="img/left.svg" alt= ""></button>',
    nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"><img src="img/right.svg" alt=""></button>',
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


// $(".number__rating").click(function(){
//   alert("Hello");
// })
$('[href="#modal-form"]').on('click', function(e){
 
  e.preventDefault();
  // var target = e.target;
  // var ID = target.attr('data-post-id');
  // var formContainer = target.attr('href');
  // var form = formContainer.find('form');
  // var input = document.createElement('input');
  // input.setAttribute('type', 'hidden');
  // input.setAttribute('name', 'form-post-id');
  // input.setAttribute('value', ID);
  // form.append(input);

  // var target = e.target;

// var formContainer = target.attr('href');

var target = e.target;
var ID = target.getAttribute('data-post-id');
var btnOld = document.querySelector(".form");
var input = document.createElement('input');
input.setAttribute('type', 'hidden');
input.setAttribute('name', 'form-post-id');
input.setAttribute('value', ID);


btnOld.append(input);


});

})( jQuery );





// var div;
// document.body.insertAdjacentHTML('beforeend', div);
// var y = document.getElementById('org_div1');
// y.setAttribute('name', 'form-post-id');
// y.innerHTML = "hello world";

// div.insertAdjacentHTML('beforebegin', '<p>Привет</p>');




// var btnOld = document.querySelector(".form");
// var input = document.createElement('input');
// input.setAttribute('type', 'hidden');
// input.setAttribute('name', 'form-post-id');
// btnOld.append(input);


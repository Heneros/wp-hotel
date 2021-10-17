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
  var target = e.target;
  var ID = target.attr('data-post-id');
  var formContainer = target.attr('href');



});

})( jQuery );
// $postIdBtn = jquery__WEBPACK_IMPORTED_MODULE_0___default()('[href=\"#modal-form\"]');\n$postIdBtn.on('click', function (e) {\n  e.preventDefault();\n 
//  var $target = jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.target);\n  
// var ID = $target.attr('data-post-id');\n 
//  var formContainer = jquery__WEBPACK_IMPORTED_MODULE_0___default()($target.attr('href'));\n  
// var form = formContainer.find('form');\n  
// var input = document.createElement('input');\n  
// input.setAttribute('type', 'hidden');\n 
//  input.setAttribute('name', 'form-post-id');\n  
// input.setAttribute('value', ID);\n 
// form.append(input);\n});}





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


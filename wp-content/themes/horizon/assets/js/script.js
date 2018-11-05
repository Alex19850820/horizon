'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Shared = function Shared() {
  _classCallCheck(this, Shared);
};

$(function () {
  $('#checkbox').click(function () {
    if ($(this).is(':checked') == false) {
      $('.jsCheck').attr('disabled', 'disabled');
    } else {
      $('.jsCheck').removeAttr('disabled');
    }
  });
});

$(function () {
  var x = 0;
  setInterval(function () {
    var pos = (x -= 1) + 'px 0';
    $('.cloud-up').css('background-position', pos);
  }, 50);

  var y = 0;
  setInterval(function () {
    var pos = (y += 1) + 'px 0';
    $('.cloud-left').css('background-position', pos);
  }, 70);

  var c = 0;
  setInterval(function () {
    var pos = (c -= 1) + 'px 0';
    $('.cloud-bottom').css('background-position', pos);
  }, 50);

  var b = 0;
  setInterval(function () {
    var pos = (b += 1) + 'px 0';
    $('.cloud-bottom2').css('background-position', pos);
  }, 70);

  var strip = document.querySelectorAll('.jsHeaderHR');
  for (var i = 0; i < strip.length; i++) {
    strip[i].classList.add('strip-active');
  }

  $(".scroll").on("click", function (e) {
    var anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $(anchor.attr('href')).offset().top
    }, 777);
    $('.jsMenu').removeClass('active-menu');
    $(".overlayMenu").removeClass("open");
    // this line ▼ prevents content scroll-behind
    $("body").removeClass("locked");
    $(".overlay").removeClass("overlay-z-index");
    $('.overlay-fon').fadeOut();
    e.preventDefault();
  });

  $(document).on('click', '.jsMenu', function () {
    $('.jsMenu').toggleClass('active-menu');
    $(".overlayMenu").toggleClass("open");
    $(".overlay").toggleClass("overlay-z-index");
    $("body").toggleClass("locked");
    $('.overlay-fon').fadeToggle();
  });

  $(document).on('click', '.jsOverlay', function () {
    $('.jsMenu').toggleClass('active-menu');
    $(".overlayMenu").toggleClass("open");
    $(".overlay").toggleClass("overlay-z-index");
    $("body").toggleClass("locked");
    $('.overlay-fon').fadeToggle();
  });

  //search

  // let search = document.querySelector('.search');
  // let searchInp = search.children[0];
  // // let searchLbl = search.children[1];
  // let searchBtn = search.children[2];
  // let searchBrd = search.children[3];
  // let searchCls = search.children[4];
  // let searchTxt, clonedTxt, clonedLbl, clonedLblWrap, animating = false, busy = true;
  // let TLTxt = new TimelineLite();
  // let TLSrch = new TimelineLite({onReverseComplete: () => {
  //     TLTxt.clear();
  //     animating = false;
  //   }});
  //
  // // createTxt('Enter a search query', searchLbl, 'search-text');
  // // searchTxt = document.querySelectorAll('.search-text');
  //
  // searchBtn.addEventListener('click', () => {
  //   if (!animating) animSearch();
  // });
  //
  // searchBrd.addEventListener('click', () => {
  //   if (!animating) animSearch();
  // });
  //
  // searchInp.addEventListener('focus', () => {
  //   if (busy || searchInp.value.trim().length) return;
  //   TLTxt.isActive() ? TLTxt.play() : TLTxt.restart().timeScale(1).staggerTo(searchTxt, .07, {opacity: 0}, .035);
  // });
  //
  // searchInp.addEventListener('blur', () => {
  //   if (busy || searchInp.value.trim().length) return;
  //   TLTxt.reverse().timeScale(1.3);
  // });
  //
  // search.addEventListener('submit', e => {
  //   e.preventDefault();
  //   busy = true;
  //   TLTxt.paused() ? TLTxt.clear() : TLTxt.play();
  //   let val = searchInp.value.trim();
  //   searchInp.disabled = true;
  //   if (val.length) {
  //     cloneLbl();
  //     createLblTxt(val);
  //   }
  //   else TLSrch.reverse();
  //   searchInp.value = '';
  //   searchInp.blur();
  // });
  //
  // searchCls.addEventListener('mousedown', e => {
  //   e.preventDefault();
  // });
  //
  // searchCls.addEventListener('click', () => {
  //   if (busy) return;
  //   busy = true;
  //   let val = searchInp.value.trim();
  //   searchInp.disabled = true;
  //   if (val.length) {
  //     cloneLbl();
  //     createLblTxt(val);
  //   }
  //   else {
  //     TLTxt.isActive() ? TLTxt.play() : TLTxt.progress() == 1 ? TLTxt.clear() :
  //       TLTxt.restart().timeScale(1).staggerTo(searchTxt, .07, {opacity: 0}, .035);
  //     TLSrch.reverse();
  //   }
  //   searchInp.value = '';
  //   searchInp.blur();
  // });
  //
  // function createTxt(text, elLbl, textClass) {
  //   let splitText = [];
  //   for (let i = text.length; i--;) {
  //     splitText.unshift(`<span class='${textClass}'>${text[i]}</span>`);
  //   }
  //   elLbl.innerHTML = splitText.join('');
  // }
  //
  // function createLblTxt(val) {
  //   createTxt(val, clonedLbl, 'cloned-text');
  //   clonedTxt = document.querySelectorAll('.cloned-text');
  //   animClonedTxt(Array.from(clonedTxt).reverse());
  // }
  //
  // function animSearch() {
  //   animating = true;
  //   TLSrch.restart()
  //     .to(searchBrd, .4, {scaleX: 2, x: -25, y: -25, ease: Sine.easeIn})
  //     .to(searchBtn, .4, {rotationX: 90, ease: Sine.easeIn}, '-=.4')
  //     .to(searchBrd, .4, {rotation: 180, x: '-=6', y: '+=10', ease: Power2.easeInOut})
  //     .set(searchBrd, {transformOrigin: '0', marginRight: '-38px'})
  //     .to(searchBrd, .6, {scaleX: -13, ease: Power1.easeOut})
  //     .set(search, {className: '+=edge', onComplete: showTxt})
  //     .to(searchInp, .6, {scaleX: 1, ease: Sine.easeInOut}, '-=.3')
  //     .set(searchCls, {className: '+=visible'})
  //     .addPause();
  // }
  //
  // function showTxt() {
  //   let tl = new ({onStart: () => {searchInp.disabled = true}});
  //   tl.staggerTo(searchTxt, .07, {opacity: 1}, .035);
  //   setTimeout(() => {
  //     searchInp.disabled = false;
  //     busy = false;
  //   }, 300)
  // }
  //
  // function animClonedTxt(el) {
  //   let scrollW = clonedLbl.scrollWidth;
  //   let offsetW = scrollW - clonedLbl.offsetWidth;
  //   let tl = new TimelineLite({onComplete: () => {clonedLblWrap.remove()}});
  //   tl.staggerTo(el, .08, {opacity: 0}, .04);
  //   let tlDur = tl.totalDuration();
  //   let offsetTime = (offsetW * tlDur) / scrollW;
  //   if (offsetW > 0) {
  //     TweenLite.fromTo(clonedLbl, offsetTime, {x: -offsetW}, {x: 0, delay: .2, ease: SlowMo.ease.config(0.1, 0.1, false)});
  //   }
  //   setTimeout(() => {
  //     TLSrch.reverse();
  //   }, Math.max((tlDur - .35) * 1000, 0));
  // }
  //
  // function cloneLbl() {
  //   clonedLblWrap = document.createElement('div');
  //   clonedLblWrap.className = 'search__label';
  //   search.appendChild(clonedLblWrap);
  //   clonedLbl = document.createElement('div');
  //   clonedLblWrap.appendChild(clonedLbl);
  // }


  // btnClick.addEventListener( 'click', function( event ) {
  // function distance( x1, y1, x2, y2 ) {
  //   var dx = x1-x2;
  //   var dy = y1-y2;
  //   return Math.sqrt( dx*dx + dy*dy );
  // }
  //
  // function animBtn(tmpClass) {
  //   var btnClick = document.querySelector( tmpClass);
  //   var mx = event.clientX - btnClick.offsetLeft,
  //     my = event.clientY - btnClick.offsetTop;
  //
  //   var w = btnClick.offsetWidth, h = btnClick.offsetHeight;
  //
  //   var directions = [
  //     { id: 'top', x: w/2, y: 0 },
  //     { id: 'right', x: w, y: h/2 },
  //     { id: 'bottom', x: w/2, y: h },
  //     { id: 'left', x: 0, y: h/2 }
  //   ];
  //
  //   directions.sort( function( a, b ) {
  //     return distance( mx, my, a.x, a.y ) - distance( mx, my, b.x, b.y );
  //   } );
  //
  //   btnClick.setAttribute( 'data-direction', directions.shift().id );
  //   btnClick.classList.add( 'is-open' );
  //
  // }
  //
  // $(document).on('click', '.jsWhoBtn', function () {
  //   animBtn('.jsWhoBtn');
  // });
  //
  // $(document).on('click', '.jsWorkBtn', function () {
  //   animBtn('.jsWorkBtn');
  // });

});

$(document).on('click', '.jsModalWindow', function () {
  $('body').addClass('body-hidden');
  $('.modal-window').addClass('modal-active');
  $('.overlay-modal').addClass('overlay-active');
  $('.modal-phone').addClass('modal-noactive');
});

$(document).on('click', '.jsModalPhone', function () {
  $('body').addClass('body-hidden');
  $('.modal-window').addClass('modal-active');
  $('.overlay-modal').addClass('overlay-active');
  $('.modal-block').addClass('modal-noactive');
});

// $(document).on('click', '.jsCheck', function () {
//   $('.modal-block').addClass('modal-noactive');
//   $('.modal-thanks').addClass('modal-active');
//   $('.modal-phone').addClass('modal-noactive');
// });

$(document).on('click', '.overlay-modal', function () {
  $('body').removeClass('body-hidden');
  $('.modal-window').removeClass('modal-active');
  $('.overlay-modal').removeClass('overlay-active');
  $('.modal-block').removeClass('modal-noactive');
  $('.modal-thanks').removeClass('modal-active');
  $('.modal-phone').removeClass('modal-noactive');
});

$(document).on('click', '.modal-close', function () {
  $('body').removeClass('body-hidden');
  $('.modal-window').removeClass('modal-active');
  $('.overlay-modal').removeClass('overlay-active');
  $('.modal-block').removeClass('modal-noactive');
  $('.modal-thanks').removeClass('modal-active');
  $('.modal-phone').removeClass('modal-noactive');
});

$('.work-left').slick({
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: '<button class="prevArrow-work" type="button" ><span>previous</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 361"> <path d="M344.8 5.4c-7-7.2-18.6-7.2-25.8 0-7 7-7 18.6 0 25.5l130.8 130.8H18.1C8 161.8 0 169.8 0 179.9s8 18.3 18.1 18.3h431.7L319 328.8c-7 7.2-7 18.8 0 25.8 7.2 7.2 18.8 7.2 25.8 0l161.8-161.8c7.2-7 7.2-18.6 0-25.5L344.8 5.4z" fill="#000000"/></svg></button>',
  nextArrow: '<button class="nextArrow-work" type="button" ><span>next</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 361"> <path d="M344.8 5.4c-7-7.2-18.6-7.2-25.8 0-7 7-7 18.6 0 25.5l130.8 130.8H18.1C8 161.8 0 169.8 0 179.9s8 18.3 18.1 18.3h431.7L319 328.8c-7 7.2-7 18.8 0 25.8 7.2 7.2 18.8 7.2 25.8 0l161.8-161.8c7.2-7 7.2-18.6 0-25.5L344.8 5.4z" fill="#000000"/></svg></button>'
});

$(function () {

  function animateNumber(elem_class) {
    var from = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
    var to = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 10;
    var timeSlip = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 500;

    var elem = document.querySelector(elem_class);
    var timeOut = setInterval(function () {
      from += 1;
      var tmp = String(from).split("");
      var span = [];
      tmp.forEach(function (item) {
        span.push("<span>" + item + "</span>");
      });
      elem.innerHTML = span.join('');
      if (from === to) {
        clearInterval(timeOut);
      }
    }, timeSlip);
  }

  var whoBlock = document.getElementById('jsItems');
  var digitalBlock = document.getElementById('jsDigital');
  var whoCode = document.getElementById('jsWhoCode');
  var workCode = document.getElementById('jsWorkCode');
  var whoHR = document.getElementById('jsWhoHR');
  var workHR = document.getElementById('jsWorkHR');
  var workText = document.getElementById('jsWorkText');
  var form = document.getElementById('jsForm');
  var formHR = document.getElementById('jsFormHR');

  function whoNumber() {
    if (whoBlock.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', whoNumber, false);
      animateNumber('.jsNum1', 0, 78, 20);
      animateNumber('.jsNum2', 0, 112, 10);
      animateNumber('.jsNum3', 0, 8, 50);
      animateNumber('.jsNum4', 0, 7, 50);
    }
  }

  window.addEventListener('scroll', whoNumber, false);

  function whoDigital() {
    if (whoBlock.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', whoDigital, false);
      digitalBlock.classList.add('who-active');
      whoCode.classList.add('who-active');
      whoHR.classList.add('strip-active');
    }
  }

  window.addEventListener('scroll', whoDigital, false);

  function hrWho() {
    if (whoHR.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', hrWho, false);
      whoHR.classList.add('strip-active');
    }
  }

  window.addEventListener('scroll', hrWho, false);

  function workBlock() {
    if (workCode.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', workBlock, false);
      workHR.classList.add('strip-active');
      workCode.classList.add('who-active');
    }
  }

  window.addEventListener('scroll', workBlock, false);

  function hrWork() {
    if (workHR.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', hrWork, false);
      workHR.classList.add('strip-active');
    }
  }

  window.addEventListener('scroll', hrWork, false);

  function formBlock() {
    if (form.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      window.removeEventListener('scroll', formBlock, false);
      formHR.classList.add('strip-active');
    }
  }

  window.addEventListener('scroll', formBlock, false);

  // let flText = true;
  function workBlockText() {
    if (workText.getBoundingClientRect().bottom - window.innerHeight <= 0) {
      (function () {
        window.removeEventListener('scroll', workBlockText, false);
        var wrapper = document.querySelector(".work-right__text");
        var text = document.querySelector(".work-right__text__p");

        var textCont = text.textContent;
        text.style.display = "none";

        // flText = false;
        for (var i = 0; i < textCont.length; i++) {
          (function (i) {
            setTimeout(function () {
              // Created textNode to append
              var texts = document.createTextNode(textCont[i]);
              var span = document.createElement('span');
              span.appendChild(texts);

              span.classList.add("wave");
              wrapper.appendChild(span);
            }, 30 * i);
          })(i);
        }
      })();
    }
  }

  // workBlockText();
  window.addEventListener('scroll', workBlockText, false);
});
//# sourceMappingURL=script.js.map

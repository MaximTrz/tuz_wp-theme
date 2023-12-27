"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
document.addEventListener("DOMContentLoaded", function () {
  // eslint-disable-next-line no-unused-vars, no-undef
  var swiper = new Swiper(".js-main-swiper", {
    slidesPerView: 1,
    dynamicBullets: true,
    loop: true,
    pagination: {
      el: ".main-slider__pagination"
    },
    navigation: {
      nextEl: ".main-slider__next",
      prevEl: ".main-slider__prev"
    },
    autoplay: {
      delay: 5000
    }
  });
  var newsSwiper = new Swiper(".js-news-swiper", {
    slidesPerView: 3,
    dynamicBullets: true,
    spaceBetween: 25,
    pagination: {
      el: ".news__pagination"
    },
    navigation: {
      nextEl: ".news__next",
      prevEl: ".news__prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 50
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 25
      }
    }
  });
  var playsSwiper = new Swiper(".js-plays-swiper", {
    slidesPerView: 3,
    dynamicBullets: true,
    spaceBetween: 25,
    pagination: {
      el: ".plays__pagination"
    },
    navigation: {
      nextEl: ".plays__next",
      prevEl: ".plays__prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 50
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 25
      }
    }
  });
  var peoplesSwiper = new Swiper(".js-peoples-swiper", {
    slidesPerView: 4,
    dynamicBullets: true,
    spaceBetween: 25,
    pagination: {
      el: ".peoples__pagination"
    },
    navigation: {
      nextEl: ".peoples__next",
      prevEl: ".peoples__prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 25
      }
    },
    autoplay: {
      delay: 5000
    }
  });
});
window.addEventListener("load", function () {
  var paragraphs = document.querySelectorAll(".article__text, .article__title");
  if (paragraphs) {
    paragraphs.forEach(function (paragraph) {
      if (paragraph.scrollHeight > paragraph.clientHeight) {
        var text = paragraph.textContent.trim();
        var truncatedText = text;
        while (paragraph.scrollHeight > paragraph.clientHeight && truncatedText.length > 0) {
          truncatedText = truncatedText.slice(0, -1);
          paragraph.textContent = truncatedText + "...";
        }
      }
    });
  }
  /* eslint-disable indent */
  /* eslint-disable quotes */
  /* eslint-disable no-unused-vars */
  var burgerBtn = document.querySelector(".burger-btn");
  var headerContainer = document.querySelector(".header__container");
  var mainMenu = document.querySelector(".main-menu");
  var logo = document.querySelector(".header__logo");
  var container = document.querySelector(".header__container");
  var openBurger = function openBurger() {
    burgerBtn.classList.add("--open");
    mainMenu.classList.add("--open");
    container.classList.add("--open");
    logo.style.opacity = 0;
    document.body.style.overflow = "hidden";
  };
  var closeBurger = function closeBurger() {
    burgerBtn.classList.remove("--open");
    mainMenu.classList.remove("--open");
    logo.style.opacity = 1;
    document.body.style.overflow = "";
  };
  burgerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (burgerBtn.classList.contains("--open")) {
      closeBurger();
    } else {
      openBurger();
    }
  });
  var topButton = $(".footer__back-to-top");
  topButton.on("click", function () {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });
  var Gallary = /*#__PURE__*/_createClass(function Gallary(selector) {
    var _this = this;
    _classCallCheck(this, Gallary);
    // Находим элемент .gallary внутри указанного селектора
    this.galleryElement = document.querySelector(selector);
    if (!this.galleryElement) {
      console.error("Element with selector \"".concat(selector, "\" not found."));
      return;
    }

    // Находим элемент .gallary__viewed внутри .gallary
    this.viewedImage = this.galleryElement.querySelector(".gallary__viewed");
    if (!this.viewedImage) {
      console.error('Element with class "gallary__viewed" not found inside the gallery.');
      return;
    }

    // Находим все элементы .gallary__img внутри .gallary
    this.imageElements = this.galleryElement.querySelectorAll(".gallary__img");
    if (this.imageElements.length === 0) {
      console.error('No elements with class "gallary__img" found inside the gallery.');
      return;
    }

    // Добавляем обработчик клика для каждого .gallary__img
    this.imageElements.forEach(function (img) {
      img.addEventListener("click", function () {
        // Получаем значение атрибута style у выбранного .gallary__img
        var imgStyle = img.getAttribute("style");

        // Устанавливаем значение атрибута style для .gallary__viewed
        _this.viewedImage.setAttribute("style", imgStyle);
      });
    });
  }); // Использование класса Gallary
  if (document.querySelector(".gallary") !== null) {
    var myGallery = new Gallary(".gallary");
  }
  //
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImluZGV4LmpzIl0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInN3aXBlciIsIlN3aXBlciIsInNsaWRlc1BlclZpZXciLCJkeW5hbWljQnVsbGV0cyIsImxvb3AiLCJwYWdpbmF0aW9uIiwiZWwiLCJuYXZpZ2F0aW9uIiwibmV4dEVsIiwicHJldkVsIiwiYXV0b3BsYXkiLCJkZWxheSIsIm5ld3NTd2lwZXIiLCJzcGFjZUJldHdlZW4iLCJicmVha3BvaW50cyIsInBsYXlzU3dpcGVyIiwicGVvcGxlc1N3aXBlciIsIndpbmRvdyIsInBhcmFncmFwaHMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsInBhcmFncmFwaCIsInNjcm9sbEhlaWdodCIsImNsaWVudEhlaWdodCIsInRleHQiLCJ0ZXh0Q29udGVudCIsInRyaW0iLCJ0cnVuY2F0ZWRUZXh0IiwibGVuZ3RoIiwic2xpY2UiLCJidXJnZXJCdG4iLCJxdWVyeVNlbGVjdG9yIiwiaGVhZGVyQ29udGFpbmVyIiwibWFpbk1lbnUiLCJsb2dvIiwiY29udGFpbmVyIiwib3BlbkJ1cmdlciIsImNsYXNzTGlzdCIsImFkZCIsInN0eWxlIiwib3BhY2l0eSIsImJvZHkiLCJvdmVyZmxvdyIsImNsb3NlQnVyZ2VyIiwicmVtb3ZlIiwiZSIsInByZXZlbnREZWZhdWx0IiwiY29udGFpbnMiLCJ0b3BCdXR0b24iLCIkIiwib24iLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwiR2FsbGFyeSIsIl9jcmVhdGVDbGFzcyIsInNlbGVjdG9yIiwiX3RoaXMiLCJfY2xhc3NDYWxsQ2hlY2siLCJnYWxsZXJ5RWxlbWVudCIsImNvbnNvbGUiLCJlcnJvciIsImNvbmNhdCIsInZpZXdlZEltYWdlIiwiaW1hZ2VFbGVtZW50cyIsImltZyIsImltZ1N0eWxlIiwiZ2V0QXR0cmlidXRlIiwic2V0QXR0cmlidXRlIiwibXlHYWxsZXJ5Il0sIm1hcHBpbmdzIjoiOzs7Ozs7OztBQUFBQSxRQUFRLENBQUND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QztNQUNEO0lBQ0Y7O0lBRUE7SUFDQSxJQUFJLENBQUNHLGFBQWEsQ0FBQzNDLE9BQU8sQ0FBQyxVQUFDNEMsR0FBRyxFQUFLO01BQ2xDQSxHQUFHLENBQUNqRSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtRQUNsQztRQUNBLElBQU1rRSxRQUFRLEdBQUdELEdBQUcsQ0FBQ0UsWUFBWSxDQUFDLE9BQU8sQ0FBQzs7UUFFMUM7UUFDQVYsS0FBSSxDQUFDTSxXQUFXLENBQUNLLFlBQVksQ0FBQyxPQUFPLEVBQUVGLFFBQVEsQ0FBQztNQUNsRCxDQUFDLENBQUM7SUFDSixDQUFDLENBQUM7RUFDSixDQUFDLEdBR0g7RUFDQSxJQUFJbkUsUUFBUSxDQUFDaUMsYUFBYSxDQUFDLFVBQVUsQ0FBQyxLQUFLLElBQUksRUFBRTtJQUMvQyxJQUFNcUMsU0FBUyxHQUFHLElBQUlmLE9BQU8sQ0FBQyxVQUFVLENBQUM7RUFDM0M7RUFDQTtBQUNGLENBQUMsQ0FBQyIsImZpbGUiOiJidW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyJkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbiAoKSB7XHJcbiAgLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIG5vLXVudXNlZC12YXJzLCBuby11bmRlZlxyXG4gIGNvbnN0IHN3aXBlciA9IG5ldyBTd2lwZXIoXCIuanMtbWFpbi1zd2lwZXJcIiwge1xyXG4gICAgc2xpZGVzUGVyVmlldzogMSxcclxuICAgIGR5bmFtaWNCdWxsZXRzOiB0cnVlLFxyXG4gICAgbG9vcDogdHJ1ZSxcclxuICAgIHBhZ2luYXRpb246IHtcclxuICAgICAgZWw6IFwiLm1haW4tc2xpZGVyX19wYWdpbmF0aW9uXCIsXHJcbiAgICB9LFxyXG4gICAgbmF2aWdhdGlvbjoge1xyXG4gICAgICBuZXh0RWw6IFwiLm1haW4tc2xpZGVyX19uZXh0XCIsXHJcbiAgICAgIHByZXZFbDogXCIubWFpbi1zbGlkZXJfX3ByZXZcIixcclxuICAgIH0sXHJcbiAgICBhdXRvcGxheToge1xyXG4gICAgICBkZWxheTogNTAwMCxcclxuICAgIH0sXHJcbiAgfSk7XHJcbiAgXHJcbiAgY29uc3QgbmV3c1N3aXBlciA9IG5ldyBTd2lwZXIoXCIuanMtbmV3cy1zd2lwZXJcIiwge1xyXG4gICAgc2xpZGVzUGVyVmlldzogMyxcclxuICAgIGR5bmFtaWNCdWxsZXRzOiB0cnVlLFxyXG4gICAgc3BhY2VCZXR3ZWVuOiAyNSxcclxuICAgIHBhZ2luYXRpb246IHtcclxuICAgICAgZWw6IFwiLm5ld3NfX3BhZ2luYXRpb25cIixcclxuICAgIH0sXHJcbiAgICBuYXZpZ2F0aW9uOiB7XHJcbiAgICAgIG5leHRFbDogXCIubmV3c19fbmV4dFwiLFxyXG4gICAgICBwcmV2RWw6IFwiLm5ld3NfX3ByZXZcIixcclxuICAgIH0sXHJcbiAgICBicmVha3BvaW50czoge1xyXG4gICAgICAzMjA6IHtcclxuICAgICAgICBzbGlkZXNQZXJWaWV3OiAxLFxyXG4gICAgICAgIHNwYWNlQmV0d2VlbjogMjAsXHJcbiAgICAgIH0sXHJcbiAgICAgIDY0MDoge1xyXG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDIsXHJcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiAyMCxcclxuICAgICAgfSxcclxuICAgICAgNzY4OiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMixcclxuICAgICAgICBzcGFjZUJldHdlZW46IDQwLFxyXG4gICAgICB9LFxyXG4gICAgICAxMDI0OiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMixcclxuICAgICAgICBzcGFjZUJldHdlZW46IDUwLFxyXG4gICAgICB9LFxyXG4gICAgICAxMjAwOiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMyxcclxuICAgICAgICBzcGFjZUJldHdlZW46IDI1LFxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICB9KTtcclxuICBcclxuICBjb25zdCBwbGF5c1N3aXBlciA9IG5ldyBTd2lwZXIoXCIuanMtcGxheXMtc3dpcGVyXCIsIHtcclxuICAgIHNsaWRlc1BlclZpZXc6IDMsXHJcbiAgICBkeW5hbWljQnVsbGV0czogdHJ1ZSxcclxuICAgIHNwYWNlQmV0d2VlbjogMjUsXHJcbiAgICBwYWdpbmF0aW9uOiB7XHJcbiAgICAgIGVsOiBcIi5wbGF5c19fcGFnaW5hdGlvblwiLFxyXG4gICAgfSxcclxuICAgIG5hdmlnYXRpb246IHtcclxuICAgICAgbmV4dEVsOiBcIi5wbGF5c19fbmV4dFwiLFxyXG4gICAgICBwcmV2RWw6IFwiLnBsYXlzX19wcmV2XCIsXHJcbiAgICB9LFxyXG4gICAgYnJlYWtwb2ludHM6IHtcclxuICAgICAgMzIwOiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMSxcclxuICAgICAgICBzcGFjZUJldHdlZW46IDIwLFxyXG4gICAgICB9LFxyXG4gICAgICA2NDA6IHtcclxuICAgICAgICBzbGlkZXNQZXJWaWV3OiAyLFxyXG4gICAgICAgIHNwYWNlQmV0d2VlbjogMjAsXHJcbiAgICAgIH0sXHJcbiAgICAgIDc2ODoge1xyXG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDIsXHJcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiA0MCxcclxuICAgICAgfSxcclxuICAgICAgMTAyNDoge1xyXG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDIsXHJcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiA1MCxcclxuICAgICAgfSxcclxuICAgICAgMTIwMDoge1xyXG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDMsXHJcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiAyNSxcclxuICAgICAgfSxcclxuICAgIH0sXHJcbiAgfSk7XHJcbiAgXHJcbiAgY29uc3QgcGVvcGxlc1N3aXBlciA9IG5ldyBTd2lwZXIoXCIuanMtcGVvcGxlcy1zd2lwZXJcIiwge1xyXG4gICAgc2xpZGVzUGVyVmlldzogNCxcclxuICAgIGR5bmFtaWNCdWxsZXRzOiB0cnVlLFxyXG4gICAgc3BhY2VCZXR3ZWVuOiAyNSxcclxuICAgIHBhZ2luYXRpb246IHtcclxuICAgICAgZWw6IFwiLnBlb3BsZXNfX3BhZ2luYXRpb25cIixcclxuICAgIH0sXHJcbiAgICBuYXZpZ2F0aW9uOiB7XHJcbiAgICAgIG5leHRFbDogXCIucGVvcGxlc19fbmV4dFwiLFxyXG4gICAgICBwcmV2RWw6IFwiLnBlb3BsZXNfX3ByZXZcIixcclxuICAgIH0sXHJcbiAgICBicmVha3BvaW50czoge1xyXG4gICAgICAzMjA6IHtcclxuICAgICAgICBzbGlkZXNQZXJWaWV3OiAxLFxyXG4gICAgICAgIHNwYWNlQmV0d2VlbjogMjAsXHJcbiAgICAgIH0sXHJcbiAgICAgIDY0MDoge1xyXG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDIsXHJcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiAyMCxcclxuICAgICAgfSxcclxuICAgICAgNzY4OiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMixcclxuICAgICAgICBzcGFjZUJldHdlZW46IDQwLFxyXG4gICAgICB9LFxyXG4gICAgICAxMDI0OiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMyxcclxuICAgICAgICBzcGFjZUJldHdlZW46IDUwLFxyXG4gICAgICB9LFxyXG4gICAgICAxMjAwOiB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogNCxcclxuICAgICAgICBzcGFjZUJldHdlZW46IDI1LFxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICAgIGF1dG9wbGF5OiB7XHJcbiAgICAgIGRlbGF5OiA1MDAwLFxyXG4gICAgfSxcclxuICB9KTtcclxufSk7XHJcblxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImxvYWRcIiwgZnVuY3Rpb24gKCkge1xyXG4gIGNvbnN0IHBhcmFncmFwaHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLmFydGljbGVfX3RleHQsIC5hcnRpY2xlX190aXRsZVwiKTtcclxuICBcclxuICBpZiAocGFyYWdyYXBocykge1xyXG4gICAgcGFyYWdyYXBocy5mb3JFYWNoKChwYXJhZ3JhcGgpID0+IHtcclxuICAgICAgaWYgKHBhcmFncmFwaC5zY3JvbGxIZWlnaHQgPiBwYXJhZ3JhcGguY2xpZW50SGVpZ2h0KSB7XHJcbiAgICAgICAgY29uc3QgdGV4dCA9IHBhcmFncmFwaC50ZXh0Q29udGVudC50cmltKCk7XHJcbiAgICAgICAgbGV0IHRydW5jYXRlZFRleHQgPSB0ZXh0O1xyXG4gIFxyXG4gICAgICAgIHdoaWxlIChcclxuICAgICAgICAgIHBhcmFncmFwaC5zY3JvbGxIZWlnaHQgPiBwYXJhZ3JhcGguY2xpZW50SGVpZ2h0ICYmXHJcbiAgICAgICAgICB0cnVuY2F0ZWRUZXh0Lmxlbmd0aCA+IDBcclxuICAgICAgICApIHtcclxuICAgICAgICAgIHRydW5jYXRlZFRleHQgPSB0cnVuY2F0ZWRUZXh0LnNsaWNlKDAsIC0xKTtcclxuICAgICAgICAgIHBhcmFncmFwaC50ZXh0Q29udGVudCA9IHRydW5jYXRlZFRleHQgKyBcIi4uLlwiO1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfVxyXG4gIC8qIGVzbGludC1kaXNhYmxlIGluZGVudCAqL1xyXG4gIC8qIGVzbGludC1kaXNhYmxlIHF1b3RlcyAqL1xyXG4gIC8qIGVzbGludC1kaXNhYmxlIG5vLXVudXNlZC12YXJzICovXHJcbiAgY29uc3QgYnVyZ2VyQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5idXJnZXItYnRuXCIpO1xyXG4gIGNvbnN0IGhlYWRlckNvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuaGVhZGVyX19jb250YWluZXJcIik7XHJcbiAgY29uc3QgbWFpbk1lbnUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1haW4tbWVudVwiKTtcclxuICBjb25zdCBsb2dvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5oZWFkZXJfX2xvZ29cIik7XHJcbiAgY29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5oZWFkZXJfX2NvbnRhaW5lclwiKTtcclxuICBcclxuICBjb25zdCBvcGVuQnVyZ2VyID0gZnVuY3Rpb24gKCkge1xyXG4gICAgYnVyZ2VyQnRuLmNsYXNzTGlzdC5hZGQoXCItLW9wZW5cIik7XHJcbiAgICBtYWluTWVudS5jbGFzc0xpc3QuYWRkKFwiLS1vcGVuXCIpO1xyXG4gICAgY29udGFpbmVyLmNsYXNzTGlzdC5hZGQoXCItLW9wZW5cIik7XHJcbiAgICBsb2dvLnN0eWxlLm9wYWNpdHkgPSAwO1xyXG4gICAgZG9jdW1lbnQuYm9keS5zdHlsZS5vdmVyZmxvdyA9IFwiaGlkZGVuXCI7XHJcbiAgfTtcclxuICBcclxuICBjb25zdCBjbG9zZUJ1cmdlciA9IGZ1bmN0aW9uICgpIHtcclxuICAgIGJ1cmdlckJ0bi5jbGFzc0xpc3QucmVtb3ZlKFwiLS1vcGVuXCIpO1xyXG4gICAgbWFpbk1lbnUuY2xhc3NMaXN0LnJlbW92ZShcIi0tb3BlblwiKTtcclxuICAgIGxvZ28uc3R5bGUub3BhY2l0eSA9IDE7XHJcbiAgICBkb2N1bWVudC5ib2R5LnN0eWxlLm92ZXJmbG93ID0gXCJcIjtcclxuICB9O1xyXG4gIFxyXG4gIGJ1cmdlckJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGUpID0+IHtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIGlmIChidXJnZXJCdG4uY2xhc3NMaXN0LmNvbnRhaW5zKFwiLS1vcGVuXCIpKSB7XHJcbiAgICAgIGNsb3NlQnVyZ2VyKCk7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICBvcGVuQnVyZ2VyKCk7XHJcbiAgICB9XHJcbiAgfSk7XHJcbiAgY29uc3QgdG9wQnV0dG9uID0gJChcIi5mb290ZXJfX2JhY2stdG8tdG9wXCIpO1xyXG4gIFxyXG4gIHRvcEJ1dHRvbi5vbihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgICQoXCJodG1sLCBib2R5XCIpLmFuaW1hdGUoeyBzY3JvbGxUb3A6IDAgfSwgMTAwMCk7XHJcbiAgfSk7XHJcbiAgY2xhc3MgR2FsbGFyeSB7XHJcbiAgICBjb25zdHJ1Y3RvcihzZWxlY3Rvcikge1xyXG4gICAgICAvLyDQndCw0YXQvtC00LjQvCDRjdC70LXQvNC10L3RgiAuZ2FsbGFyeSDQstC90YPRgtGA0Lgg0YPQutCw0LfQsNC90L3QvtCz0L4g0YHQtdC70LXQutGC0L7RgNCwXHJcbiAgICAgIHRoaXMuZ2FsbGVyeUVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKHNlbGVjdG9yKTtcclxuICBcclxuICAgICAgaWYgKCF0aGlzLmdhbGxlcnlFbGVtZW50KSB7XHJcbiAgICAgICAgY29uc29sZS5lcnJvcihgRWxlbWVudCB3aXRoIHNlbGVjdG9yIFwiJHtzZWxlY3Rvcn1cIiBub3QgZm91bmQuYCk7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgICB9XHJcbiAgXHJcbiAgICAgIC8vINCd0LDRhdC+0LTQuNC8INGN0LvQtdC80LXQvdGCIC5nYWxsYXJ5X192aWV3ZWQg0LLQvdGD0YLRgNC4IC5nYWxsYXJ5XHJcbiAgICAgIHRoaXMudmlld2VkSW1hZ2UgPSB0aGlzLmdhbGxlcnlFbGVtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZ2FsbGFyeV9fdmlld2VkXCIpO1xyXG4gIFxyXG4gICAgICBpZiAoIXRoaXMudmlld2VkSW1hZ2UpIHtcclxuICAgICAgICBjb25zb2xlLmVycm9yKFxyXG4gICAgICAgICAgJ0VsZW1lbnQgd2l0aCBjbGFzcyBcImdhbGxhcnlfX3ZpZXdlZFwiIG5vdCBmb3VuZCBpbnNpZGUgdGhlIGdhbGxlcnkuJ1xyXG4gICAgICAgICk7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgICB9XHJcbiAgXHJcbiAgICAgIC8vINCd0LDRhdC+0LTQuNC8INCy0YHQtSDRjdC70LXQvNC10L3RgtGLIC5nYWxsYXJ5X19pbWcg0LLQvdGD0YLRgNC4IC5nYWxsYXJ5XHJcbiAgICAgIHRoaXMuaW1hZ2VFbGVtZW50cyA9IHRoaXMuZ2FsbGVyeUVsZW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5nYWxsYXJ5X19pbWdcIik7XHJcbiAgXHJcbiAgICAgIGlmICh0aGlzLmltYWdlRWxlbWVudHMubGVuZ3RoID09PSAwKSB7XHJcbiAgICAgICAgY29uc29sZS5lcnJvcihcclxuICAgICAgICAgICdObyBlbGVtZW50cyB3aXRoIGNsYXNzIFwiZ2FsbGFyeV9faW1nXCIgZm91bmQgaW5zaWRlIHRoZSBnYWxsZXJ5LidcclxuICAgICAgICApO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgICAgfVxyXG4gIFxyXG4gICAgICAvLyDQlNC+0LHQsNCy0LvRj9C10Lwg0L7QsdGA0LDQsdC+0YLRh9C40Log0LrQu9C40LrQsCDQtNC70Y8g0LrQsNC20LTQvtCz0L4gLmdhbGxhcnlfX2ltZ1xyXG4gICAgICB0aGlzLmltYWdlRWxlbWVudHMuZm9yRWFjaCgoaW1nKSA9PiB7XHJcbiAgICAgICAgaW1nLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XHJcbiAgICAgICAgICAvLyDQn9C+0LvRg9GH0LDQtdC8INC30L3QsNGH0LXQvdC40LUg0LDRgtGA0LjQsdGD0YLQsCBzdHlsZSDRgyDQstGL0LHRgNCw0L3QvdC+0LPQviAuZ2FsbGFyeV9faW1nXHJcbiAgICAgICAgICBjb25zdCBpbWdTdHlsZSA9IGltZy5nZXRBdHRyaWJ1dGUoXCJzdHlsZVwiKTtcclxuICBcclxuICAgICAgICAgIC8vINCj0YHRgtCw0L3QsNCy0LvQuNCy0LDQtdC8INC30L3QsNGH0LXQvdC40LUg0LDRgtGA0LjQsdGD0YLQsCBzdHlsZSDQtNC70Y8gLmdhbGxhcnlfX3ZpZXdlZFxyXG4gICAgICAgICAgdGhpcy52aWV3ZWRJbWFnZS5zZXRBdHRyaWJ1dGUoXCJzdHlsZVwiLCBpbWdTdHlsZSk7XHJcbiAgICAgICAgfSk7XHJcbiAgICAgIH0pO1xyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLy8g0JjRgdC/0L7Qu9GM0LfQvtCy0LDQvdC40LUg0LrQu9Cw0YHRgdCwIEdhbGxhcnlcclxuICBpZiAoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5nYWxsYXJ5XCIpICE9PSBudWxsKSB7XHJcbiAgICBjb25zdCBteUdhbGxlcnkgPSBuZXcgR2FsbGFyeShcIi5nYWxsYXJ5XCIpO1xyXG4gIH1cclxuICAvL1xyXG59KTsiXX0=

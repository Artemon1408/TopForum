/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/slider */ "./src/js/modules/slider.js");
/* harmony import */ var _modules_burgermenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/burgermenu */ "./src/js/modules/burgermenu.js");
/* harmony import */ var _modules_pageup__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/pageup */ "./src/js/modules/pageup.js");
/* harmony import */ var _modules_dropdown__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/dropdown */ "./src/js/modules/dropdown.js");
/* harmony import */ var _modules_modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/modal */ "./src/js/modules/modal.js");
/* harmony import */ var _modules_tabs__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/tabs */ "./src/js/modules/tabs.js");
/* harmony import */ var _modules_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/forms */ "./src/js/modules/forms.js");







window.addEventListener("DOMContentLoaded", () => {
  try {
    Object(_modules_burgermenu__WEBPACK_IMPORTED_MODULE_1__["default"])();
    Object(_modules_slider__WEBPACK_IMPORTED_MODULE_0__["default"])(".promo__announce-item", ".promo__btn-prev", ".promo__btn-next");
    Object(_modules_slider__WEBPACK_IMPORTED_MODULE_0__["default"])(".reviews__slider", ".reviews__btn-prev", ".reviews__btn-next");
    Object(_modules_pageup__WEBPACK_IMPORTED_MODULE_2__["default"])();
    Object(_modules_dropdown__WEBPACK_IMPORTED_MODULE_3__["default"])();
    Object(_modules_modal__WEBPACK_IMPORTED_MODULE_4__["default"])();
    Object(_modules_tabs__WEBPACK_IMPORTED_MODULE_5__["default"])(".tab_sponsors", ".sponsors__option", ".sponsors-items");
    Object(_modules_tabs__WEBPACK_IMPORTED_MODULE_5__["default"])(".tab_exhibitors", ".exhibitors__option", ".exhibitors-items");
    Object(_modules_tabs__WEBPACK_IMPORTED_MODULE_5__["default"])(".tab_speakers", ".speakers__option", ".speakers-items");
    Object(_modules_forms__WEBPACK_IMPORTED_MODULE_6__["default"])();
  } catch (e) {}
});

/***/ }),

/***/ "./src/js/modules/burgermenu.js":
/*!**************************************!*\
  !*** ./src/js/modules/burgermenu.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const burgerMenu = () => {
  try {
    const menu = document.body.querySelector(".menu"),
      menuItem = document.body.querySelectorAll(".promo__nav-item"),
      hamburger = document.body.querySelector(".hamburger");
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("menu-active");
      if (hamburger.classList.contains("hamburger_active")) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "";
      }
    });
    menuItem.forEach(item => {
      item.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger_active");
        menu.classList.toggle("menu-active");
        if (menu.classList.contains("menu-active")) {
          document.body.style.overflow = "hidden";
        } else {
          document.body.style.overflow = "";
        }
      });
    });
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (burgerMenu);

/***/ }),

/***/ "./src/js/modules/checkNumInputs.js":
/*!******************************************!*\
  !*** ./src/js/modules/checkNumInputs.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const checkNumInputs = selector => {
  const numInputs = document.querySelectorAll(selector);
  numInputs.forEach(item => {
    item.addEventListener("input", () => {
      item.value = item.value.replace(/\D/, "");
    });
  });
};
/* harmony default export */ __webpack_exports__["default"] = (checkNumInputs);

/***/ }),

/***/ "./src/js/modules/dropdown.js":
/*!************************************!*\
  !*** ./src/js/modules/dropdown.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const dropdown = () => {
  try {
    const btns = document.querySelectorAll(".menu__dropdown"),
      sponCont = document.querySelector(".content-sponsors"),
      exhibCont = document.querySelector(".content-exhibitors"),
      speakCont = document.querySelector(".content-speakers"),
      mediaCont = document.querySelector(".content-media"),
      content = document.querySelectorAll(".menu__dropdown-content");
    function showDropDown() {
      btns.forEach(btn => {
        btn.addEventListener("click", e => {
          const target = e.target;
          if (target.matches(".drop_sponsors")) {
            sponCont.classList.toggle("sponsors-active");
          }
          if (target.matches(".drop_exhibitors")) {
            exhibCont.classList.toggle("exhibitors-active");
          }
          if (target.matches(".drop_speakers")) {
            speakCont.classList.toggle("speakers-active");
          }
          if (target.matches(".drop_media")) {
            mediaCont.classList.toggle("media-active");
          }
        });
      });
    }
    function closeAllDrop() {
      window.addEventListener("click", e => {
        const target = e.target;
        if (!target.matches(".menu__dropdown")) {
          sponCont.classList.remove("sponsors-active");
          exhibCont.classList.remove("exhibitors-active");
          speakCont.classList.remove("speakers-active");
          mediaCont.classList.remove("media-active");
        }
      });
    }
    function closeDropDown() {
      btns.forEach(btn => {
        btn.addEventListener("click", e => {
          const target = e.target;
          if (!target.matches(".drop_sponsors")) {
            sponCont.classList.remove("sponsors-active");
          }
          if (!target.matches(".drop_exhibitors")) {
            exhibCont.classList.remove("exhibitors-active");
          }
          if (!target.matches(".drop_speakers")) {
            speakCont.classList.remove("speakers-active");
          }
          if (!target.matches(".drop_media")) {
            mediaCont.classList.remove("media-active");
          }
        });
      });
    }
    showDropDown();
    closeDropDown();
    closeAllDrop();
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (dropdown);

/***/ }),

/***/ "./src/js/modules/forms.js":
/*!*********************************!*\
  !*** ./src/js/modules/forms.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _checkNumInputs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./checkNumInputs */ "./src/js/modules/checkNumInputs.js");

const forms = () => {
  try {
    const form = document.querySelectorAll("form"),
      inputs = document.querySelectorAll("input");
    Object(_checkNumInputs__WEBPACK_IMPORTED_MODULE_0__["default"])('input[name="phone"]');
    const message = {
      loading: "Загрузка...",
      succes: "Спасибо! Скоро мы с вами свяжемся",
      failure: "Что-то пошло не так..."
    };
    const postData = async (url, data) => {
      document.querySelector(".status").textContent = message.loading;
      let res = await fetch(url, {
        method: "POST",
        body: data
      });
      return await res.text();
    };
    const clearInputs = () => {
      inputs.forEach(item => {
        item.value = "";
      });
    };
    form.forEach(item => {
      item.addEventListener("submit", e => {
        e.preventDefault();
        let statusMessage = document.createElement("div");
        statusMessage.classList.add("status");
        item.appendChild(statusMessage);
        const formData = new FormData(item);
        postData("assets/server.php", formData).then(res => {
          console.log(res);
          statusMessage.textContent = message.succes;
        }).catch(() => statusMessage.textContent = message.failure).finally(() => {
          clearInputs();
          setTimeout(() => {
            statusMessage.remove();
          }, 5000);
        });
      });
    });
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (forms);

/***/ }),

/***/ "./src/js/modules/modal.js":
/*!*********************************!*\
  !*** ./src/js/modules/modal.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const modal = () => {
  try {
    function bindModal(triggerSelector, modalSelector, closeSelector) {
      const trigger = document.querySelectorAll(triggerSelector),
        modal = document.querySelector(modalSelector),
        close = document.querySelector(closeSelector),
        windows = document.querySelectorAll("[data-modal]"),
        scroll = calcScroll();
      trigger.forEach(item => {
        item.addEventListener("click", e => {
          if (e.target) {
            e.preventDefault();
          }
          windows.forEach(item => {
            item.style.display = "none";
          });
          modal.style.display = "block";
          document.body.style.overflow = "hidden";
          document.body.style.marginRight = `${scroll}px`;
        });
      });
      close.addEventListener("click", () => {
        windows.forEach(item => {
          item.style.display = "none";
        });
        modal.style.display = "none";
        document.body.style.overflow = "";
        document.body.style.marginRight = `0px`;
      });
      modal.addEventListener("click", e => {
        if (e.target === modal) {
          windows.forEach(item => {
            item.style.display = "none";
          });
          modal.style.display = "none";
          document.body.style.overflow = "";
          document.body.style.marginRight = `0px`;
        }
      });
    }
    function calcScroll() {
      let div = document.createElement("div");
      div.style.width = "50px";
      div.style.height = "50px";
      div.style.overflowY = "scroll";
      div.style.visibility = "hidden";
      document.body.appendChild(div);
      let scrollWidth = div.offsetWidth - div.clientWidth;
      div.remove();
      return scrollWidth;
    }
    bindModal(".btn_sub", ".popup", ".modal__close");
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (modal);

/***/ }),

/***/ "./src/js/modules/pageup.js":
/*!**********************************!*\
  !*** ./src/js/modules/pageup.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const pageUp = () => {
  try {
    const chevron = document.body.querySelector(".pageup");
    window.addEventListener("scroll", e => {
      e.preventDefault();
      let scroll_position = window.scrollY;
      if (scroll_position > 1600) {
        chevron.style.display = "block";
      } else {
        chevron.style.display = "none";
      }
    });
    chevron.addEventListener("click", e => {
      e.preventDefault();
      document.body.scrollIntoView({
        behavior: "smooth"
      });
    });
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (pageUp);

/***/ }),

/***/ "./src/js/modules/slider.js":
/*!**********************************!*\
  !*** ./src/js/modules/slider.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const slider = (slides, prev, next) => {
  try {
    let slideIndex = 1;
    const items = document.querySelectorAll(slides),
      dots = document.querySelectorAll(".reviews__dot");
    function showSlides(n) {
      if (n > items.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = items.length;
      }
      items.forEach(item => {
        item.classList.add("animate__animated");
        item.style.display = "none";
        item.addEventListener("touchstart", handleTouchStart);
        item.addEventListener("touchmove", handleTouchMove);
      });
      items[slideIndex - 1].style.display = "flex";
      dots.forEach(dot => {
        dot.classList.remove("active");
        dot.classList.add("animate__animated");
      });
      dots[slideIndex - 1].classList.add("active");
    }
    showSlides(slideIndex);
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    let firstPos = null;
    function handleTouchStart(e) {
      e.preventDefault();
      const firstTouch = e.touches[0];
      firstPos = firstTouch.clientX;
    }
    function handleTouchMove(e) {
      e.preventDefault();
      if (!firstPos) {
        return false;
      }
      let lastPos = e.touches[0].clientX;
      let xDiff = lastPos - firstPos;
      if (xDiff > 0) {
        plusSlides(-1);
        items[slideIndex - 1].classList.remove("animate__slideInRight");
        items[slideIndex - 1].classList.add("animate__slideInLeft");
        dots[slideIndex - 1].classList.add("active");
      }
      if (xDiff < 0) {
        plusSlides(1);
        items[slideIndex - 1].classList.remove("animate__slideInLeft");
        items[slideIndex - 1].classList.add("animate__slideInRight");
        dots[slideIndex - 1].classList.add("active");
      }
      firstPos = null;
    }
    try {
      const prevBtn = document.querySelector(prev),
        nextBtn = document.querySelector(next);
      prevBtn.addEventListener("click", () => {
        plusSlides(-1);
        items[slideIndex - 1].classList.remove("animate__slideInRight");
        items[slideIndex - 1].classList.add("animate__slideInLeft");
        dots[slideIndex - 1].classList.add("active");
      });
      nextBtn.addEventListener("click", () => {
        plusSlides(1);
        items[slideIndex - 1].classList.remove("animate__slideInLeft");
        items[slideIndex - 1].classList.add("animate__slideInRight");
        dots[slideIndex - 1].classList.add("active");
      });
    } catch (e) {}
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (slider);

/***/ }),

/***/ "./src/js/modules/tabs.js":
/*!********************************!*\
  !*** ./src/js/modules/tabs.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
const tabs = function (headerSelector, tabSelector, contentSelector) {
  let display = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : "flex";
  try {
    const header = document.querySelector(headerSelector),
      tab = document.querySelectorAll(tabSelector),
      content = document.querySelectorAll(contentSelector);
    function hideTabContent() {
      content.forEach(item => {
        item.style.display = "none";
      });
    }
    function showTabContent() {
      let i = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
      content[i].style.display = display;
    }
    hideTabContent();
    showTabContent();
    header.addEventListener("change", e => {
      const target = e.target.value;
      if (target) {
        tab.forEach((item, i) => {
          if (target == item.value || target.parentNode == item.value) {
            hideTabContent();
            showTabContent(i);
          }
        });
      }
    });
  } catch (e) {}
};
/* harmony default export */ __webpack_exports__["default"] = (tabs);

/***/ })

/******/ });
//# sourceMappingURL=script.js.map
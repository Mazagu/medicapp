/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/cima.js ***!
  \******************************/
function getDrug(id) {
  var _this = this;

  fetch('/cima/' + id, {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(function (response) {
    return response;
  }).then(function (coso) {
    console.log(coso);
    document.querySelect('body').appendChild(coso.body);
  })["catch"](function () {
    _this.message = 'Ooops! Something went wrong!';
  });
}
/******/ })()
;
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("$(\"header\").addClass('d-none');\n$(\"header\").addClass('fixed-top');\n$(\".navbar\").addClass('mb-5');\n$('button#menuBtn').addClass('d-none');\n$(document).ready(function () {\n  var headerSection = $(\"header\");\n  var menuBtn = $('button#menuBtn');\n  var topScrollSection = $(\"section.description\").offset();\n  topScrollSection = topScrollSection.top; // check position of section header for show header\n\n  $(window).on('scroll', function () {\n    var scroll = $(window).scrollTop();\n    var w = window.innerWidth;\n\n    if (scroll < topScrollSection) {\n      headerSection.addClass('d-none');\n      menuBtn.addClass('d-none');\n    } else {\n      headerSection.removeClass('d-none');\n      menuBtn.removeClass('d-none');\n    }\n  }); // toggle of card description\n\n  $(\"button\").on('click', function () {\n    $(this).parent().toggleClass(\"open\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcz8yNmQyIl0sIm5hbWVzIjpbIiQiLCJhZGRDbGFzcyIsImRvY3VtZW50IiwicmVhZHkiLCJoZWFkZXJTZWN0aW9uIiwibWVudUJ0biIsInRvcFNjcm9sbFNlY3Rpb24iLCJvZmZzZXQiLCJ0b3AiLCJ3aW5kb3ciLCJvbiIsInNjcm9sbCIsInNjcm9sbFRvcCIsInciLCJpbm5lcldpZHRoIiwicmVtb3ZlQ2xhc3MiLCJwYXJlbnQiLCJ0b2dnbGVDbGFzcyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWUMsUUFBWixDQUFxQixRQUFyQjtBQUNBRCxDQUFDLENBQUMsUUFBRCxDQUFELENBQVlDLFFBQVosQ0FBcUIsV0FBckI7QUFDQUQsQ0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhQyxRQUFiLENBQXNCLE1BQXRCO0FBQ0FELENBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CQyxRQUFwQixDQUE2QixRQUE3QjtBQUdBRCxDQUFDLENBQUNFLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFFMUIsTUFBSUMsYUFBYSxHQUFHSixDQUFDLENBQUMsUUFBRCxDQUFyQjtBQUNBLE1BQUlLLE9BQU8sR0FBR0wsQ0FBQyxDQUFDLGdCQUFELENBQWY7QUFDQSxNQUFJTSxnQkFBZ0IsR0FBR04sQ0FBQyxDQUFDLHFCQUFELENBQUQsQ0FBeUJPLE1BQXpCLEVBQXZCO0FBQ0FELEVBQUFBLGdCQUFnQixHQUFHQSxnQkFBZ0IsQ0FBQ0UsR0FBcEMsQ0FMMEIsQ0FRMUI7O0FBQ0FSLEVBQUFBLENBQUMsQ0FBQ1MsTUFBRCxDQUFELENBQVVDLEVBQVYsQ0FBYSxRQUFiLEVBQXVCLFlBQVk7QUFFL0IsUUFBSUMsTUFBTSxHQUFHWCxDQUFDLENBQUNTLE1BQUQsQ0FBRCxDQUFVRyxTQUFWLEVBQWI7QUFDQSxRQUFJQyxDQUFDLEdBQUdKLE1BQU0sQ0FBQ0ssVUFBZjs7QUFFQSxRQUFJSCxNQUFNLEdBQUdMLGdCQUFiLEVBQThCO0FBRTFCRixNQUFBQSxhQUFhLENBQUNILFFBQWQsQ0FBdUIsUUFBdkI7QUFDQUksTUFBQUEsT0FBTyxDQUFDSixRQUFSLENBQWlCLFFBQWpCO0FBRUgsS0FMRCxNQUtPO0FBRUhHLE1BQUFBLGFBQWEsQ0FBQ1csV0FBZCxDQUEwQixRQUExQjtBQUNBVixNQUFBQSxPQUFPLENBQUNVLFdBQVIsQ0FBb0IsUUFBcEI7QUFFSDtBQUVKLEdBakJELEVBVDBCLENBNkIxQjs7QUFDQWYsRUFBQUEsQ0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUFZVSxFQUFaLENBQWUsT0FBZixFQUF3QixZQUFXO0FBRS9CVixJQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFnQixNQUFSLEdBQWlCQyxXQUFqQixDQUE2QixNQUE3QjtBQUVILEdBSkQ7QUFNSCxDQXBDRCIsInNvdXJjZXNDb250ZW50IjpbIiQoXCJoZWFkZXJcIikuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuJChcImhlYWRlclwiKS5hZGRDbGFzcygnZml4ZWQtdG9wJyk7XG4kKFwiLm5hdmJhclwiKS5hZGRDbGFzcygnbWItNScpO1xuJCgnYnV0dG9uI21lbnVCdG4nKS5hZGRDbGFzcygnZC1ub25lJyk7XG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuXG4gICAgdmFyIGhlYWRlclNlY3Rpb24gPSAkKFwiaGVhZGVyXCIpO1xuICAgIHZhciBtZW51QnRuID0gJCgnYnV0dG9uI21lbnVCdG4nKTtcbiAgICB2YXIgdG9wU2Nyb2xsU2VjdGlvbiA9ICQoXCJzZWN0aW9uLmRlc2NyaXB0aW9uXCIpLm9mZnNldCgpO1xuICAgIHRvcFNjcm9sbFNlY3Rpb24gPSB0b3BTY3JvbGxTZWN0aW9uLnRvcDtcblxuXG4gICAgLy8gY2hlY2sgcG9zaXRpb24gb2Ygc2VjdGlvbiBoZWFkZXIgZm9yIHNob3cgaGVhZGVyXG4gICAgJCh3aW5kb3cpLm9uKCdzY3JvbGwnLCBmdW5jdGlvbiAoKSB7XG5cbiAgICAgICAgdmFyIHNjcm9sbCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICAgICAgdmFyIHcgPSB3aW5kb3cuaW5uZXJXaWR0aDtcblxuICAgICAgICBpZiAoc2Nyb2xsIDwgdG9wU2Nyb2xsU2VjdGlvbil7XG5cbiAgICAgICAgICAgIGhlYWRlclNlY3Rpb24uYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuICAgICAgICAgICAgbWVudUJ0bi5hZGRDbGFzcygnZC1ub25lJyk7XG5cbiAgICAgICAgfSBlbHNlIHtcblxuICAgICAgICAgICAgaGVhZGVyU2VjdGlvbi5yZW1vdmVDbGFzcygnZC1ub25lJyk7XG4gICAgICAgICAgICBtZW51QnRuLnJlbW92ZUNsYXNzKCdkLW5vbmUnKTtcblxuICAgICAgICB9XG5cbiAgICB9KTtcblxuXG4gICAgLy8gdG9nZ2xlIG9mIGNhcmQgZGVzY3JpcHRpb25cbiAgICAkKFwiYnV0dG9uXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXG4gICAgICAgICQodGhpcykucGFyZW50KCkudG9nZ2xlQ2xhc3MoXCJvcGVuXCIpO1xuXG4gICAgfSk7XG5cbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/welcome.js"]();
/******/ 	
/******/ })()
;
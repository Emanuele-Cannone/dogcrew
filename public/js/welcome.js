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

eval("$(\"header\").addClass('d-none');\n$('button#menuBtn').addClass('d-none');\n$(document).ready(function () {\n  var headerSection = $(\"header\");\n  var menuBtn = $('button#menuBtn');\n  var topScrollSection = $(\"section.description\").offset();\n  topScrollSection = topScrollSection.top; // check position of section header for show header\n\n  $(window).on('scroll', function () {\n    var scroll = $(window).scrollTop();\n    var w = window.innerWidth;\n\n    if (scroll < topScrollSection) {\n      headerSection.addClass('d-none');\n      menuBtn.addClass('d-none');\n    } else {\n      headerSection.removeClass('d-none');\n      menuBtn.removeClass('d-none');\n    }\n  }); // toggle of card description\n\n  $(\"button\").on('click', function () {\n    $(this).parent().toggleClass(\"open\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcz8yNmQyIl0sIm5hbWVzIjpbIiQiLCJhZGRDbGFzcyIsImRvY3VtZW50IiwicmVhZHkiLCJoZWFkZXJTZWN0aW9uIiwibWVudUJ0biIsInRvcFNjcm9sbFNlY3Rpb24iLCJvZmZzZXQiLCJ0b3AiLCJ3aW5kb3ciLCJvbiIsInNjcm9sbCIsInNjcm9sbFRvcCIsInciLCJpbm5lcldpZHRoIiwicmVtb3ZlQ2xhc3MiLCJwYXJlbnQiLCJ0b2dnbGVDbGFzcyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWUMsUUFBWixDQUFxQixRQUFyQjtBQUNBRCxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkMsUUFBcEIsQ0FBNkIsUUFBN0I7QUFHQUQsQ0FBQyxDQUFDRSxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBRTFCLE1BQUlDLGFBQWEsR0FBR0osQ0FBQyxDQUFDLFFBQUQsQ0FBckI7QUFDQSxNQUFJSyxPQUFPLEdBQUdMLENBQUMsQ0FBQyxnQkFBRCxDQUFmO0FBQ0EsTUFBSU0sZ0JBQWdCLEdBQUdOLENBQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCTyxNQUF6QixFQUF2QjtBQUNBRCxFQUFBQSxnQkFBZ0IsR0FBR0EsZ0JBQWdCLENBQUNFLEdBQXBDLENBTDBCLENBUTFCOztBQUNBUixFQUFBQSxDQUFDLENBQUNTLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsUUFBYixFQUF1QixZQUFZO0FBRS9CLFFBQUlDLE1BQU0sR0FBR1gsQ0FBQyxDQUFDUyxNQUFELENBQUQsQ0FBVUcsU0FBVixFQUFiO0FBQ0EsUUFBSUMsQ0FBQyxHQUFHSixNQUFNLENBQUNLLFVBQWY7O0FBRUEsUUFBSUgsTUFBTSxHQUFHTCxnQkFBYixFQUE4QjtBQUUxQkYsTUFBQUEsYUFBYSxDQUFDSCxRQUFkLENBQXVCLFFBQXZCO0FBQ0FJLE1BQUFBLE9BQU8sQ0FBQ0osUUFBUixDQUFpQixRQUFqQjtBQUVILEtBTEQsTUFLTztBQUVIRyxNQUFBQSxhQUFhLENBQUNXLFdBQWQsQ0FBMEIsUUFBMUI7QUFDQVYsTUFBQUEsT0FBTyxDQUFDVSxXQUFSLENBQW9CLFFBQXBCO0FBRUg7QUFFSixHQWpCRCxFQVQwQixDQTZCMUI7O0FBQ0FmLEVBQUFBLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWVUsRUFBWixDQUFlLE9BQWYsRUFBd0IsWUFBVztBQUUvQlYsSUFBQUEsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRZ0IsTUFBUixHQUFpQkMsV0FBakIsQ0FBNkIsTUFBN0I7QUFFSCxHQUpEO0FBTUgsQ0FwQ0QiLCJzb3VyY2VzQ29udGVudCI6WyIkKFwiaGVhZGVyXCIpLmFkZENsYXNzKCdkLW5vbmUnKTtcbiQoJ2J1dHRvbiNtZW51QnRuJykuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuXG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuICAgIHZhciBoZWFkZXJTZWN0aW9uID0gJChcImhlYWRlclwiKTtcbiAgICB2YXIgbWVudUJ0biA9ICQoJ2J1dHRvbiNtZW51QnRuJyk7XG4gICAgdmFyIHRvcFNjcm9sbFNlY3Rpb24gPSAkKFwic2VjdGlvbi5kZXNjcmlwdGlvblwiKS5vZmZzZXQoKTtcbiAgICB0b3BTY3JvbGxTZWN0aW9uID0gdG9wU2Nyb2xsU2VjdGlvbi50b3A7XG5cblxuICAgIC8vIGNoZWNrIHBvc2l0aW9uIG9mIHNlY3Rpb24gaGVhZGVyIGZvciBzaG93IGhlYWRlclxuICAgICQod2luZG93KS5vbignc2Nyb2xsJywgZnVuY3Rpb24gKCkge1xuXG4gICAgICAgIHZhciBzY3JvbGwgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCk7XG4gICAgICAgIHZhciB3ID0gd2luZG93LmlubmVyV2lkdGg7XG5cbiAgICAgICAgaWYgKHNjcm9sbCA8IHRvcFNjcm9sbFNlY3Rpb24pe1xuXG4gICAgICAgICAgICBoZWFkZXJTZWN0aW9uLmFkZENsYXNzKCdkLW5vbmUnKTtcbiAgICAgICAgICAgIG1lbnVCdG4uYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuXG4gICAgICAgIH0gZWxzZSB7XG5cbiAgICAgICAgICAgIGhlYWRlclNlY3Rpb24ucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpO1xuICAgICAgICAgICAgbWVudUJ0bi5yZW1vdmVDbGFzcygnZC1ub25lJyk7XG5cbiAgICAgICAgfVxuXG4gICAgfSk7XG5cblxuICAgIC8vIHRvZ2dsZSBvZiBjYXJkIGRlc2NyaXB0aW9uXG4gICAgJChcImJ1dHRvblwiKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcblxuICAgICAgICAkKHRoaXMpLnBhcmVudCgpLnRvZ2dsZUNsYXNzKFwib3BlblwiKTtcblxuICAgIH0pO1xuXG59KTsiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3dlbGNvbWUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

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
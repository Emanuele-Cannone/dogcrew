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

/***/ "./resources/js/post.js":
/*!******************************!*\
  !*** ./resources/js/post.js ***!
  \******************************/
/***/ (() => {

eval("var app = new Vue({\n  el: '#createPost',\n  data: {\n    http: ''\n  },\n  methods: {\n    myMethod: function myMethod() {\n      this.http.post('/api/items', {\n        name: \"my item\"\n      });\n    }\n  },\n  mounted: function mounted() {\n    BalloonEditor.create(document.querySelector('#editor'), {\n      toolbar: ['heading', '|', 'bold', 'italic', 'bulletedList', 'blockQuote', 'undo', 'redo'],\n      heading: {\n        options: [{\n          model: 'paragraph',\n          title: 'Paragraph',\n          \"class\": 'ck-heading_paragraph'\n        }, {\n          model: 'heading1',\n          view: 'h1',\n          title: 'Heading 1',\n          \"class\": 'ck-heading_heading1'\n        }, {\n          model: 'heading2',\n          view: 'h2',\n          title: 'Heading 2',\n          \"class\": 'ck-heading_heading2'\n        }]\n      }\n    })[\"catch\"](function (error) {\n      console.error(error);\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcG9zdC5qcz9jMGM0Il0sIm5hbWVzIjpbImFwcCIsIlZ1ZSIsImVsIiwiZGF0YSIsImh0dHAiLCJtZXRob2RzIiwibXlNZXRob2QiLCJwb3N0IiwibmFtZSIsIm1vdW50ZWQiLCJCYWxsb29uRWRpdG9yIiwiY3JlYXRlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwidG9vbGJhciIsImhlYWRpbmciLCJvcHRpb25zIiwibW9kZWwiLCJ0aXRsZSIsInZpZXciLCJlcnJvciIsImNvbnNvbGUiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLEdBQUcsR0FBRyxJQUFJQyxHQUFKLENBQVE7QUFDZEMsRUFBQUEsRUFBRSxFQUFFLGFBRFU7QUFFZEMsRUFBQUEsSUFBSSxFQUFFO0FBQ0ZDLElBQUFBLElBQUksRUFBRztBQURMLEdBRlE7QUFNZEMsRUFBQUEsT0FBTyxFQUFFO0FBRUxDLElBQUFBLFFBRkssc0JBRU07QUFDUCxXQUFLRixJQUFMLENBQVVHLElBQVYsQ0FDSSxZQURKLEVBRUk7QUFBRUMsUUFBQUEsSUFBSSxFQUFFO0FBQVIsT0FGSjtBQUtIO0FBUkksR0FOSztBQWlCZEMsRUFBQUEsT0FqQmMscUJBaUJKO0FBRU5DLElBQUFBLGFBQWEsQ0FDUkMsTUFETCxDQUNZQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsU0FBdkIsQ0FEWixFQUMrQztBQUN2Q0MsTUFBQUEsT0FBTyxFQUFFLENBQUMsU0FBRCxFQUFZLEdBQVosRUFBaUIsTUFBakIsRUFBeUIsUUFBekIsRUFBbUMsY0FBbkMsRUFBbUQsWUFBbkQsRUFBaUUsTUFBakUsRUFBeUUsTUFBekUsQ0FEOEI7QUFFdkNDLE1BQUFBLE9BQU8sRUFBRTtBQUNMQyxRQUFBQSxPQUFPLEVBQUUsQ0FDTDtBQUFFQyxVQUFBQSxLQUFLLEVBQUUsV0FBVDtBQUFzQkMsVUFBQUEsS0FBSyxFQUFFLFdBQTdCO0FBQTBDLG1CQUFPO0FBQWpELFNBREssRUFFTDtBQUFFRCxVQUFBQSxLQUFLLEVBQUUsVUFBVDtBQUFxQkUsVUFBQUEsSUFBSSxFQUFFLElBQTNCO0FBQWlDRCxVQUFBQSxLQUFLLEVBQUUsV0FBeEM7QUFBcUQsbUJBQU87QUFBNUQsU0FGSyxFQUdMO0FBQUVELFVBQUFBLEtBQUssRUFBRSxVQUFUO0FBQXFCRSxVQUFBQSxJQUFJLEVBQUUsSUFBM0I7QUFBaUNELFVBQUFBLEtBQUssRUFBRSxXQUF4QztBQUFxRCxtQkFBTztBQUE1RCxTQUhLO0FBREo7QUFGOEIsS0FEL0MsV0FXVyxVQUFBRSxLQUFLLEVBQUk7QUFDWkMsTUFBQUEsT0FBTyxDQUFDRCxLQUFSLENBQWNBLEtBQWQ7QUFDSCxLQWJMO0FBY0g7QUFqQ2EsQ0FBUixDQUFWIiwic291cmNlc0NvbnRlbnQiOlsidmFyIGFwcCA9IG5ldyBWdWUoe1xuICAgIGVsOiAnI2NyZWF0ZVBvc3QnLFxuICAgIGRhdGE6IHtcbiAgICAgICAgaHR0cCA6ICcnXG5cbiAgICB9LFxuICAgIG1ldGhvZHM6IHtcblxuICAgICAgICBteU1ldGhvZCgpIHtcbiAgICAgICAgICAgIHRoaXMuaHR0cC5wb3N0KFxuICAgICAgICAgICAgICAgICcvYXBpL2l0ZW1zJyxcbiAgICAgICAgICAgICAgICB7IG5hbWU6IFwibXkgaXRlbVwiIH1cbiAgICAgICAgICAgICk7XG5cbiAgICAgICAgfVxuXG4gICAgfSxcbiAgICBtb3VudGVkKCkge1xuXG4gICAgICAgIEJhbGxvb25FZGl0b3JcbiAgICAgICAgICAgIC5jcmVhdGUoZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2VkaXRvcicpLCB7XG4gICAgICAgICAgICAgICAgdG9vbGJhcjogWydoZWFkaW5nJywgJ3wnLCAnYm9sZCcsICdpdGFsaWMnLCAnYnVsbGV0ZWRMaXN0JywgJ2Jsb2NrUXVvdGUnLCAndW5kbycsICdyZWRvJ10sXG4gICAgICAgICAgICAgICAgaGVhZGluZzoge1xuICAgICAgICAgICAgICAgICAgICBvcHRpb25zOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7IG1vZGVsOiAncGFyYWdyYXBoJywgdGl0bGU6ICdQYXJhZ3JhcGgnLCBjbGFzczogJ2NrLWhlYWRpbmdfcGFyYWdyYXBoJyB9LFxuICAgICAgICAgICAgICAgICAgICAgICAgeyBtb2RlbDogJ2hlYWRpbmcxJywgdmlldzogJ2gxJywgdGl0bGU6ICdIZWFkaW5nIDEnLCBjbGFzczogJ2NrLWhlYWRpbmdfaGVhZGluZzEnIH0sXG4gICAgICAgICAgICAgICAgICAgICAgICB7IG1vZGVsOiAnaGVhZGluZzInLCB2aWV3OiAnaDInLCB0aXRsZTogJ0hlYWRpbmcgMicsIGNsYXNzOiAnY2staGVhZGluZ19oZWFkaW5nMicgfVxuICAgICAgICAgICAgICAgICAgICBdXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcihlcnJvcik7XG4gICAgICAgICAgICB9KTtcbiAgICB9XG5cblxufSk7XG5cblxuXG5cblxuXG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3Bvc3QuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/post.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/post.js"]();
/******/ 	
/******/ })()
;
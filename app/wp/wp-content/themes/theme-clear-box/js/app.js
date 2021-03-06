webpackJsonp([0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	//jsファイルを読み込み
	__webpack_require__(1);


/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	(function(){

	    'use strict';

	    //mainvisualの高さを全画面表示に
	    var $window = $(window),
	        $mainView = $('#js-main-view-visual');

	    var NAV_HEIGHT = 60;

	    //mainvisualの高さを全画面表示に
	    function styledHeight() {
	        $mainView.css('height', $window.height() - NAV_HEIGHT);
	    }

	    if($mainView.size() > 0) {

	        styledHeight();
	        $window.on('resize', styledHeight);

	        //particlesJS
	        var COLOR_B = '#00CCCC';
	        particlesJS('js-main-view-visual', {
	            particles: {
	                color: COLOR_B,
	                color_random: false,
	                shape: 'circle', // "circle", "edge" or "triangle"
	                opacity: {
	                    opacity: 1,
	                    anim: {
	                        enable: false,
	                        speed: 1.5,
	                        opacity_min: 0,
	                        sync: false
	                    }
	                },
	                size: 2.5,
	                size_random: true,
	                nb: 100,
	                line_linked: {
	                    enable_auto: true,
	                    distance: 140,
	                    color: COLOR_B,
	                    opacity: 1,
	                    width: 1,
	                    condensed_mode: {
	                        enable: false,
	                        rotateX: 600,
	                        rotateY: 600
	                    }
	                },
	                anim: {
	                    enable: true,
	                    speed: 1
	                }
	            },
	            interactivity: {
	                enable: true,
	                mouse: {
	                    distance: 250
	                },
	                detect_on: 'canvas', // "canvas" or "window"
	                mode: 'grab', // "grab" of false
	                line_linked: {
	                    opacity: .5
	                },
	                events: {
	                    onclick: {
	                        enable: true,
	                        mode: 'push', // "push" or "remove"
	                        nb: 4
	                    },
	                    onresize: {
	                        enable: true,
	                        mode: 'out', // "out" or "bounce"
	                        density_auto: false,
	                        density_area: 800 // nb_particles = particles.nb * (canvas width *  canvas height / 1000) / density_area
	                    }
	                }
	            },
	            /* Retina Display Support */
	            retina_detect: true
	        });
	    }
	})();

/***/ }
]);
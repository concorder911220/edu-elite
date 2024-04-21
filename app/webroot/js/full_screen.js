function requestFullScreen() {
	var elem = document.documentElement;
	document.addEventListener('fullscreenerror', (event) => {
		fullScreenReduced();
	});
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
		screenStretch();
	} else if (elem.msRequestFullscreen) {
		elem.msRequestFullscreen();
		screenStretch();
	} else if (elem.mozRequestFullScreen) {
		elem.mozRequestFullScreen();
		screenStretch();

	} else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen();
		screenStretch();
	}

}

function exitFullscreen() {
	var elem = document.documentElement;
	if (elem.exitFullscreen) {
		elem.exitFullscreen();
	} else if (elem.exitFullscreen) {
		elem.exitFullscreen();
	} else if (elem.exitFullscreen) {
		elem.exitFullscreen();
	} else if (elem.exitFullscreen) {
		elem.exitFullscreen();
	}
}

function screenStretch() {
	var windowHeight = window.screen.height;
	if (parseInt(windowHeight) > 768) {
		var myHeight = windowHeight - 768;
	} else {
		var myHeight = (windowHeight - 768) + 65;
	}
	if(parseInt(windowHeight)>825) {
		var examQuestionCss = 500 + myHeight;
		var examQuestionBox = 495 + myHeight;
		var examQuestionPalette = 399 + myHeight;
		var examQuestionPassage = 475 + myHeight;
	}else{
		var examQuestionCss = 375 + myHeight;
		var examQuestionBox = 340 + myHeight;
		if (parseInt(windowHeight) > 768) {
			var examQuestionPalette = 274 + myHeight;
		}else{
			var examQuestionPalette = 220 + myHeight;
		}
		var examQuestionPassage = 375 + myHeight;
	}
	$('.fullscreen').hide();
	$('.normalscreen').show();
	$("div.exam-Question").css({"min-height": examQuestionCss + "px", "height": examQuestionCss + "px"});
	$("div.exam-questionBox").css({"min-height": examQuestionBox + "px", "height": examQuestionBox + "px"});
	$("#exam-divQuestionPallete").css({
		"min-height": examQuestionPalette + "px",
		"height": examQuestionPalette + "px"
	});
	$("div.exam-divPassage").css({
		"min-height": examQuestionPassage + "px",
		"height": examQuestionPassage + "px"
	});
}

if (document.addEventListener) {
	document.addEventListener('webkitfullscreenchange', exitHandler, false);
	document.addEventListener('mozfullscreenchange', exitHandler, false);
	document.addEventListener('fullscreenchange', exitHandler, false);
	document.addEventListener('MSFullscreenChange', exitHandler, false);
}

function exitHandler() {
	if (document.webkitIsFullScreen === false) {
		fullScreenReduced();
	} else if (document.mozFullScreen === false) {
		fullScreenReduced();
	} else if (document.msFullscreenElement === false) {
		fullScreenReduced();
	}
}

function fullScreenReduced() {
	var windowHeight = window.screen.height;
	if(parseInt(windowHeight) > 768) {
		var myHeight = windowHeight - 768;
	}else{
		var myHeight =  (windowHeight-768)+65;
	}
	if (parseInt(windowHeight) > 768) {
		var examQuestionCss = 380 + myHeight;
		var examQuestionBox = 330 + myHeight;
		var examQuestionPalette = 284 + myHeight;
	}else{
		var examQuestionCss = 320 + myHeight;
		var examQuestionBox = 310 + myHeight;
		var examQuestionPalette = 240 + myHeight;
	}
	var examQuestionPassage = 375 + myHeight;
	$('.normalscreen').hide();
	$('.fullscreen').show();
	$("div.exam-Question").css({"min-height": examQuestionCss + "px", "height": examQuestionCss + "px"});
	$("div.exam-questionBox").css({"min-height": examQuestionBox + "px", "height": examQuestionBox + "px"});
	$("#exam-divQuestionPallete").css({
		"min-height": examQuestionPalette + "px",
		"height": examQuestionPalette + "px"
	});
	$("div.exam-divPassage").css({
		"min-height": examQuestionPassage + "px",
		"height": examQuestionPassage + "px"
	});
}

$(document).ready(function () {
	$('.normalscreen').hide();
	fullScreenReduced();
	//requestFullScreen();
});

$(document).ready(function() {
	var width;
	var curPos = 0;
	var tarPos = 0;
	var maxPos = 0;
	
	var interval;
	var intervalRun = false;
	var currentMove;
	var time = 0;

	var players = document.querySelectorAll('.ckin__player');

	players.forEach(function (player) {
		var movie = player.querySelector("video");

		movie.addEventListener('play', (event) => {
			$('#carousel-custom').carousel('pause');
		});

		movie.addEventListener('pause', (event) => {
			$('#carousel-custom').carousel('cycle');
		});
	});
	
	jQuery('.carousel-container').scrollbar({ 
		"onScroll": function(y, x){ 
			curPos = x.scroll;
			maxPos = x.maxScroll;
		},
		"onUpdate": function(){ 
			width = $('#carousel-selector-0').width() + 5;
		} 
	});
	
	$('.carousel-container').mouseup(function() {
		setTimeout(function() {
			var min = 0;
			var max = width;
			
			while (curPos > max)
			{
				min += width;
				max += width;
			}
			
			var tar;
			if ((max - curPos) < (curPos - min)) { 
				tar = max;
			} else {
				tar = min;
			}
			
			if (intervalRun === false)
			{
				tarPos = tar;
				intervalRun = true;
				currentMove = curPos;
				time = 0;
				interval = setInterval(function(){smooth(0.015)}, 1);
			}
		}, 50);
	});
	
	$('#carousel-custom').carousel({
		interval: 10000
	});
	
	// handles the carousel thumbnails
	$('[id^=carousel-selector-]').click( function(){
		var id_selector = $(this).attr("id");
		var id = id_selector.substr(id_selector.length -1);
		id = parseInt(id);
		$('#carousel-custom').carousel(id);
		$('[id^=carousel-selector-]').removeClass('active');
		$(this).addClass('active');
		
		if (intervalRun === false)
		{
			tarPos = width * id;
			intervalRun = true;
			currentMove = curPos;
			time = 0;
			interval = setInterval(function(){smooth(0.005)}, 1);
		}
	});

	// when the carousel slides, auto update
	$('#carousel-custom').bind('slid.bs.carousel', function (e) {
		var id = $('.item.active').data('slide-number');
		id = parseInt(id);
		stopAllVideos();
		$('[id^=carousel-selector-]').removeClass('active');
		$('[id=carousel-selector-'+id+']').addClass('active');
		
		if (intervalRun === false)
		{
			tarPos = width * id;
			intervalRun = true;
			currentMove = curPos;
			time = 0;
			interval = setInterval(function(){smooth(0.005)}, 1);
		}
	});

	function stopAllVideos() {
		var players = document.querySelectorAll('.ckin__player');

		players.forEach(function (player) {
			player.querySelector("video").pause();
		});
	}
	
	function smooth(step) {
		if (tarPos > maxPos)
			tarPos = maxPos;
		
		time += step;
		
		if (time >= 1) 
		{
			time = 1;
			jQuery('.carousel-container').scrollLeft(tarPos * time);
			intervalRun = false;
			clearInterval(interval);
		}
		
		jQuery('.carousel-container').scrollLeft(lerp(currentMove, tarPos, time));
	}
	
	function lerp(a, b, t) {
		var newt = (-20 * Math.pow(t, 7) + 70 * Math.pow(t, 6) - 84 * Math.pow(t, 5) + 35 * Math.pow(t, 4));
    	var x = a + newt * (b - a);
		return x;
	}

});

/*
3x^2\ -\ 2x^3

(3 * Math.pow(time, 2) - 2 * Math.pow(time, 3))
x = A + t * (B - A)


function smooth() {
			var currentMove = curPos;
			if (currentMove >= tarPos) clearInterval(interval);
			currentMove++;
			jQuery('.carousel-container').scrollLeft(currentMove);
	}

SmoothMovement.js

Facilitates smooth movement effects

Created by Stephen Morley - http://code.stephenmorley.org/ - and released under
the terms of the CC0 1.0 Universal legal code:

http://creativecommons.org/publicdomain/zero/1.0/legalcode

*/

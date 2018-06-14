var $vid = $("#fpv-badass");
var $videoControls = $('#badass-vid-controls');
var btnPlayPauseActive = false;
var btnSoundActive = false;
var $buttonPlayPause = $('.btn-playpause');
var $icoSound = $('.btn-sound .icon-fp-controls-ico-snd-white');
var $icoPlayPause = $('.btn-playpause .icon-fp-controls-ico-playpause');
var timeout = null;

var $iconPlay = $('.btn-playpause .icon-o-play');
var $iconPause = $('.btn-playpause .icon-o-pause');

var $iconMuted = $('.btn-sound .icon-o-muted');
var $iconUnmuted = $('.btn-sound .icon-o-unmuted');

var $iconReplay = $('.btn-playpause .icon-o-replay');



var _isReplayIconVisible = false;


function setButtonIconInitialOpacityValues()
{
	$iconPlay.fadeOut(25);
	$iconReplay.fadeOut(25);
	$iconUnmuted.fadeOut(25);
}

function showReplayButton()
{
	$iconPause.fadeOut(25);
	$iconPlay.fadeOut(25);
	$iconReplay.delay(25).fadeIn(250);
	_isReplayIconVisible = true;
}

function addMouseMoveHandlers()
{
	$(document).mousemove(onDocumentMouseMove);
}

function onDocumentMouseMove() 
{
	clearTimeout(timeout);
	$videoControls.fadeIn(300);
	timeout = setTimeout(function() 
	{
		$videoControls.fadeOut(500);
//		console.clear();
//		console.log("Mouse idle for 3000ms. Temporarily fading contols.");
	}, 3000);
}

function removeMouseMoveHandlers()
{   
	$videoControls.fadeIn(300);
	$(document).unbind("mousemove");
}

function killMouseMoveTimeout()
{
	clearTimeout(timeout);
	timeout = null;
}

function setupAndPlay()
{
	$vid[0].play();
	addMouseMoveHandlers();
}

function onDocumentLoaded()
{
	setButtonIconInitialOpacityValues();
}

$(document).ready(function(e)
{
	//sets states of buttons (which are visible) at load.
	onDocumentLoaded();
	
	function checkVidIsPlaying()
	{
		return ($vid[0].paused) ? false : true;
	}

	function checkVidIsMuted()
	{
		return $vid[0].muted;
	}
	
	
	$('.btn-playpause').click(function(e)
	{
		if(_isReplayIconVisible)
		{
			$vid[0].play();
			$iconReplay.fadeOut(50,function()
			{
				$iconPause.fadeIn(50);
			});
			_isReplayIconVisible = false;
			return;
		}
		
//		$vid.toggleClass("stopfade");
		
		var _isVidPlaying = checkVidIsPlaying();

		if (!_isVidPlaying)
		{
			$vid[0].play();
			$iconPlay.fadeOut(50,function()
			{
				$iconPause.fadeIn(50);
			});
		}
		else
		{
			$vid[0].pause();
			$iconPause.fadeOut(50,function()
			{
				$iconPlay.fadeIn(50);
			});
		}
	});

	$('.btn-sound').click(function(e)
	{
		var _isMuted = checkVidIsMuted();

		if(_isMuted)
		{
			$vid[0].muted = false;
			$iconMuted.fadeOut(50,function()
			{
				$iconUnmuted.fadeIn(50);
			});
		}
		else
		{
			$vid[0].muted = true;
			$iconUnmuted.fadeOut(50,function()
			{
				$iconMuted.fadeIn(50);
			});
		}
	});
	
	
	
	$('.btn-replay').click(function(e)
	{
		$vid[0].play();
	});
	
	$('.btn-playpause').hover(function(e)
	{
		var _isVidPlaying = checkVidIsPlaying();
		(_isVidPlaying) ? $iconPause.addClass("hover") : $iconPlay.addClass("hover");		
	},
	function(e)
	{
		var _isVidPlaying = checkVidIsPlaying();
		(_isVidPlaying) ? $iconPause.removeClass("hover") : $iconPlay.removeClass("hover");
	});

	$('.btn-sound').hover(function(e)
	{
		var _isMuted = checkVidIsMuted();
		(_isMuted) ? $iconMuted.addClass("hover") : $iconUnmuted.addClass("hover");

	},
	function(e)
	{
		var _isMuted = checkVidIsMuted();
		(_isMuted) ? $iconMuted.removeClass("hover") : $iconUnmuted.removeClass("hover");
	});

	$('.btn-replay').hover(function(e){  $iconReplay.addClass("hover");  }, function(e){  $iconReplay.removeClass("hover");  });

	$vid.on('ended',function()
	{
		$vid[0].pause();
		showReplayButton();
		removeMouseMoveHandlers();
		killMouseMoveTimeout();
	});
});


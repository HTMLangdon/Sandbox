$(document).ready(function(e)
{
	var _window = { w: window };
	var FUN_setFontLiquid = null;
	var stopLiquidBrowserWidth = 767;
	function setFontLiquid(e)
	{
//		console.log("liquid-text.js::  setFontLiquid(e): called...");
		var _fsx, _fsy, _fs, _adj, _n;

		// get the window dimensions
		_window.x = _window.w.innerWidth || _window.e.clientWidth || _window.g.clientWidth;
		_window.y = _window.w.innerHeight || _window.e.clientHeight || _window.g.clientHeight;

		// we get the "base font-size" by dividing into our "core" dimension on 1024x768 and multiplying
		// the result by 16 (initial font size for most 
		var _fsx = (_window.x / 1440) * 21;
		var _fsy = (_window.y / 998.4) * 21; 
		// if width > height, then we get the average font size from width and height calculations
		// otherwise, if the width of the window is less than the height, we use the width based size
		var _fs = null;
		if(_window.x > _window.y)
		{
			_fs = ((_fsx + _fsy) * 0.5)
		}
		else if(_window.x <= stopLiquidBrowserWidth)
		{
			_fs = 16;
//			console.log("We are in the small version, liquify.js has set the font-size to a constant, yet smooth 16px.. mmm.");
		}
		else
		{
			_fs =	_fsx;
		}

		// our minimum base font-size should be 8px, or whatever you want
		if (_fs < 8)
		{
			 _fs = 8;
		}

		// our maximum base font-size should be 20px, or whatever you want
		if (_fs > 22)
		{
			 _fs = 22;
		}

		// we bring the decimal point down to two places, so our performance doesn't take a hit
		// when trying to calculate text at a size of 8.1294129836928352903862391em 
		_n = parseFloat(_fs, 10).toFixed(2);

		// setup the css definition object once
		_adj = {
			 fontSize: _n + 'px'
		};

		// set the base font size onto our dfs class elements                
		$('.liquify').css(_adj);

	}
	FUN_setFontLiquid = setFontLiquid;
	// run on window resize
	$(window).on('resize', setFontLiquid);
	
	setTimeout(function(){FUN_setFontLiquid()},10);
	
	
    });
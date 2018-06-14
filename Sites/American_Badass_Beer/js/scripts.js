$(document).ready(function(){
	"use strict";
	// Nav Sticky
	
	$(window).scroll(function()
	{
		if($(window).scrollTop() > 500 && !$('.mobile-toggle').is(":visible"))
		{
			$('.top-bar').addClass('nav-sticky');
		}
		else
		{
			$('.top-bar').removeClass('nav-sticky');
		}
	});

	// Offscreen Nav
	$('.offscreen-toggle').click(function()
	{
		$('.main-container').toggleClass('reveal-nav');
		$('.offscreen-container').toggleClass('reveal-nav');
		$('.offscreen-menu .container').toggleClass('reveal-nav');
	});

	$('.main-container').click(function()
	{
		if($(this).hasClass('reveal-nav'))
		{
			$('.main-container').toggleClass('reveal-nav');
			$('.offscreen-container').toggleClass('reveal-nav');
			$('.offscreen-menu .container').toggleClass('reveal-nav');
		}
	});
	
	// Smooth scroll
	
	$('.inner-link').smoothScroll({offset: -96, speed: 800});
	
	// Mobile Toggle
	
	$('.mobile-toggle').click(function()
	{
		$('nav').toggleClass('open-nav');
	});
	//redirect timer/delay script deketed	


	
	
	
	
	// Append .background-image-holder <img>'s as CSS backgrounds
	
	$('.background-image-holder').each(function(){
		var imgSrc= $(this).children('img').attr('src');
		$(this).css('background', 'url("' + imgSrc + '")');
		$(this).children('img').hide();
	    $(this).css('background-position', '50% 0%');
	});



});









$(window).load(function()
{

  "use strict";
	
	
	// Align Elements Vertically	---- What elements????
	alignVertical();
	alignBottom();
	 
	//Calls to set the FPVideo dimensions' on window load so it's W&H are set 
	scaleFPVideoDimensions();
	
	$(window).resize(onWindowResizeAlignAndSetWH);
	function onWindowResizeAlignAndSetWH()
	{
		alignVertical();
		alignBottom();
		scaleFPVideoDimensions();
		setFPVideoVisible();
		
		
	};
	
	
	
	
	
	
	//
	///
	////
	///// 	ˇˇˇˇ   			-=* DELETE THIS  *-=            ˇˇˇˇ
	/////				-=* MAKE SURE ITS COOL AFTER THOUGH! *=-
	////
	///		ˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇˇ
	//



    // Remove Loader
    
    $('.loader').css('opacity', 0);
    setTimeout(function(){$('.loader').hide();}, 600);
    //====================================================================::::::::::::::::::::::::::::::
	
	
	//SIGN UP TO RECEIVE NEWS - Email form used on the index.html page 
	// Mailchimp/Campaign Monitor Mail List Form Scripts
	$('form.mail-list-signup').on('submit', function()
	{
		
		var iFrame = $(this).closest('section, header').find('iframe.mail-list-form'),
		thisForm 		= $(this).closest('.mail-list-signup'),
		userEmail 		= $(this).find('.signup-email-field').val(),
		userFullName 	= $(this).find('.signup-name-field').val(),
		userFirstName 	= $(this).find('.signup-first-name-field').val(),
		userLastName 	= $(this).find('.signup-last-name-field').val(),
		error			= 0;
		
		$(thisForm).find('.validate-required').each(function()
		{
			if($(this).val() === '')
			{
				$(this).addClass('field-error');
				error = 1;
			}
			else
			{
				$(this).removeClass('field-error');
			}
		});
		
		$(thisForm).find('.validate-email').each(function()
		{
			if(!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val())))
			{
				$(this).addClass('field-error');
				error = 1;
			}
			else
			{
				$(this).removeClass('field-error');
			}
		});
		
		if(error === 0)
		{
			iFrame.contents().find('#mce-EMAIL, #fieldEmail').val(userEmail);
			iFrame.contents().find('#mce-LNAME, #fieldLastName').val(userLastName);
			iFrame.contents().find('#mce-FNAME, #fieldFirstName').val(userFirstName);
			iFrame.contents().find('#mce-FNAME, #fieldName').val(userFullName);		
			iFrame.contents().find('form').attr('target', '_blank').submit();
		}
		return false;
	});
	// ============:::: END mailchimp subscribe email form script ::::=-
	
	
	// Blog Masonry - For the gallery page (labeled 'media' on the site nav)
	$('.blog-masonry-container').isotope(
	{
		itemSelector: '.blog-masonry-item',
		layoutMode: 'masonry'
	});

	$('.blog-filters li').click(function()
	{
		var current = $(this);

		current.siblings('li').removeClass('active');
		current.addClass('active');

		var filterValue = current.attr('data-filter');
		var container = current.closest('.blog-masonry').find('.blog-masonry-container');
		container.isotope({ filter: filterValue });
	});
	// ============:::: END Masonry ::::=-

});



//called on window resize and on page/document ready
function alignVertical()
{
		$('.align-vertical').each(function(){
			var that = $(this);
			var height = that.height();
			var parentHeight = that.parent().height();
			var padAmount = (parentHeight / 2) - (height/2);
			that.css('padding-top', padAmount);
		});
}

//called on window resize and on page/document ready
function alignBottom()
{
	$('.align-bottom').each(function(){
		var that = $(this);
		var height = that.height();
		var parentHeight = that.parent().height();
		var padAmount = (parentHeight) - (height) - 32;
		that.css('padding-top', padAmount);
	});
}

//called on window resize and on page/document ready
//This helps the full page video scale correctly without showing the background
function scaleFPVideoDimensions()
{
	var videoContainerWidth = $(window).width();
	var videoContainerHeight = $(window).height();
	$('#fp-video-container').width(videoContainerWidth).height(videoContainerHeight - 50);	
}


		
function setFPVideoVisible()
{
	var videoContainerWidth = $(window).width();
	var videoContainerHeight = $(window).height();
	$('#fp-video-container').width(videoContainerWidth).height(videoContainerHeight - 50);	
	
	//	//////
	//	//////
	//	//////
	//	//////
	//	//////
	//	//////

	if(Modernizr.mq('(min-width: 767px)'))
	{
		//console.log("max-width modernizr is 767px!!!!!!!!!!!!!!!!!!!!!!!!!!!");
	}
	//	//////
	//	//////
	//	//////   ^^^ WORKS USE ^^^
	//	//////   ^^^ WORKS USE ^^^
	//	//////   ^^^ WORKS USE ^^^
	//	//////
	//	//////
	
}






















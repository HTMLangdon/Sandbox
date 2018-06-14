var INSTAGRAM = "instagram";
var TWITTER = "twitter"
var ACCOUNT_INSTAGRAM = "#americanbadassbeer";
var ACCOUNT_TWITTER = "@BadassBeer"
var A_TWITTER_KEY  = "5AbguEzlZtQWxPTPflPsqwRB5";
var A_TWITTER_SECRET  = "PKqvcpYWqnRZjT5190TitJOMYvpfVyPbjjfqeSGdOzReHkJwq8";
var A_INSTAGRAM_CID  = "a71edc59ec0a4238b7f42a7c1d0aece2";
var A_INSTAGRAM_SECRET = "fe685d788cfa4baaa5912de3e9f59469";
var A_INSTAGRAM_A_T = "1823114017.a71edc5.24fe7e4b48a0476c8f4992c10504f881";
var A_INSTAGRAM_UID = "1823114017";
	 
	 
	 
var PREFERRED_FEED_TYPE  = INSTAGRAM;
var PREFERRED_FEED_ACCOUNT  = ACCOUNT_INSTAGRAM;
var instagram_PostDisplayCount = 0
var twitter_PostDisplayCount = 6;

var MAX_POSTS_TOLOAD = instagram_PostDisplayCount + twitter_PostDisplayCount;
var totalPostsCreated = 0;

var orderedFeeds = [];
var feedsPattern = ["twitter","twitter"];
//var feedsPattern = ["instagram","instagram","twitter"];

//section.social-media-section div#social-media-contents ul#social-feed-container li.feed-post.twitter
var instagramData = new Array();
var twitterData = new Array();
var socialFeedData = new Array();
var socialFeedDisplayOverwrites = new Array();
//THIS IS A BIT OF A HACK! SHOULD JUST READA PROP OF OBJ INSTEAD OF SEPARATING!
var socialFeedTypes = new Array();



var index_renderedFeedContent = 0;




//preloader

//opts for spinner

var opts =
{
	lines: 15 // The number of lines to draw
	, length: 16 // The length of each line
	, width: 8 // The line thickness
	, radius: 42 // The radius of the inner circle
	, scale: 0.5 // Scales overall size of the spinner
	, corners: 1 // Corner roundness (0..1)
	, color: '#fff' // #rgb or #rrggbb or array of colors
	, opacity: 0.25 // Opacity of the lines
	, rotate: 0 // The rotation offset
	, direction: 1 // 1: clockwise, -1: counterclockwise
	, speed: 0.6 // Rounds per second
	, trail: 67 // Afterglow percentage
	, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
	, zIndex: 800 // The z-index (defaults to 2000000000)
	, className: 'spinner' // The CSS class to assign to the spinner
	, top: '50%' // Top position relative to parent
	, left: '50%' // Left position relative to parent
	, shadow: false // Whether to render a shadow
	, hwaccel: false // Whether to use hardware acceleration
	, position: 'absolute' // Element positioning
}

//

	var ICON_SPINNER = new Spinner(opts);
	var DIV_CLOSE = '</div>';
	var CONTAINER_FINAL_HEIGHT = "205"//$("#social-feed-container").height();
	var PRELOADER_ICON_ID = "spin-contain";
	

	var TXT_FONT_SIZE = "20px";
	var CSS_SIMILAR_TXT = '"position: absolute; z-index: 800; font-family:\'Brothreg\'; color: #fff; font-size:20px;"'
	
	
	
	var TEXT_A_HTML = '<div id="txt-a" style='+CSS_SIMILAR_TXT+'>BREWING UP SOME</div>';
	var TEXT_B_HTML = '<div id="txt-b" style='+CSS_SIMILAR_TXT+'>SOCIAL MEDIA FEEDS</div>';
	var SPINNER_DIV = '<div id="'+PRELOADER_ICON_ID+'" style="padding:0px 20px; float:left;" ></div>';
	var CLEAR_DIV = '<div style="clear:both;"></div>';
	var PRELOADER_ELEMENT_OPEN = '<div id="preloader-smf" style="width:100%; max-height:210px; min-height:40px; height:'+CONTAINER_FINAL_HEIGHT+'px; text-align:center; margin:auto; position:relative;">';










function addResizeHandler()
{
	

	$(window).resize(function()
	{
		var MMQ_MW_555 = Modernizr.mq('(max-width: 555px)');
		var MMQ_MW_450 = Modernizr.mq('(max-width: 450px)');
	
		TXT_FONT_SIZE = (MMQ_MW_555) ? '15px' : '20px';
		var isTXT_DISPLAYED = (MMQ_MW_450) ? "none" : "block";
		$("#txt-a").css("display",isTXT_DISPLAYED);
		$("#txt-b").css("display",isTXT_DISPLAYED);
		
		if(isTXT_DISPLAYED == "none"){return}

		var SPINNER_WIDTH = 32;
		var PAD_MODIFIER = (MMQ_MW_555) ? 10 : 30;
		var TXT_OFFSET_MODIFIER  = SPINNER_WIDTH + PAD_MODIFIER;
		var PRELOADER_ELE_FW = $("#preloader-smf").width();
		var PRELOADER_ELE_HW = $("#preloader-smf").width()/2;
		var PRELOADER_ELE_FH = $("#preloader-smf").height();
		var PRELOADER_ELE_HH = $("#preloader-smf").height()/2;
		var TXT_A_W = $("#txt-a").width();
		var TXT_B_W = $("#txt-b").width();
		var TXT_A_H = $("#txt-a").height();
		var TXT_B_H = $("#txt-b").height();
		var TXT_A_LD = ((PRELOADER_ELE_HW - TXT_A_W - TXT_OFFSET_MODIFIER)/PRELOADER_ELE_FW)*100;
		var TXT_B_LD = ((PRELOADER_ELE_HW + TXT_OFFSET_MODIFIER)/PRELOADER_ELE_FW)*100; 
		var txt_a_left = TXT_A_LD+"%";
		var txt_b_left = TXT_B_LD+"%";
		var txt_top_perc = ((PRELOADER_ELE_HH - TXT_A_H/2)/PRELOADER_ELE_FH)*100;
		var txt_ab_top  = txt_top_perc + "%"
		$("#txt-a").css("font-size",TXT_FONT_SIZE);
		$("#txt-b").css("font-size",TXT_FONT_SIZE);
		$("#txt-a").css("left",txt_a_left);
		$("#txt-b").css("left",txt_b_left);
		$("#txt-a").css("top",txt_ab_top);
		$("#txt-b").css("top",txt_ab_top);
	})
	
		$(window).trigger('resize');
}





$(document).ready(function () 
{
	var $socialFeedContainer = $(".social-media-section #social-media-contents #social-feed-container");
	$($socialFeedContainer).socialfeed(
	{
//		instagram:
//		{
//			accounts: [ACCOUNT_INSTAGRAM],
//			limit: instagram_PostDisplayCount,
//			onParseDataComplete:recordDataView,
//			client_id: A_INSTAGRAM_CID,
//			user_id:A_INSTAGRAM_UID,
//			user_access_token:A_INSTAGRAM_A_T
//		},
		twitter: 
		{
			accounts: [ACCOUNT_TWITTER],
			limit: twitter_PostDisplayCount,
			onParseDataComplete:recordDataView,
			consumer_key: A_TWITTER_KEY,
			consumer_secret: A_TWITTER_SECRET,
		},
		length: 111,
		show_media: true,
		moderation: function (content)
		{
			return (content.text) ? content.text.indexOf('fuck') == -1 : true;
		},
		callback: function ()
		{
		}
	});



	//////////////////////////////////////////////// ///////////////////////////////////////////////////////////////////////
	var LOADING_SOCIAL_FEEDS_PRELOADER = PRELOADER_ELEMENT_OPEN + TEXT_A_HTML +  SPINNER_DIV  + TEXT_B_HTML  + DIV_CLOSE;	
	$(".social-media-section #social-media-contents #social-feed-container").html(LOADING_SOCIAL_FEEDS_PRELOADER);
	//////////////////////////////////////////////// ///////////////////////////////////////////////////////////////////////
	addResizeHandler()
	var SPINNER_TARGET = document.getElementById(PRELOADER_ICON_ID);	
	ICON_SPINNER.spin(SPINNER_TARGET);
	
	

	function recordDataView(xPostData,xPostType)
	{
//		console.warn(xPostData.content.content_always_visible);

		socialFeedData.push(xPostData);
		socialFeedTypes.push(xPostType);
		totalPostsCreated ++;

		if(totalPostsCreated == MAX_POSTS_TOLOAD)
		{
//			console.log("");
			orderedFeeds = setSocialFeedOrder(socialFeedData,feedsPattern);
//			console.log("totalPostsCreated == MAX_POSTS_TOLOAD    (" + totalPostsCreated +"/" + MAX_POSTS_TOLOAD + " )");
//			console.log("Array: 'orderedFeeds' created using 'setSocialFeedOrder' function to rearrange data from two Arrays called: 'socialFeedData' & 'socialFeedTypes'.");
//			console.log("Data was loaded sequencially and 'render' function called only after data was arranged in specific 'pattern' defined in the 'feedsPattern' Array.");
//			console.log("Displaying...");
			onTotalPostsCreated();
		}else{}
	}
	//actually uses THREE arrays to compile the 'result' array created inside this function's scope.
	/*
		TWO are passed through, the THIRD is 'socialFeedTypes'
		Same length, and same types (socialFeedTypes is array of strings which are == the 'arr' content's type..
		***In other words:
		arr[0] == object... 'social_network' variable in each obj is equal to each respective index in 'socialFeedTypes'
	*/
	function setSocialFeedOrder(arr, order)
	{
		var result = [],                                           
		i = 0, len = arr.length,
		index;

		while (result.length < len)
		{
			index = socialFeedTypes.indexOf(order[i]);  // finds index of whatever feed 'type' is in the pattern[i] and finds where it is located in the loaded feeds' data 
			result.push(arr[index]);// then pushes it into the new order
			arr.splice(index, 1); // it's removed so duplicates (of the EXACT ===) element is put in the new result
			socialFeedTypes.splice(index, 1); // it's removed so duplicates (of the EXACT ===) element is put in the new result
			i = i >= order.length-1 ? 0 : ++i;
		}
		return result;
	}

	function onTotalPostsCreated()
	{
		$("#preloader-smf").fadeOut(500,function()
		{
			ICON_SPINNER.stop();
			$(".social-media-section #social-media-contents #social-feed-container").empty();
			renderOrderedFeeds();
		});
	}

	function renderOrderedFeeds()
	{
//		console.log("");
//		console.log('rendering feeds in correct order');
//		console.log("");
		for(var i=0 ; i < orderedFeeds.length; i++)
		{
//			console.log("");
			var __feed = orderedFeeds[i];
//			console.log("");
			//console.log('__feed:' + __feed);
			var __onFeedContentRendered = __feed.setContentRenderedHandler(onFeedContentRendered);
			var __renderedFeedContent = __feed.render();
		}
		
		$("#social-feed-container .social-feed-element").each(function()
		{
			var __isAlwaysVisibleFromLackOfImage = $(this).hasClass("always-visible-content");
			var __content = $(this).find(".content");
			if(__isAlwaysVisibleFromLackOfImage)
			{
//				$(__content).fadeIn(5);
			}
			else
			{
				$(__content).fadeOut(5);
			}
		})
		

		$("#social-feed-container .social-feed-element").mouseover(function(e)
		{
			var __isAlwaysVisibleFromLackOfImage = $(this).hasClass("always-visible-content");
			if(__isAlwaysVisibleFromLackOfImage) {return;}
			
			
			var __content = $(this).find(".content");
			$(__content).stop().fadeIn(500);
		});

		$("#social-feed-container .social-feed-element").mouseout(function(e)
		{
			var __isAlwaysVisibleFromLackOfImage = $(this).hasClass("always-visible-content");
			if(__isAlwaysVisibleFromLackOfImage) {return;}
			
			var __content = $(this).find(".content");
			$(__content).stop().fadeOut(500);
		});
		
		$("#social-feed-container .social-feed-element").click(function(e)
		{
			var __contentReadMoreURL = $(this).find("a.btn-read-more");
			var __RMURL = $(__contentReadMoreURL).attr("href");
			window.open(__RMURL, "_blank");
		});
		
		$("#social-feed-container .social-feed-element a").click(function(e)
		{
			e.preventDefault();
			var __RMURL = $(this).attr("href");
			window.open(__RMURL, "_blank");
			e.stopPropagation();
		});

	}
	
	
	function onFeedContentRendered(xData)
	{
//		console.log(xData);
		var __toRenderTotal = MAX_POSTS_TOLOAD;
		index_renderedFeedContent ++;
		if(index_renderedFeedContent == __toRenderTotal)
		{
			console.log("	-= ALL FEEDS - BOTH INSTAGRAM AND TWITTER - HAVE BEEN LOADED AND RENDERED. =-      ");
			return;
		}

		
//		console.log("onFeedcontentRendered function successfully called. data passed: " + xData);
	}

});

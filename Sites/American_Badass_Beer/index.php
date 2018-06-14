   <!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
		<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">
		<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]>
<html class="no-js">
<!--[endif]-->
<head>
	<meta charset="utf-8">
	<title>BADASS BEER | HOME </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')</script>
	<link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/fp-video-player.css" />
	<link href="css/jquery.socialfeed.css" rel="stylesheet" type="text/css">
	<!--[if gte IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
	<script src="js/social-feed/codebird-js/codebird.js"></script>
	<!-- 'Renders' templates (?) -->
	<script src="js/social-feed/doT/doT.min.js"></script>
	<script src="js/social-feed/moment/min/moment.min.js"></script>
	<script src="js/social-feed/jquery.socialfeed.js"></script>
	<script src="js/spin.min.js"></script>
	<script src="js/social-feed.js"></script>
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/liquid-text.js"></script>
</head>

	<body id="KRABBHome">

		<?php include "_includes/_navigation.php" ?>

		<!-- MAIN CONTAINER -->
		<div class="main-container">
			<div class="no-pad hidden-xs">
				<div id="fp-video-player">
					<div id="fp-video-container" class="noselect">
						<video muted poster="video/fallback/static/fp-video-frame.jpg" id="fpv-badass" class="noselect">
							<!--<source src="video/ap-bgfbw-badassbeer-init.webm" type="video/webm">-->
							<source src="video/ap-bgfbw-badassbeer-init.mp4" type="video/mp4">
							<img src="video/fallback/static/badass-vid-img-fback.png" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0">
						</video>
					</div><!--fp-video-container-->
					<div id="badass-vid-controls" class="noselect">
						<div class="btn-playpause noselect">
							<div class="icon-o-play noselect"></div><!-- vis when is paused -->
							<div class="icon-o-pause noselect"></div><!-- vis when is playing -->
							<div class="icon-o-replay noselect"></div> <!-- vis when vid is complete -->
						</div><!--btn- play pause-->
						<div class="btn-sound noselect">
							<div class="icon-o-muted noselect"></div><!-- muted -->
							<div class="icon-o-unmuted noselect"></div><!-- unmuted -->
						</div>
						<div style="clear:both"></div>
					</div><!--badass-vid-controls-->
				</div><!--fp-video-player-->
			</div>
		</div>

		<section class="small-pad dark-bg hidden-xs"></section>

		<section class="no-pad mobiledistributor-fullscreen-element hidden-sm hidden-md hidden-lg">
			<div class="background-image-holder" style="background: url(http://www.uadw.com/american_badass_beer/img/mobileheader5.png) 20% 0%;">
				<img class="background-image" alt="Currently Brewing" src="img/mobileheader5.png" style="display: none;">
			</div>
		</section>

		<!--SECTION MIDDLE ROW-->
		<section class="no-pad-bottom no-pad-top projects-gallery dark-bg">
			<div class="projects-wrapper clearfix">
				<div class="projects-container">
					<div class="col-sm-4 no-pad project image-holder">
						<div class="background-image-holder">
							<img class="background-image" alt="Background Image" src="img/detroitbrewery2.png" />
						</div><!-- .background-image-holder -->
						<div class="text link-list">
							<li>
								<a href="thebrewery.html">
									<h3>THE BREWERY</h3>
								</a>
							</li>
						</div>
					</div><!--end of individual project-->

					<div id="americas-badass-card" class="col-sm-4 no-pad project image-holder">
						<div id="url-kidrock" class="background-image-holder">
							<img class="background-image" alt="Background Image" src="img/americasbasass2.png" />
						</div><!-- .background-image-holder -->
						<div class="text link-list">
							<li>
								<a href="#">
									<h3>AMERICA'S BADASS</h3>
								</a>
							</li>
						</div><!-- .text .link-list -->
					</div><!--end of individual project-->

					<div class="col-sm-4 no-pad project image-holder">
						<div class="background-image-holder">
							<img class="background-image" alt="Background Image" src="img/locations.png" />
						</div><!-- .background-image-holder -->
						<div class="text link-list">
							<li>
								<a href="findtheeagle.html">
									<h3>LOCATIONS</h3>
								</a>
							</li>
						</div><!-- .text .link-list -->
					</div><!--end of individual project-->
				</div><!--end of projects-container-->
			</div><!--end of projects wrapper-->
		</section>
		<section class="small-pad dark-bg"></section>



		<!--	New social media feeds - needs specific ids to launch	-->


		<section class="social-media-section">

			<div id="social-media-contents" class="clearfix">

				<div id="social-feed-contents-loading" style="display:none; width:100%; height:205px; text-align:center; margin:0 auto; background-color:black;">
					<div class="spin"></div>
				</div>

				<ul id="social-feed-container" class="clearfix">
					<li class="feed-post"></li>
					<li class="feed-post"></li>
					<li class="feed-post"></li>
					<li class="feed-post"></li>
					<li class="feed-post"></li>
					<li class="feed-post"></li>
				</ul>
			</div>
		</section>

		<section class="extrasmall-pad dark-bg"></section>


		<?php include "_includes/_footer.php" ?>

		<!-- ************** AGE VERIFICATION POPUP ************** -->
		<!-- ************** AGE VERIFICATION POPUP ************** -->
		<?php include '_includes/_popup.php' ?>
		<!-- ************** AGE VERIFICATION POPUP ************** -->
		<!-- ************** AGE VERIFICATION POPUP ************** -->
		<!-- ************** AGE VERIFICATION POPUP ************** -->


	</body>

	<script src="js/isotope.min.js"></script>
	<script src="js/jquery.plugin.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/scripts.js"></script>














	<!--****************************************************************************-->
	<!--Script containing all source for the index full page background video player-->
	<!-- -=   =- -->
	<script src="js/fp-video-player.js"></script>
	<!-- -=   =- -->
	<!--****************************************************************************-->


	<script type="text/javascript">
	/*
	-= Document READY 'callback' (Event Handler)
	-=
	-=
	-=
	-=  JJL: Removed multiples of doc.ready&& combined into one.
	*/
	$(document).ready(function()
	{

		/*second image in first set of images under video/masthead - fix
		 to allow user to click anywhere on image (not just text)
		 to visit URL.*/
		$("#americas-badass-card li").click(function(e)
		{
			window.open('http://www.kidrock.com', '_blank');
		})











		function initializeAgeVerification()
		{
			$("#KRABBHome #main-navigation-container").addClass("transparent visibleNO");

			if(localStorage.getItem('ageVerified') == 'shown')
			{
				hideAgeVerificationPopup(false,true);
				return;
			}

			showAgeVerificationPopup(false,false);
			$("#popup-verification-age .verification-buttons .btn-container-verify a.btn-over-21").click(ageVerificationOptionHandler)
			$("#popup-verification-age .verification-buttons .btn-contaier-verify a.btn-under-21").click(ageVerificationOptionHandler)

		}

		initializeAgeVerification();




		function ageVerificationOptionHandler(e)
		{
			e.preventDefault();

			localStorage.setItem('ageVerified','shown');

			switch($(e.currentTarget).html())
			{
				case "YES":
					console.log("User selected: YES")
					hideAgeVerificationPopup(true,true);
					break;
				case "NO":
					console.log("User selected: NO");
					window.open("http://lmgtfy.com/?q=detroit+soda","_self");
					break;
				default:
					console.log("please select yes or no.");
			}
		}



		function showAgeVerificationPopup(doAnimate,isNavAffected)
		{
			var __$agePopup = $("#popup-verification-age");

			if(doAnimate == false)
			{
				console.log("showAgeVerificationPopup - animate: no");
				__$agePopup.removeClass("displayNO");
//				css({"opacity":1, "visibility":"visible"});
				isNavAffected && showMainNavigation(false);
				return;
			}
				console.log("showAgeVerificationPopup - animate: yes");

			__$agePopup.removeClass("displayNO").fadeIn(500,function()
			{
				isNavAffected && showMainNavigation(true);
			});
		}

		function hideAgeVerificationPopup(doAnimate,isNavAffected)
		{
			var __$agePopup = $("#popup-verification-age");
			var __alterNav = isNavAffected;
			if(doAnimate == false)
			{
				console.log("hideAgeVerificationPopup - animate: no");
				__$agePopup.addClass("displayNO");
				__alterNav && showMainNavigation(false);
				return;
			}
				console.log("hideAgeVerificationPopup - animate: yes");

			__$agePopup.fadeOut(500,function()
			{
//				console.log(isNavAffected && showMainNavigation(true));
				__alterNav && showMainNavigation(true);
			});
		}



		function showMainNavigation(doAnimate)
		{
			var __$mainNav = $("#main-navigation-container");

			if(doAnimate == false)
			{
				console.log("showMainNavigation - animate: no");
				__$mainNav.removeClass("transparent visibleNO");
				/*VIDEO.*/setupAndPlay();
				return;
			}

			console.log("showMainNavigation - animate: yes");


				__$mainNav.removeClass("visibleNO");
			__$mainNav.fadeIn(1500,function()
			{
				/*VIDEO.*/setupAndPlay();
				__$mainNav.removeClass("transparent");
				console.log("nav faded in.");
			});

		}

		function hideMainNavigation(doAnimate)
		{
			var __$mainNav = $("#main-navigation-container");

			if(doAnimate == false)
			{
				console.log("hideMainNavigation - animate: no");
				__$mainNav.addClass("transparent");
				__$mainNav.addClass("visibleNO");
				return;
			}

			__$mainNav.fadeOut(500,function()
			{
				console.log("nav faded out.");
			});
		}



	});
	</script>


</html>

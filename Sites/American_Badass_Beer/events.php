<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js">
<!--<![endif]-->
		<meta charset="utf-8">
		<title>BADASS BEER | THE D </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all">	
		<!--[if gte IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')</script>
		<!--Liquid text - scales using the em font type combined with some js aspect
		ratio called on doc ready && window resize: -->
		<script type="text/javascript" src="js/liquid-text.js"></script>
		<script type="text/javascript">
			//for the 'purchase tickets' CTA input[type=submit]
			var PURCHASE_TICKETS_CTA_URL = 'PLEASE_ENTER_URL_FOR_PURCHASE_TICKETS!!!';
			var CTA_URL_TARGET = "_blank";
		</script>
		
	</head>
	
	<body>	
		<style type="text/css">
			#events-content-container
			{
				margin: 0 auto;
			}

			#events-content-container p
			{
				font-weight: bold;
				font-size: 16px;
				line-height: 18px;
			}
			
			#events-content-container h1.events-headline
			{
				 width: 810px;
				 text-align: left;
				 font-weight: bold;
				 line-height: 18px;
				 font-size: 28px;
				 margin: 40px auto;
			}
			
			#events-content-container h2.event-host{}
			
			#events-content-container .event-flyer 
			{
				padding: 0 2%;
				max-width:200px;
				text-align: center;
			}	
						
			#events-content-container h5.event-venue-location
			{
				line-height: 22px !important;
			}
			
			
			#events-content-container h2.event-host,
			#events-content-container h4.event-venue,
			#events-content-container h5.event-venue-location,
			#events-content-container p.event-start-time
			{
				margin:0px 0px 0px 0px !important;
				text-align: left !important;
				font-family:'Brothreg';
				font-size: 16px;
			}
			


			@media (max-width: 860px)
			{
				#events-content-container h3.event-title
				{
					font-size: 23px;
				}	
				#events-content-container h1.events-headline
				{
					width: 100%;
					text-align: center;
					font-weight: bold;
					line-height: 18px;
					font-size: 19px;
					margin: 30px auto;
				}
			}

			@media (max-width: 768px)
			{
				
				#events-content-container .events-content
				{
					top:145px;
				}
				#events-content-container
				{
					 min-height: 500px;	
				}
				#events-content-container h2.event-host,
				#events-content-container h4.event-venue,
				#events-content-container h5.event-venue-location,
				#events-content-container p.event-start-time
				{
					font-size:16px;
					line-height: 20px;
				}
		
				
				#events-content-container h3.event-title
				{
					font-size: 23px;
				}		

				#events-content-container h2.event-host,
				#events-content-container h4.event-venue,
				#events-content-container h5.event-venue-location,
				#events-content-container p.event-start-time
				{
					font-size:14px;
					line-height: 26px;
				}

			}

			#events-content-container h4.event-venue,
			#events-content-container p.event-start-time
			{
				font-size: 16px;
				font-weight: normal;
			}

			#events-content-container p.event-start-time
			{

			}
		
			#events-content-container .events-content
			{
				position: absolute;
				top:230px;
				width:100%;
			}
			
			#events-content-container .wrapper ul.upcoming-events
			{
				width: 810px;
				margin:0 auto;
			}

			h3.event-title
			{
				font-size: 30px;
				margin:0px 0px 0px 0px !important;
				text-align: left !important;
				font-family:'Brothreg';
			}


			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-top
			{
				border-radius: 3px 3px 0px 0px;
				-moz-border-radius: 3px 3px 0px 0px;
				-webkit-border-radius: 3px 3px 0px 0px;
				border: 0px none #000000
				text-align: center;
			}

			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-top .month
			{
				font-size: 16px;
				padding:0px 0 0px 0;
				text-align: center;
				text-indent: 0px;
				margin: 0px 0px 0px 0px;
				line-height:28px; /* used as 'padding' for text... */
			}
			
			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-top .date
			{
				font-size: 32px;
				padding: 0px 10px 0px 10px;
				text-align: center;
				text-indent: 0px;
				margin: 0px 0px 0px 0px;
				line-height: 38px;
			}
			
			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-bottom
			{
				text-align: center;
			}
			
			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-bottom .day
			{
				font-size: 16px;
				padding:0px 0 0px 0;
				text-align: center;
				text-indent: 0px;
				margin: 0px 0px 0px 0px;
				line-height:28px; /* used as 'padding' for text... */
			}

			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-details input.btn-buy-tickets
			{
				border:none;
				margin: 10px 0px 0px 0px;
			}

			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-details .btn-buy-tickets {
				background-color: rgba(234,49,46,1);
				-webkit-border-radius: 4px;
					-moz-border-radius: 4px;
						  border-radius: 4px;
				width: 92px;
				height: 25px;
				margin: 5px;
				padding: 5px;
				display: inline-block;
				-webkit-box-sizing: border-box;
					-moz-box-sizing: border-box;
						  box-sizing: border-box;
				font-size: 16px;
				font-family: Myriad Pro;
				line-height: 16px;
				text-indent: 1px;
				text-align: center;
				color: rgba(255,255,255,1);
			}
			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-details .btn-buy-tickets:hover
			{
				background-color: rgba(255,255,255,1);
				border: solid 2px rgba(0,0,0,0.5);
				color: rgba(234,49,46,1);
				text-shadow: none;
				padding: 3px 5px 5px 5px ;

			}
			#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-details .btn-buy-tickets:active
			{
				background-color: rgba(230,230,230,1);
				border: solid 2px rgba(0,0,0,0.5);
				color: rgba(234,49,46,1);
			}			

			.borad-tltr
			{
				border-radius: 3px 3px 0px 0px;
				-moz-border-radius: 3px 3px 0px 0px;
				-webkit-border-radius: 3px 3px 0px 0px;
				border: 0px none #000000;
			}
			
			.borad-blbr
			{
				border-radius: 0px 0px 3px 3px;
				-moz-border-radius: 0px 0px 3px 3px;
				-webkit-border-radius: 0px 0px 3px 3px;
				border: 0px none #000000;
			}
			
			
				 /*								       */
				/*	SPECIFIC EVENT CUSTOM STYLES	*/
			  /*								        */
			

			  /*	      */
			 /*	  	  */
			/*FESTIVUS*/
		  /*	  	   */

			#events-content-container li#festivus h3.event-title
			{
				font-size: 16px;
			}		

			#events-content-container li#festivus h2.event-host
			{
				font-size: 30px;
			}		

			#events-content-container li#festivus h2.event-venue
			{
				font-size: 19px;
			}		
			
			
		    /*			 */
			/*		MQs	*/
		  /*   		  */
			
			@media (max-width: 1170px)
			{
				#events-content-container .events-content
				{
					top:175px;
				}
			}
			
			@media (max-width: 950px)
			{
				#events-content-container .wrapper ul.upcoming-events 
				{
					width: 90%;
					margin: 0 auto;
					padding: 0px 0px;
				}
			}
			
			@media (max-width:690px)
			{
				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date
				{
					width: 14.5%;
				}
				#events-content-container h3.event-title
				{
					 font-size: 23px;
				}
				#events-content-container .upcoming-events .upcoming-event .event-date
				{
					padding-right:10px;
				}
				#events-content-container .event-flyer 
				{
					display: none ;
				}				

				#events-content-container h1.events-headline
				{
					font-size: 14px;
				}
				
				h3.event-title
				{
					font-size: 14px;
					letter-spacing: 1px;
				}
				
				#events-content-container h2.event-host,
				#events-content-container h4.event-venue,
				#events-content-container h5.event-venue-location,
				#events-content-container p.event-start-time
				{
					font-size:13px;
					line-height: 20px;
				}
			}
			
			@media (max-width:555px)
			{
				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-details
				{
					padding-left: 5px;
				}
				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date
				{
					padding-right: 0px;
					width: 12.5%;
				}					

				 .event-date-top .month
				{
					font-size: 13;
					padding: 0px 0 8px 0;
					text-align: center;
					text-indent: 0px;
					margin: 0px 0px 0px 0px;
					line-height: 25px;
				}
				
				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-top .date
				{
					font-size: 22px;
					padding:0px 0 8px 0;
					text-align: center;
					text-indent: 0px;
					margin: 0px 0px 0px 0px;
					line-height:22px; /* used as 'padding' for text... */
				}
				
				#events-content-container .wrapper ul.upcoming-events 
				{
					width: 100%;
					margin: 0 auto;
					padding: 0px 0px 0px 10px;
				}	

				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date .event-date-bottom .day
				{
					font-size: 13px;
					padding: 0px 0 0px 0;
					text-align: center;
					text-indent: 0px;
					margin: 0px 0px 0px 0px;
					line-height: 28px;
				}

				#events-content-container h3.event-title
				{
					 font-size: 18px;
				}
			}

			@media (max-width: 480px)
			{
				#events-content-container .wrapper ul.upcoming-events li.upcoming-event .event-date
				{
					width: 18.5%;
				}
			}

		</style>

		<?php include "_includes/_navigation.php" ?>
				
		<div id="events-content-container" class="main-container">
			<div class="wrapper">
				<img class="background-image fixed-wood img-responsive" alt="Background Image" src="img/background-wood-fixed.jpg">
				<div class="events-content">
					
					<h1 class="events-headline"><span class="bab-fc-red">UPCOMING EVENTS THAT WILL BE</span> <span class="bab-fc-white">BADASS</span></h1>
					<ul class="upcoming-events">

						<!--<li class="upcoming-event">
							<div class="event-date floatL">
								<div class="event-date-top bab-bgc-white borad-tltr">
									<p class="bab-fc-red month">NOV</p>
									<p class="bab-fc-red date">25</p>
								</div>
								<div class="event-date-bottom bab-bgc-red borad-blbr">
									<p class="bab-fc-white day">WED</p>
								</div>
							</div>
							<div class="event-flyer floatL"><a target="_blank" href="flyer-view.php?flyer-image-name=fr-abab-event-11-06-2015"><img src="img/events/flyers/abab-event-11-06-2015.gif"></a></div>

							<div class="event-details floatL">
								<h2 class="bab-fc-red event-host">MADE IN DETROIT &amp; BADASS BEER PRESENT</h2>
								<h3 class="bab-fc-red event-title">IRONSNAKE: Thanksgiving Eve Party!</h3>
								<h4 class="bab-fc-red event-venue">The Machine Shop</h4>
								<h5 class="bab-fc-red floatL event-venue-location">Flint, MI</h5>
								<p class="bab-fc-red floatL event-start-time">&nbsp;| Show at 7PM</p>
								<div class="btn-container clear">
									<input class="btn-buy-tickets" type="button" value="Buy Tickets!">
								</div>
								
								<script>
									$(document).ready(function (e)
									{
									     $("input.btn-buy-tickets").click(function()
									     {
									       window.open("http://www.etix.com/ticket/p/7789829/ironsnake-thanksgiving-eve-party-18-flint-the-machine-shop","_blank");
									     
									     })
									});
								</script>
							</div>
							<div class="clear"></div>
						</li>-->

					
										
						<script type="text/javascript">
							PURCHASE_TICKETS_CTA_URL = "http://www.festivustix.com";
							CTA_URL_TARGET = "_blank";
						</script>
						
						<li id="festivus" class="upcoming-event">
							<div class="event-date floatL">
								<div class="event-date-top bab-bgc-white borad-tltr">
									<p class="bab-fc-red month">DEC</p>
									<p class="bab-fc-red date">19</p>
								</div>
								<div class="event-date-bottom bab-bgc-red borad-blbr">
									<p class="bab-fc-white day">SAT</p>
								</div>
							</div>
							<div class="event-flyer floatL"><a target="_blank" href="flyer-view.php?flyer-image-name=fr-abab-event-12-19-2015"><img src="img/events/flyers/abab-event-12-19-2015.jpg"></a></div>

							<div class="event-details floatL">
								<h2 class="bab-fc-red event-host">Festivus</h2>
								<h3 class="event-title">A BENEFIT FOR SOUTH OAKLAND SHELTER</h3>
								<h4 class="bab-fc-white event-venue">Royal Oak Farmers Market</h4>
								<!--<h5 class="bab-fc-white floatL event-venue-location">Royal Oak, Farmer's Market</h5>-->
								<p class="bab-fc-white floatL event-start-time">Royal Oak, MI&nbsp;&nbsp;|&nbsp;&nbsp;Doors @ 5 PM</p>
								<div class="btn-container clear">
									<input class="bab-fc-white btn-buy-tickets" type="button" value="Buy Tickets!">
								</div>
								
							</div>
							<div class="clear"></div>
						</li>
						
					</ul>
				</div>
			
			</div><!-- .wrapper -->
		</div>

	<?php include "_includes/_footer.php" ?>

	</body>

	<script type="text/javascript">


		$(document).ready(function (e)
		{
			  $("input.btn-buy-tickets").click(function()
			  {
				 window.open(PURCHASE_TICKETS_CTA_URL,CTA_URL_TARGET);

			  })
		});

	</script>

	<script src="js/enquire.js"></script>
</html>
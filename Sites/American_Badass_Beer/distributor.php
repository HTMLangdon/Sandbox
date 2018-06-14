

<!DOCTYPE html>
	
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> 	   <html class="no-js"> <!--<![endif]-->
   
   
    <head>
        <meta charset="utf-8">
        <title>BADASS | DISTRIBUTOR </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')</script>
		<script type="text/javascript" src="js/liquid-text.js"></script>
		<style>
			.distributor-container-row-contents
			{
				margin-left: 0;
				margin-right:0;
				margin-top:0;
				margin-bottom:0;
				float: none;
				margin:0 auto;
			}

			#distributor-log-in
			{
				background-color:black;	
			}
			
			#distributor-log-in input
			{
				padding: 5px 0px 5px 5px;
				margin-bottom: 0px !important;
				margin-right: 0px !important;p
				width: 65%;
				color: white;
				background: none;
				border: none;
				box-shadow: none;
				font-family: "Brothreg";
				background: rgba(255, 255, 255, 0.85);
				border-radius: 5px;
			}
			#distributor-log-in input[type="input"]
			{
				color:black;
			}

			#distributor-log-in .distributor-login-label
			{
				color: white;
				width:30%;
			}

			#distributor-log-in input#distributor-login-submit-button
			{
				width: 20%;
				height: 20px;
				text-align: center;
				padding: 0 0 0 0;
				margin: 0 0 0 0;
				color: black !important;
				position: relative;
				bottom: -10px;
				right: 0;
				margin-right: 0px !important;
				margin-left: 0px !important;
				margin-top: 0px !important;
				margin-bottom: 0px !important;
				clear: both;
			}
			
			#distributor-log-in .container.align-vertical
			{
				padding-left:0px !important;
				padding-right:0px !important;
			}
			
			#distributor-user-name
			{
				width:60%;
				color:black !important;
			}

			#distributor-user-password
			{
				width:60%;
				color:black !important;
			}

			@media (max-width: 400px)
			{

				#distributor-log-in input#distributor-login-submit-button
				{
					width: 100%;
					height: 20px;
				}

				#distributor-log-in .distributor-login-label
				{
					 color: white;
					 width: 100%;
				}

				#distributor-log-in input
				{
					padding: 5px 0px 5px 5px;
					margin-bottom: 0px !important;
					margin-right: 0px !important;
					width: 100%;
					color: white;
					background: none;
					border: none;
					box-shadow: none;
					font-family: "Brothreg";
					float: none;
					background: rgba(255, 255, 255, 0.85);
					border-radius: 5px;
				}
				
			}

		</style>
</head>
<body id="distributor-log-in">
<!-- NAVIGATION-->
<?php include "_includes/_navigation.php" ?>
<!--MAIN CONTAINER-->

		<div class="main-container">
			<section class="no-pad login-page mobiledistributor-fullscreen-element">
				<div class="background-image-holder">
					<img class="background-image" alt="Background Image" src="img/background-wood-fixed.jpg">
					<!--<img class="background-image" alt="Background Image" src="img/currentlybrewing2.png">-->
				</div>
				<div class="container align-vertical">
					<div class="row">
						<div id="distributor-container-row-contents" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 text-center">
							<div class="distributor-login-form-container"> 
								<div class="distributor-logi-form-errors-container">
									<p class="bab-fc-red" style="padding:5px; text-align:center;">
										<?php if(isset($_GET['errors'])){echo $_GET['errors'] . ' Please try again.';} ?>
									</p>
								</div>
								<form id="distributor-login-form" action="_functions/user/_parse-user-login-credentials.php" style="text-align:left;">
									<label class="distributor-login-label" type="text" for="distributor-user-name">User</label>
									<input type="text" name="distributor-user-name" id="distributor-user-name" class="login-input floatR" />
									<div style="height:10px; width:100%;"></div>
									<label class="distributor-login-label" type="text" for="distributor-user-password">Password</label>
									<input  type="text" name="distributor-user-password" id="distributor-user-password" class="login-input floatR" />
									<input id="distributor-login-submit-button" class="floatR" style="color:black; text-align:center;" type="submit" value="Log In" />
									<div class="clear"></div>
								</form>
							</div><!--end of photo form wrapper--> 	
						</div>
						<div class="clear"></div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div><!-- main-container -->
		<?php include "_includes/_footer.php" ?>
	</body>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.plugin.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/skrollr.min.js"></script>
	<script src="js/spectragram.min.js"></script>
	<script src="js/scrollReveal.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/twitterFetcher_v10_min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/scripts.js"></script>

</html>
		
		
		
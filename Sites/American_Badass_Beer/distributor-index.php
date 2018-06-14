<?php require '_functions/user/_check-if-connected.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Distributor Portal</title>

		
	<style>

		body#distributor-home
		{
			background-color: black;
		}
		
		#distributor-content
		{
			margin-left:auto;
			margin-right:auto;
			max-width:1267px;
			background-color:black;
			overflow:hidden;
			position: relative;
			top: 210px;
			margin-bottom: 210px;
			left: 0;
		}
		
		.distributor-items
		{
			padding: 2% 2% 0;
			text-align: justify;
			margin: 0 auto;
			width: 83%;
		}

		.icon-container 
		{
				max-width: 250px;
				max-height: 250px;
				width: 100%;
				height: 100%;
	/*			background: #1E1E1E url('img/loading-sm.gif') center center no-repeat;*/
		}

		.distributor-items > li.item 
		{
			display: inline-block;
			max-width:250px;
			padding:0px 1.5%;
			vertical-align: top;
		}
		

		.item-title
		{
			text-align: center;
			font-family: "Helvetica";
			font-size: 15px;
			padding: 10px 0px 0px 0px;
			display: block;
		}
		
		ul.distributor-items li.item .icon a.iconCTA
		{
			display: block;
			width: 100%;
			height:100%;
		}
		
		.item-additional-specs
		{
			text-align: center;
			width: 100%;
			font-family: "Helvetica";
			font-weight: bold;
		}
		.itemID
		{
			text-align: center;
			/*color:white;*/
			font-family: "Helvetica";
			font-weight: normal;
			font-size: 15px;
			padding: 5px 0px 20px 0px;
			margin:0px 0px 30px 0px;
			display: block;
		}

		.hidden
		{
			opacity: 0;
		}

		
		
		
		.distributor-large-item-popup
		{
			background:rgba(0,0,0,.75);
			width: 100%;
			height:100%;
			position: fixed;
			top: 0px;
			right: 0px;
			bottom: 0px;
			left: 0px;
			margin: auto;
			z-index: 99999;
		}

		.distributor-large-image-container
		{
			overflow: hidden;
			max-height: 504px;
		}

		.distributor-large-image-container img.distributor-large-image
		{

		}


		.centercontainer-content
		{
			height: 100%;
			text-align: center;
			position: static;
			top: 0;
			left: 0;
			max-width: 100%;
			width: 100%;
			margin: 0 0 0 0;
		}
		
/*

		.centercontainer-content:before 
		{
			content: '';
			display: inline-block;
			height: 100%; 
			vertical-align: middle;
			margin-right: -0.25em; 
		}
		
*/
		
		

		.centered-content
		{
			/*

					display: inline-block;
					vertical-align: middle;
					position: static;
					top: 0;
					left: 0;
					max-width:none;
					text-align:center;
					margin:auto;
*/
			display: inline-block;
			margin: auto;
			vertical-align: middle;
			text-align: center;
			max-width: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}
		

		
		.distributor-large-item-popup-btn-close
		{
			outline: none;
			cursor: hand;
			cursor: pointer;
			position: absolute;
			top: 5px;
			right: 0;
			width: 20px;
			height: 20px;
			left: 470px;
			line-height: 20px;
			background: rgba(0,0,0,.5);
			font-family: 'Helvetica';
			border-radius: 10px;
			margin: 0 auto;
		}

		
		
		.hover
		{
			border:1px solid #ed43f21;
		}

		
		.image-view-a
		{
			position: relative;
			top:0px;
			left: 0px;
			cursor: hand;
			cursor: pointer;
		}

		.image-view-b
		{
			position: relative;
			top:-488px;
			left: 0px;
			cursor: hand;
			cursor: pointer;
		}
		
		
		
		

		@media (max-width: 1250px)
		{
			.distributor-items
			{
				width: 810px;
			}

		}
		
		@media (max-width: 800px)
		{
			.distributor-items
			{
				width: 600px;
			}

		}
		
		@media (max-width: 535px)
		{
			.distributor-items
			{
				width: 100%;
			}
			
			ul.distributor-items li.item,
			ul.distributor-items li.item .icon,
			ul.distributor-items li.item .icon a.iconCTA,
			ul.distributor-items li.item .icon a.iconCTA img
			{
				width: 95%;
				max-width: 100%;
				max-height: 100%;
				text-align: center;
				margin: 0 auto;
			}
			.centered-content
			{
				display: inline-block;
				vertical-align: middle;
				position: absolute;
				top: 0;
				left: 0;
				max-width: 100%;
				text-align: center;
				margin: 0 auto;
			}
			
			.centercontainer-content
			{
				height: 100%;
				text-align: center;
				position: relative;
				top: 5%;
				bottom: 5%;
				max-width: 90%;
				width: 90%;
				margin: 0 auto;
			}
			
	
			.distributor-large-item-popup-btn-close
			{
				outline: none;
				cursor: hand;
				cursor: pointer;
				position: absolute;
				top: 5px;
				right: 0;
				width: 20px;
				height: 20px;
				left: 90%;
				line-height: 20px;
				background: rgba(0,0,0,.5);
				font-family: 'Helvetica';
				border-radius: 10px;
				margin: 0 auto;
			}
			
			.image-view-a
			{
				position: relative;
				top:0px;
				left: 0px;
			}

			.image-view-b
			{
				position: relative;
				top:-339px;
				left: 0px;
			}
			
			.distributor-large-image-container
			{
				overflow: hidden;
				max-height: 354px;
			}


		}
		
		@media (max-width: 400px)
		{
		
			.distributor-items
			{
				padding: 2%;
				text-align: center;
				margin: 0 auto;
				width: 100%;
			}
			.distributor-items > li.item 
			{
				padding: 0px 0px 0px 0px;
				vertical-align: top;
			}
			
			ul.distributor-items li.item,
			ul.distributor-items li.item .icon,
			ul.distributor-items li.item .icon a.iconCTA,
			ul.distributor-items li.item .icon a.iconCTA img
			{
				width:95%;
				max-width:100%;
			}
			
			.centered-content
			{
				display: inline-block;
				vertical-align: middle;
				position: absolute;
				top: 0;
				left: 0;
				max-width: 100%;
				text-align: center;
				margin: 0 auto;
			}
			
			.centercontainer-content
			{
				height: 100%;
				text-align: center;
				position: relative;
				top: 5%;
				bottom: 5%;
				max-width: 90%;
				width: 90%;
				margin: 0 auto;
			}
			
		}

		
		

	
	</style>

	<meta charset="utf-8">
	<title>BADASS BEER | FIND THE EAGLE</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')</script>
	<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all" />
	<!--[if gte IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!--	<script type="text/javascript" src="js/blazy.min.js"></script>  This is no longer being used. using pxloader... -->
	<script type="text/javascript" src="js/liquid-text.js"></script>
	<script type="text/javascript" src="js/pxloader/PxLoader.js"></script>
	<script type="text/javascript" src="js/pxloader/PxLoaderImage.js"></script>
</head>

<body id="distributor-home">
	<?php include "_includes/_navigation.php" ?>

	<div id="distributor-content">
		<!--<h2>Featured</h2>-->
		<ul class="distributor-items"></ul>
	</div>

	<div class="distributor-large-item-popup">

		<div class=" centercontainer-content">
			<div class="distributor-large-image-container centered-content">
				<img class="distributor-large-image" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
				<div class="distributor-large-item-popup-btn-close bab-fc-white">
					<p style="position: relative; top: -1px; left: 0px; font-size: 15px; line-height: 20px;">x</p>
				</div>
			</div>
		</div>
	</div>
	<?php include "_includes/_footer.php" ?>
</body>

<script type="text/javascript">

	var exData = 'www/uadw.com/BadassBeer/pre-production/dataa/';
	var iteration = 1;
	var __largestHeight = 0;
	var __firstOfLastIndex = NaN;
	var _productTypeWithAltView = "APPAREL";
	var pxLOADER = new PxLoader(); //preload images
	var itemPopupLargeImageContainer = null;
	var hasAlternateView = false;

	$(document).ready(function(e)
	{



		
		$(".distributor-large-item-popup").fadeOut(1);

		$.getJSON('data/json/data-distributor.json', function(data)
		{
			__firstOfLastIndex = (data.items.length-1) - (data.items.length%4);
			
			$.each(data.items, function(i,f)
			{
				var __specs = '';
				var imgName = f.iconURL;
				var productID = f.productID;
				var __productTypeLiteral = f.type;
				var __productType = __productTypeLiteral.toUpperCase();
				var __altProductView = f.largeURL;

				if(f.specs == false || f.specs == "false")
				{
					__specs = '';
					__displayValue = "display:none;"
				}
				else
				{
					__specs = f.specs;
					__displayValue = "";
				}
				
				$("ul.distributor-items").append('<li class="item"><div class="icon icon-container"><a class="iconCTA" href="#"><img class="'+__productType+' b-lazy" data-large-src="'+f.largeURL+'" src="'+f.iconURL+'"  alt=""></a></div><label class="item-title bab-fc-white">'+f.title+'</label><label class="item-additional-specs bab-fc-white" style="'+__displayValue+'">'+ __specs +'</label><label class="itemID bab-fc-white">'+f.itemID+'</label></li>');
			
			});
			
			$("ul.distributor-items li.item .icon-container").mouseover(function(e)
			{
				$(this).addClass("bab-brdr-red4px");				
			});	

			$("ul.distributor-items li.item .icon-container").mouseout(function(e)
			{
				$(this).removeClass("bab-brdr-red4px");
			});

			$("ul.distributor-items li.item").click(function(e)
			{
				e.preventDefault();
			//	var __itemType = $(this).find("a.iconCTA img").attr("class");
				var __itemSRC = $(this).find("a.iconCTA img").attr("data-large-src");
				
				openPopup(this,__itemSRC);
			});
			
			

		});

		function openPopup(xCaller,xLargeImage)
		{
			hasAlternateView = (xLargeImage.indexOf("-ab.jpg") > -1);
			if(hasAlternateView)
			{
				$(".distributor-large-item-popup .distributor-large-image-container img").addClass("image-view-a");
				$(".distributor-large-item-popup .distributor-large-image-container img").removeClass("image-view-b");
			}
			pxLOADER = new PxLoader();
			itemPopupLargeImageContainer = $(".distributor-large-item-popup .distributor-large-image-container img.distributor-large-image");
			pxLOADER.addImage(xLargeImage);
			
			console.log("");
			console.log("starting load for preload..");
			console.log("itemPopupLargeImageContainer:" + itemPopupLargeImageContainer.html());
			console.log("pxLOADER: " + pxLOADER);
			console.log("");
			
			
			
			
			
			
		// callback that will be run once images are ready 
		pxLOADER.addCompletionListener(function(e)
		{ 
			console.log("");
			console.log("");
			console.log(e.resource.img.src);
			console.log(e.resource.img.width);
			console.log(e.resource.img.width);
			console.log("");
			console.log("");

			console.log(e);
			var __xLargeImage = e.resource.img.src;
			$(itemPopupLargeImageContainer).attr("src",__xLargeImage);

			$(".distributor-large-item-popup").fadeIn(500,function(e)
			{
				//alert(hasAlternateView);
				if(hasAlternateView)
				{
					$(".distributor-large-item-popup .distributor-large-image-container img").mouseover(function(e)
					{
						$(".distributor-large-item-popup .distributor-large-image-container img").removeClass("image-view-a");
						$(".distributor-large-item-popup .distributor-large-image-container img").addClass("image-view-b");
					});


					$(".distributor-large-item-popup .distributor-large-image-container img").mouseout(function(e)
					{
						$(".distributor-large-item-popup .distributor-large-image-container img").addClass("image-view-a");
						$(".distributor-large-item-popup .distributor-large-image-container img").removeClass("image-view-b");
					});
				}
				else
				{
					//alert("doesn't need mouseover/out");
				}
 
				$(".distributor-large-item-popup-btn-close").click(function(e)
				{
					if(hasAlternateView)
					{
						$(".distributor-large-item-popup .distributor-large-image-container img").unbind("mouseover");
						$(".distributor-large-item-popup .distributor-large-image-container img").unbind("mouseout");
					}

					$(".distributor-large-item-popup .distributor-large-image-container img").removeClass("image-view-a");
					$(".distributor-large-item-popup .distributor-large-image-container img").removeClass("image-view-b");
					e.preventDefault();
					$(".distributor-large-item-popup").fadeOut(300,function()
					{
						hasAlternateView = false;
						$(itemPopupLargeImageContainer).attr("src","data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
						itemPopupLargeImageContainer = null;
					});
					$(this).unbind("click");
				});
			});
		}); 

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			pxLOADER.start();	
			
			//moved bulk code to PXLOADER COMPLETE HANDLER for assured order of operations to insue correctly.

		} //openPopup()
		





		function isEven(n)
		{
			 n % 2 == 0;
		}

		function isOdd(n)
		{
			return Math.abs(n % 2) == 1;
		}

		function getExtention(xSRC)
		{
			var __ext = xSRC.substr(xSRC.lastIndexOf('.'));
			return __ext;
		}

	});

	$(document).resize(function(e)
	{
		var __currentListWidth = $("ul.distributor-items").width();
		console.log("");
		console.log("__currentListWidth: " + __currentListWidth);
		console.log("");
	});
</script>
</html>











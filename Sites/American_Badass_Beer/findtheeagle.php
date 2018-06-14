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
    <title>BADASS BEER | FIND THE EAGLE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.2.min.js"><script>')

    </script>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-2.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if gte IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/liquid-text.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/spin.min.js"></script>
    <script src="js/states.js"></script>
    <style type="text/css">
        /*display none list after smaller devices start to hop in o */

        @media (min-width: 1100x) and (max-width: 1440px) {
            ul.nav li.dropdown span.caret {}
        }

    </style>
</head>








<body id="find-the-eagle">

    <?php include "_includes/_navigation.php" ?>

    <!--		style="height:700px;"-->

    <style type="text/css">
        .dev-message {
            padding: 25% 0;
            position: absolute;
            text-align: center;
            width: 100%;
            height: 100%;
            /* min-width: 500px; */
            /* min-height: 100px; */
            margin: 0;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            color: #fff;
            font-size: 30px;
            font-family: Verdana;
            z-index: 99;
            /* border: 10px solid red; */
            opacity: 1;
            visibility: visible;
            display: block;
        }

    </style>

    <div class="dev-message">This page requires a database query which deactivates while using a localhost. Visit
        <a href="http://www.americanbadassbeer.com/findtheeagle.php" target="_blank">http://www.AmericanBadassBeer.com/findtheeagle.php</a> to view this page's function. Thanks!
    </div>

    <!--MAIN CONTAINER -->
    <div class="store-locator-content-container main-container">






        <div class="store-locator-wrapper">


            <div id="store-list-dropdown-container" style="display:none;">
                <?php
						require "_functions/db-cred/_db-connect.php";

						$query_all_store_data = "SELECT id, name, address, zipcode, lat,lng FROM store_locations";
						$result = $mySQLi->query($query_all_store_data);

						if ($result->num_rows > 0)
						{
							echo '<select>';
							while($row = $result->fetch_assoc())
							{
								echo '<option class="store-option" data-lat="'. $row['lat'] .'" data-lng="'. $row['lng'] .'" value = "store-id-'.$row['id'].'">'.$row['name']. ': ' . $row['address'] . ' ' . $row['zipcode'] . '</option>';
							}
							echo  '</select>';
						}
						else
						{
							echo "0 results";
						}
						$mySQLi->close();	
					?>
            </div>
            <div style="display:none;">
                <select id="locationSelect" style="width:100%;visibility:hidden"></select>
            </div>
            <div id="google-map-container" style="display:none;">
                <div id="google-map"></div>
            </div>


            <!--				<img class="background-image fixed-wood img-responsive" alt="Background Image" src="img/background-wood-fixed.jpg">-->

            <div class="find-the-eagle-body-content MQDefault">

                <h1 class="find-the-eagle-headline  MQDefault floatL">FIND THE EAGLE</h1>

                <div id="store-locator-preload-icon" class="floatL">
                    <div id="preload-icon-container"></div>
                </div>

                <div class="clear"></div>

                <div id="find-the-eagle-general-message" class="MQDefault">
                    <p class="one liquify">
                        The eagle has landed in Michigan with 6 and 12-packs of Badass in talon. Search for the location nearest you.
                    </p>
                    <p class="two liquify">
                        No Badass in your area? Beer run to Brew Detroit, and check back often. The eagle soars higher and further every day.
                    </p>
                </div>

                <div id="locator-form-container">
                    <form action="" id="store-locator-form">
                        <div class="input-container floatL">
                            <label class="label-user-search-radius floatL">Within </label>

                            <select type="text" class="user-search-radius floatL">
									<option value="5" class="radius-option">5</option>
									<option value="10" class="radius-option">10</option>
									<option value="15" class="radius-option">15</option>
									<option value="25" class="radius-option">25</option>
									<option value="50" class="radius-option">50</option>
									<option value="75" class="radius-option">75</option>
									<option value="100" class="radius-option">100</option>
								</select>

                            <div class="clear"></div>
                        </div>

                        <div class="input-container floatL">
                            <label class="label-user-zipcode floatL">miles of zip code </label>
                            <input type="text" placeholder="(ex: 48348)" value="48348" class="user-zipcode floatL">
                            <div class="submit-button-container input-container floatL" style=""><input type="submit" class="user-search-submit"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear" style="padding:10px 0px 0px 0px;"></div>
                        <div class="input-container">
                            <label style="opacity1 !important;" class="label-user-search-result-limit floatL">max results to return</label>
                            <select type="text" class="user-search-result-limit floatL">
									<option value="25" class="result-limit-option">20</option>
									<option value="40" class="result-limit-option">40</option>
									<option value="50" class="result-limit-option">50</option>
									<option value="60" class="result-limit-option">60</option>
									<option value="75" class="result-limit-option">75</option>
									<option value="100" class="radius-option">100</option>
								</select>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>


                    </form>
                </div>





                <div class="errors displayNO"></div>
                <div class="search-results">

                </div>










            </div>
            <!-- find-the-eagle-body-content -->


        </div>
        <!-- .wrapper -->
    </div>
    <!-- .store-locator-content-container -->

    <?php include "_includes/_footer.php" ?>





</body>


<script type="text/javascript">
    var markers = [];
    var infoWindow;
    var locationSelect;
    var map;
    var currentStoreInRowCount = 0;
    var RESULTS_PER_ROW = 5;

    var errors = [];

    var errorsReset = false;
    var preloaderReset = false;
    var SLIcon_PreloaderContainer;
    var SLIcon_Preloader;

    var TOTAL_SEARCH_RESULTS = 0;
    var TOTAL_SEARCH_RESULTS_QUEUED = 0;
    var resultsRenderQueue = [];

    var HR_SEARCH_RESULT = '<div class="lineBreakContainer  clear"><hr class="horizontalSeparator withLine" /></div>';
    var END_CLEAR_SEARCH_RESULTS = "<div class='end-of-results-clear clear'></div>";


    function initializeStoreLocatorGoogleMapAPI() {
        geocoder = new google.maps.Geocoder();
        // /* Clarkston */ 															
        var latlng = new google.maps.LatLng(37.2368316, -93.2943082);
        var mapOptions = {
            zoom: 8,
            center: latlng
        }
        map = new google.maps.Map(document.getElementById("google-map"), mapOptions);
        $("#google-map").css("display", "none");
        infoWindow = new google.maps.InfoWindow();
        locationSelect = document.getElementById("locationSelect");

        locationSelect.onchange = function() {
            var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
            if (markerNum != "none") {
                google.maps.event.trigger(markers[markerNum], 'click');
            }
        };
    }



    function storeLocation() {
        var $address = $(".user-zipcode").val();
        var $searchZone = $(".user-search-radius").val();
        var $maxResultCount = $(".user-search-result-limit").val();
        //				alert($maxResultCount);
        geocoder.geocode({
                'address': $address
            },
            function(results, status) {
                switch (status) {
                    case google.maps.GeocoderStatus.ZERO_RESULTS:
                        console.log("storeLocation --geocode.callback() - status == NOT OK....");
                        // ONE ERROR FOR NO RESULTS
                        //console.log("onAllResultsAddedToRenderQueueComplete: " + onAllResultsAddedToRenderQueueComplete);
                        onAllResultsAddedToRenderQueueComplete(null);
                        //alert("Geocode was not successful for the following reason: " + status);
                        break;
                    case google.maps.GeocoderStatus.OK:
                        console.log("storeLocation -- geocoder.callback() -  status == OK");
                        var userLocationGeo_LATITUDE = results[0].geometry.location.lat();
                        var userLocationGeo_LONGITUDE = results[0].geometry.location.lng();
                        console.log("													- ");
                        postUserSearchParameteres(userLocationGeo_LATITUDE, userLocationGeo_LONGITUDE, $searchZone, $maxResultCount);
                        break;
                    default:
                        console.log("storeLocation --geocode.callback() - status == NOT OK.... DEFAULT/GENERAL ERROR");
                        // ONE ERROR FOR NO RESULTS
                        errors.push("There was an issue processing the data you have entered. Please try different parameters. ");
                        displayErrors();
                        //alert("Geocode was not successful for the following reason: " + status);
                }
            });
    }



    function parseXMLToMarkers(XMLData) {
        var __markerNodes = XMLData.documentElement.getElementsByTagName("marker");
        TOTAL_SEARCH_RESULTS_QUEUED = 0;
        TOTAL_SEARCH_RESULTS = __markerNodes.length;
        console.log("xml document poped. checking length of children nodes...");

        if (__markerNodes.length <= 0) {
            console.log("marker length == 0 or less. no results in area/zip code");
            onAllResultsAddedToRenderQueueComplete(null);
        } else {
            console.log("marker length arr populated. rednering results");

            //					alert("DING - EL
        }

        for (var i = 0; i < __markerNodes.length; i++) {
            var __name = __markerNodes[i].getAttribute("name");
            var __street = __markerNodes[i].getAttribute("street");
            var __zipcode = __markerNodes[i].getAttribute("zipcode");
            var __city = titleCaseWord(__markerNodes[i].getAttribute("city"));
            var __state = stateNameToAbbreviatedState(__markerNodes[i].getAttribute("state"));
            var __address_csz = __city + ", " + __state + ", " + __zipcode;
            var __distanceProp = parseFloat(__markerNodes[i].getAttribute("distance"));
            var __distanceNUM = Math.round(__distanceProp);
            var __distanceStr = __distanceNUM.toString();
            var __distance = __distanceStr + " miles away  / ";
            var __LAT = parseFloat(__markerNodes[i].getAttribute("lat"));
            var __LNG = parseFloat(__markerNodes[i].getAttribute("lng"))
            var __mapitURL = "http://maps.google.com/maps?q=" + __LAT + "," + __LNG;
            createStoreResult(__name, __street, __address_csz, __zipcode, __distance, __mapitURL);
        }

    }



    function createStoreResult(name, street, address_csz, zipcode, distance, mapiturl) {
        var __clear = '';
        currentStoreInRowCount++;
        if (currentStoreInRowCount == RESULTS_PER_ROW) {
            __clear = HR_SEARCH_RESULT
            currentStoreInRowCount = 0;
        }

        var __resultElement_noclear = '<div class="result-store MQDefault floatL" style="display:block;"><h1 class="name">' + name + '</h1><span class="address-road">' + street + '</span><span class="address-csz">' + address_csz + '</span><p class="map-information floatL">' + distance + '</p><a class="map-it bab-fc-red floatL" href=' + mapiturl + ' target="_blank">Map It!</a><div class="clear"></div></div>';

        resultsRenderQueue.push(__resultElement_noclear);

        var __resultElement = '<div class="result-store MQDefault floatL" style="display:block;"><h1 class="name">' + name + '</h1><span class="address-road">' + street + '</span><span class="address-csz">' + address_csz + '</span><p class="map-information floatL">' + distance + '</p><a class="map-it bab-fc-red floatL" href=' + mapiturl + ' target="_blank">Map It!</a><div class="clear"></div></div>' + __clear;


        TOTAL_SEARCH_RESULTS_QUEUED++;


        $(document).trigger({
            type: "resultAddedToRenderQueue",
            caller: "::FUNCTION::createStoreResult"
        });

        $(".search-results").append(__resultElement);
    }



    /*
    //
    ///
    //// Event handlers & callbacks
    ///
    //
    */
    function postUserSearchParameteres(uLat, uLng, searchZone, userResultLimit) {
        var __url = "_functions/_storelocator_get-stores.php";
        var __dataString = 'lat=' + uLat + '&lng=' + uLng + '&circ=' + searchZone + '&limit=' + userResultLimit;


        console.log("postUserSearchParameteres parameters: ");
        console.log("												  - __url: " + __url);
        console.log("												  - __dataString: " + __dataString);
        console.log('');

        $.ajax({
            type: "POST",
            url: __url,
            data: __dataString,
            cache: false,
            success: onUserSubmittedDataPostComplete
        });
    }



    function onUserSubmittedDataPostComplete(data) {
        console.log("postUserSearchParameteres callback()->onUserSubmittedDataPostComplete: ");
        console.log('');
        var __XML = (data) ? data : null;
        if (__XML == null || !__XML || __XML == "" || __XML == " ") {
            console.log("__XML is either null, not defined, or populated with empty tags.");
            errors.push("There was a problem retrieving store locations. Please try again later.");
            displayErrors();
            return;
        }

        resultsRenderQueue.length = 0;
        resultsRenderQueue = [];

        $(document).on("resultAddedToRenderQueue", onResultAddedToRenderQueue);
        //
        $(document).on("onAllResultsAddedToRenderQueue", onAllResultsAddedToRenderQueueComplete);

        $(".search-results").empty();
        parseXMLToMarkers(__XML);
    }



    /* [[[[[[[[[[[[[[[[[[[make sure this is the correct function and it's being called!!!!!!!! ]]]]]]]]]]]]]]]]]]]]   */
    function onResultAddedToRenderQueue(e) {
        //alert("onResultAddedToRenderQueue");
        if (TOTAL_SEARCH_RESULTS_QUEUED == TOTAL_SEARCH_RESULTS) {
            $(document).trigger({
                type: "onAllResultsAddedToRenderQueue",
                caller: "resultElementAdded"
            });
            //$(document).unbind("resultAddedToRenderQueue");
        }
    }



    function onAllResultsAddedToRenderQueueComplete(e) {
        console.log("e == null ? " + e);
        if (e == null) {
            __zero_results_txt = "<div class='no-results-copy'>Tower, this is Eagle. Clear for landing?<br />Negative, Eagle. Stand by.<br />American Badass Beer is currently available in Michigan only.<br />Watch for distribution updates. The eagle soars higher & further every day.</div>";

            $(".search-results").empty();
            $(".search-results").append(__zero_results_txt);
            $(".search-results").fadeIn(400, function(e) {
                doEnableSearchButtonClick(true);
            });

            return;
        }


        $(".search-results").fadeIn(400, function(e) {
            doEnableSearchButtonClick(true);
            if ($(this).children().length > 0) {
                $(this).append("<div class='end-of-results-clear clear'></div>");
            } else {
                console.warn(".search-results Children == 0. This is a result of no stores being located using the parameters entered into the form.");
                // ONE ERROR FOR NO RESULTS
                //errors.push("Tower, this is Eagle. Clear for landing?<br />Negative, Eagle. Stand by.<br />American Badass Beer is currently available in Michigan only.<br />Watch for distribution updates. The eagle soars higher & further every day. ");					
                //displayErrors();
                //alert("bing bang");
            }

        });
        $(document).unbind("onAllResultsAddedToRenderQueue");
    }

    function onResetPageFunctionComplete(e) {
        currentStoreInRowCount = 0;

        if (!isValidZip()) {
            displayErrors();
            return;
        }

        doEnableSearchButtonClick(false);

        $(document).one('onPreloaderAdded', function(e) {

            $(".search-results").fadeOut(1000, function() {
                storeLocation();
            });
        });
        addPrelodaer();
    }



    /*
    //
    ///
    //// helper functions
    ///
    //
    */
    function setupPreloaderIcon(iconContainer) {
        var __opts = {
            lines: 9 // The number of lines to draw
                ,
            length: 12 // The length of each line
                ,
            width: 19 // The line thickness
                ,
            radius: 41 // The radius of the inner circle
                ,
            scale: 0.25 // Scales overall size of the spinner
                ,
            corners: 0.5 // Corner roundness (0..1)
                ,
            color: '#fff' // #rgb or #rrggbb or array of colors
                ,
            opacity: 0.05 // Opacity of the lines
                ,
            rotate: 36 // The rotation offset
                ,
            direction: 1 // 1: clockwise, -1: counterclockwise
                ,
            speed: 1 // Rounds per second
                ,
            trail: 60 // Afterglow percentage
                ,
            fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
                ,
            zIndex: 2e9 // The z-index (defaults to 2000000000)
                ,
            className: 'spinner' // The CSS class to assign to the spinner
                ,
            top: '15px' // Top position relative to parent
                ,
            left: '15px' // Left position relative to parent
                ,
            shadow: true // Whether to render a shadow
                ,
            hwaccel: false // Whether to use hardware acceleration
                ,
            position: 'relative' // Element positioning
        }

        SLIcon_PreloaderContainer = document.getElementById(iconContainer);
        SLIcon_Preloader = new Spinner(__opts).spin(SLIcon_PreloaderContainer);
        SLIcon_Preloader.stop();
    }


    function isValidZip() {
        var __userZipcode = $(".user-zipcode").val();
        if (__userZipcode.length < 5) {
            errors.push("Please enter a valid zip code.");
            return false;
        }

        if (!__userZipcode.match(/^\d+$/)) {
            errors.push("Please enter a valid zip code.");
            return false;
        }
        return true;
    }


    function resetPage() {
        $(document).one('onPageReset', function(e) {
            $(document).trigger({
                type: "onResetPageFunction",
                caller: "FUNCTION::resultPage:: All errors faded out."
            });
        });
        hideErrors();
    }

    function hideErrors() {
        if ($(".errors").data("not-currently-visible") == true) {
            $(document).trigger({
                type: "onPageReset",
                caller: "errors are not visible @ time of sutmittal. fadeout not needed."
            });
            return;
        }

        $(".errors").fadeOut(50, function() {
            errors = [];
            $(this).empty();
            //errorsReset = true;
            $(this).data("not-currently-visible", true);
            $(document).trigger({
                type: "onPageReset",
                caller: "::FUNCTION::on_FadeOutComplete[div.errors] -- Errors successfuly faded out."
            });
        });
    }

    function doEnableSearchButtonClick(bool) {
        console.log("doEnableSearchButtonClick." + bool);
        if (bool != true && bool != false) {
            return;
        }
        $(".input-container input.user-search-submit").data('clickable', bool);
    }

    function displayErrors() {
        for (var i = 0; i < errors.length; i++) {
            $(".errors").append("<p class='bab_fc_red' style='font-size:10px;'>" + errors[i] + "</p>");
        }
        $(".errors").fadeIn(400, function() {
            $(this).data("not-currently-visible", false);
            doEnableSearchButtonClick(true);
        });
    }

    function stateNameToAbbreviatedState(str) {
        var __titleCaseStateName = str.replace(/\w\S*/g, function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
        return abbrState(__titleCaseStateName, 'abbr');
    }

    function titleCaseWord(str) {
        var __titleCaseString = str.replace(/\w\S*/g, function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
        return __titleCaseString;
    }

    function getSearchResultsHasChildren() {
        //can be used to check all sorts of conditions
        // - visible / has children / has height/ etc
        return ($(".search-results").children().length > 0);
    }

    function addPrelodaer() {
        SLIcon_Preloader.spin();
        //				alert(SLIcon_Preloader.spin);
        //				var __timeout = setTimeout(function()
        //				{
        $(document).trigger({
            type: "onPreloaderAdded",
            caller: "onAddPreloaderFunctionComplete"
        })
        //				},2000);
    }

    function removePrelodaer() {
        SLIcon_Preloader.stop();
        SLIcon_Preloader.fadeOut(300, function() {
            $(this).css("top", "-9999px");
            preloaderReset = true;
        });
    }


    function orderResults(queue, rowCount) {
        var __currentRowCount = 1;


        for (var i = 0; i < queue.length; i++) {
            var __clear = '';
            console.log("ordering: " + i);
            if (__currentRowCount == rowCount) {
                console.log("clear");
                __currentRowCount = 0;
                __clear = HR_SEARCH_RESULT;
            }

            var __resultElement = queue[i] + __clear;
            $(".search-results").append(__resultElement);

            __currentRowCount++;

        }
        $(".search-results").append(END_CLEAR_SEARCH_RESULTS);
    }


    function adjusStoreSearchResults(resultsPerRow, classRemove, classAdd) {
        $(".search-results").empty();
        orderResults(resultsRenderQueue, resultsPerRow);
        switchClass($(".find-the-eagle-body-content .result-store"), classRemove, classAdd);
    }

    function switchClass(target, removeClass, addClass) {
        target.removeClass(removeClass);
        target.addClass(addClass);
    }







    $(document).ready(function(e) {
        $(".nav").addClass("top-bar.nav-sticky");
        setupPreloaderIcon("preload-icon-container");
        $(".errors").data("not-currently-visible", true);
        initializeStoreLocatorGoogleMapAPI();
        doEnableSearchButtonClick(true);
        $(".input-container input.user-search-submit").click(function(e) {
            e.preventDefault();
            if (!$(this).data('clickable')) {
                return;
            }
            $(document).one('onResetPageFunction', onResetPageFunctionComplete);
            resetPage();
        })



        //-------------------*
        ///
        ////
        //media query helpers
        ////
        ///
        //--------------------*
        setEnquireMediaQueryHandlers();




    }); //document ready callback closure


    function setEnquireMediaQueryHandlers() {


        enquire.register("screen and (max-width:1099px)", {
            match: function() {
                RESULTS_PER_ROW
                RESULTS_PER_ROW = 4;
                CLASS_REMOVE = "MQDefault";
                CLASS_ADD = "MQ-md";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);

                switchClass($("h1.find-the-eagle-headline"), CLASS_REMOVE, CLASS_ADD)
                switchClass($("#find-the-eagle-general-message"), CLASS_REMOVE, CLASS_ADD)
                switchClass($(".find-the-eagle-body-content"), CLASS_REMOVE, CLASS_ADD)

            },
            unmatch: function() {
                RESULTS_PER_ROW = 5;
                CLASS_REMOVE = "MQ-md";
                CLASS_ADD = "MQDefault";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);


                switchClass($("h1.find-the-eagle-headline"), CLASS_REMOVE, CLASS_ADD)
                switchClass($("#find-the-eagle-general-message"), CLASS_REMOVE, CLASS_ADD)
                switchClass($(".find-the-eagle-body-content"), CLASS_REMOVE, CLASS_ADD)

            }
        });

        //
        ///
        /////
        ///
        //
        enquire.register("screen and (max-width:748px)", {
            match: function() {
                RESULTS_PER_ROW = 3;
                CLASS_REMOVE = "MQ-md";
                CLASS_ADD = "MQ-sm";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);
            },
            unmatch: function() {
                RESULTS_PER_ROW = 4;
                CLASS_REMOVE = "MQ-sm";
                CLASS_ADD = "MQ-md";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);
            }
        });
        //
        ///
        /////
        ///
        //
        enquire.register("screen and (max-width:575px)", {
            match: function() {
                RESULTS_PER_ROW = 2;
                CLASS_REMOVE = "MQ-md";
                CLASS_ADD = "MQ-pre-mobile";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);
            },
            unmatch: function() {
                RESULTS_PER_ROW = 3;
                CLASS_REMOVE = "MQ-pre-mobile";
                CLASS_ADD = "MQ-md";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);
            }
        });


        enquire.register("screen and (max-width:450px)", {
            match: function() {
                RESULTS_PER_ROW = 2;
                CLASS_REMOVE = "MQ-pre-mobile";
                CLASS_ADD = "MQ-mobile";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);

                //reset for text
                CLASS_REMOVE = "MQ-md";
                CLASS_ADD = "MQ-mobile";
                switchClass($("h1.find-the-eagle-headline"), CLASS_REMOVE, CLASS_ADD)
                switchClass($("#find-the-eagle-general-message"), CLASS_REMOVE, CLASS_ADD)
                switchClass($(".find-the-eagle-body-content"), CLASS_REMOVE, CLASS_ADD)
            },
            unmatch: function() {
                RESULTS_PER_ROW = 3;
                CLASS_REMOVE = "MQ-mobile";
                CLASS_ADD = "MQ-pre-mobile";
                adjusStoreSearchResults(RESULTS_PER_ROW, CLASS_REMOVE, CLASS_ADD);


                //reset for text
                CLASS_REMOVE = "MQ-mobile";
                CLASS_ADD = "MQ-md";
                switchClass($("h1.find-the-eagle-headline"), CLASS_REMOVE, CLASS_ADD)
                switchClass($("#find-the-eagle-general-message"), CLASS_REMOVE, CLASS_ADD)
                switchClass($(".find-the-eagle-body-content"), CLASS_REMOVE, CLASS_ADD)
            }
        });



    }

</script>


<script src="js/enquire.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/scrollReveal.min.js"></script>
<script src="js/lightbox.min.js"></script>

</html>

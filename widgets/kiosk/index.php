<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Kiosk demo site</title>
	<meta type="description" content="default meta decription"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="/head.load.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styleleaderboard.css" />
	<!-- The 1140px Grid -->
	<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
	
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen" />
	<![endif]-->
	
	<!-- Type and image presets - NOT ESSENTIAL -->
	<link rel="stylesheet" href="css/typeimg.css" type="text/css" media="screen" />
	<!-- Make minor type adjustments for 1024 monitors -->
	<link rel="stylesheet" href="css/smallerscreen.css" media="only screen and (max-width: 1023px)" />
	<!-- Resets grid for mobile -->
	<link rel="stylesheet" href="css/mobile.css" media="handheld, only screen and (max-width: 767px)" />
	<!-- Put your layout here -->
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script> 
	<link rel=StyleSheet href="css/style.css" type="text/css">
</head>

<body>
<div class="container">
	<div id="header" class="row">
    	<div id="nav">
			<ul>
				<li><a href="http://workbench-staging.bazaarvoice.com/" target="_blank">Workbench</a></li>
				<li><a href="http://teambox.droppages.com/Products/TV1/moderation1">Moderation</a></li>
			</ul>
		</div>
		<div id="logo" class="fivecol">
			<a class="logo" href="/"><img src="img/logodummy.png" width="249" height="51" border="0"></a>
		</div>
        <div  class="sevencol last searchlogin">
        <!-- kiosk -->
			<div id="info" class="BVRRKioskInfo">
				<div id="searchbox" class="BVRRKioskSearchBox"><span class="BVRRKioskSearchSpan"><strong>Search:</strong></span>
					<input type="text" class="BVRRKioskInput" size="30" value="" id="inputString" onkeyup="lookup(this.value);" />
				</div>
				<div id="container" class="BVRRKioskContainer">
					<div id="products" class="BVRRKioskContainerProducts"></div>
					<div id="reviews" class="BVRRKioskContainerReviews"></div>	
				</div>		
			</div>
			<!-- end kiosk -->
		</div>
	</div>
    <div id="body" class="row">
    	<div id="nav" class="row">
			<ul><li class=""><a href="/">Home</a></li><li class=""><a href="/Categories">Categories</a></li><li class="current"><a href="/Products">Products</a></li><li class=""><a href="/About+us">About us</a></li></ul>
		</div>

	<div id="content">
    <div class="twelvecol">
        <div class="article">
            <div class="breadcrumbs"><ul><li><a href="/">Home</a></li><li><a href="/Products">Products</a></li><li><a href="/Products/TV1">TV1</a></li></ul></div>
            <div id="product">
                <div class="productimage fivecol"><img src="img/InfiniMix1.jpg" alt="TV"></div>

<div class="productinfo sevencol last">
    <h1>InfiniMix Planet 32 Inch HD Ready Freeview Direct-lit LED TV</h1>
    <div class="productdescription">Super-slim, eco-friendly and with a sharper, more detailed picture and stunning contrasts ratio, this InfiniMix Planet 32 LED TV is a revolution in image quality and design and its low profile makes it perfect for wall-mounting. InfiniMix Intelligent Sensor automatically finds the optimal brightness, sharpness, colour and contrast picture settings to enhance the picture quality.</div>
    <div id="BVRRSummaryContainer"></div>
    <div class="productprice">£259.99</div>
    <a href="/Products/TV1/Confirm"><img src="img/cart_button.gif" border="0"></a>
</div>

<div class="productdetails twelvecol">
    <div class="threecol">
        <h2>Television picture quality:</h2>
        <ul>
            <li>Edge-lit TV Screen</li>
            <li>Full HD 1080p display resolution</li>
            <li>Integrated Freeview HD digital tuner</li>
            <li>32in (81cm) widescreen TV</li>
            <li>Resolution 1920 x 1080 pixels</li>
            <li>Viewing angle 178/178 degrees</li>
        </ul>
    </div>
    <div class="threecol">
        <h2>Connectivity:</h2>
        <ul>
            <li>1 USB port and 2 HDMI sockets</li>
            <li>PC input socket</li>
            <li>Component video socket</li>
        </ul>
    </div>
    <div class="threecol">
        <h2>Digital features:</h2>
        <ul>
            <li>Auto setup</li>
            <li>Auto scan for new channels</li>
            <li>Now and next programme guide</li>
            <li>7 day electronic programme guide (EPG)</li>
            <li>Audio description compatible</li>
        </ul>
    </div>
    <div class="threecol last">
        <h2>Energy efficiency information:</h2>
        <ul>
            <li>Energy efficiency rating: A</li>
            <li>On mode power consumption 32 watts</li>
            <li>Off mode power consumption 0.3 watt</li>
            <li>Annual power consumption 58kWh</li>
            <li>Standby power consumption 0.3 wattM</li>
            <li>LED</li>
        </ul>
    </div>
</div>

<div class="ugc ninecol">
	
    <div id="BVRRContainer"><img src="img/rr.jpg"></div>
    <div id="BVQAContainer"><img src="img/qa.jpg"></div>
</div>

<div class="threecol last">
    <div class="like">
        <h2>You may also like</h2>
        <ul>
            <li><img src="img/samsung_thumbnail.jpg" class="thumb">Samsung EH5300 32 Inch Full HD Freeview HD Smart LED TV <div class="price">£349.99</div><img src="img/4.png" class="stars"></li>
            <li><img src="img/bracket1_thumbnail.jpg" class="thumb">Superior Flat to Wall 13 Inch to 26 Inch TV Wall Bracket <div class="price">£19.99</div><img src="img/4.png" class="stars"></li>
            <li><img src="img/sony_thumbnail.jpg" class="thumb">Sony 32EX340 32 Inch HD Ready Freeview LED TV<div class="price">£279.00</div><img src="img/4.png" class="stars"></li>
            <li><img src="img/bracket3_thumbnail.jpg" class="thumb">Flat to Wall 32 Inch TV Wall Bracket<div class="price">£29.99</div><img src="img/4.png" class="stars"></li>
            <li><img src="img/InfiniMix_thumbnail.jpg" class="thumb">InfiniMix 32LS3590 32 Inch HD Ready Freeview LED TV<div class="price">£269.97</div><img src="img/4.png" class="stars"></li>
            <li><img src="img/bracket2_thumbnail.jpg" class="thumb">Single Arm 32 Inch TV Wall Bracket<div class="price">£22.99</div><img src="img/4.png" class="stars"></li>
        </ul>
    </div>
</div>

            </div>
        </div>
    </div>
</div>
	
    </div>
</div>

<div class="footer-wrapper">
    <div id="footer" class="row">
        <div class="threecol">
            <h3>Essential information</h3>
            <ul>
                <li><a href="/">Customer services</a></li>                
                <li><a href="/">Privacy policy</a></li>
                <li><a href="/">Terms &amp; Conditions</a></li>
            </ul>
        </div>
        <div class="twocol">
            <h3>Shopping</h3>
            <ul>
                <li><a href="/">Delivery</a></li>
                <li><a href="/">Order tracking</a></li>
                <li><a href="http://brandbox.droppages.com/Products/TV1/instore">Store locator</a></li>
            </ul>
        </div>
        <div class="fourcol">
            <div class="map"><img src="img/store_locator.png"></div>
        </div>
        <div class="threecol last">
            <h3>Follow us</h3>
            <div class="social"><img src="img/facebook_icon.gif"><img src="/twitter_icon.gif"></div>
        </div>
    </div>
</div>
	<script type="text/javascript">
		function getUrlVars() { 
			var urlmap = {}; 
			var parts = window.location.search.replace(/[?&]+([^=&]+)(=[^&]*)?/gi, function(m,key,value) { 
				urlmap[key] = (value === undefined) ? true : value.substring(1); 
			}); 
			return urlmap;
		}
		if (getUrlVars()["zone"] != undefined) {
			myDeployZone = "//display-stg.ugc.bazaarvoice.com/static/ci-emea-demo/"+getUrlVars()['zone']+"/en_US/bvapi.js";
			
		} else {
			myDeployZone = "//display-stg.ugc.bazaarvoice.com/static/ci-emea-demo/demodonttouch/en_US/bvapi.js";
			
		};

		if (getUrlVars()["product"] != undefined) {
			myProduct = getUrlVars()['product'];
			
		} else {
			myProduct = "product1";
			
		};
		aaenabled = true;
		// if (getUrlVars()["qa"] != undefined) {
		// 	aaenabled = true;
			
		// } else {
		// 	aaenabled = false;
			
		// };

		head.js(myDeployZone, function() {
			$BV.configure('global', {});
			$BV.ui( 'rr', 'show_reviews', { productId : myProduct}, {});
			if (aaenabled) { $BV.ui( 'qa', 'show_questions', { productId : myProduct}, {}); };
		})
	</script>
</body>
</html>
<html> 
	<head> 
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
		<title>Place searcher</title> 

		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
				<script type="text/javascript" src="js/script.js"></script> 
		<link rel=StyleSheet href="css/style.css" type="text/css">
	</head>

	<body>
		<div id="header"></div>
		
		<div id="content">
		<div id="info">
			<div id="searchbox"><strong>Search:</strong>
			<input type="text" size="30" value="" id="inputString" onkeyup="lookup(this.value);" />
			</div>
			<div id="container">
				<div id="products"></div>
				<div id="reviews"></div>	
			</div>		
		</div>
		
		</div>
		
		<div id="footer"></div>	
	</body>
</html>

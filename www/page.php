<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			setInterval(function(){
	
				req = jQuery.get('http://localhost:5000/index/daemon/');
	
				req.done(function(data) {
		
					$('div').html(data);
		
				});
	
			}, 10000);
		</script>
		<?php header('Access-Control-Allow-Origin: *'); ?>
	</head>
	<body>
		<div id="statistiek">hier is nog niks!</div>
	</body>
</html>
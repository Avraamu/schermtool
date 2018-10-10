setInterval(function() {
	
	req = jQuery.get('http://localhost:9999/index/daemon/');
	
	req.done(function(data) {
		
		$('#statistiek').html(data);
		
	});

}, 30000);


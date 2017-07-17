<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="stylesheet" href="{{ asset('assets/css/others.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<title>Dá</title>

</head>
<body>

	@yield('content')
	
	<script type="text/javascript" src="{{ asset('assets/js/others.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript">
		$('.bxslider').bxSlider({
	  		pager: false
	  	});

	  	var urlAfiliacion = "<?php echo URL::to('/afiliacion'); ?>"
	</script>
</body>
</html>
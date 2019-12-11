<!doctype html>
<!--
	Example layout file
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-with, initial-scale=1.0">
		
		<title>{{ FW_NAME }}</title>

		<link rel="stylesheet" href="<?= Asatru\Helper\resource_url(); ?>/css/app.css">

		<script src="<?= Asatru\Helper\resource_url(); ?>/js/app.js"></script>
	</head>
	
	<body style="background-image: url('<?= Asatru\Helper\resource_url(); ?>/img/bgimg.jpg');">
		{%yield%}
	</body>
</html>
<!doctype html>
<!--
	Example layout file
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-with, initial-scale=1.0">
		
		<title>{{ ASATRU_FW_NAME }}</title>

		<link rel="stylesheet" href="{{ resource_url() }}/css/app.css">

		<script src="{{ resource_url() }}/js/app.js"></script>
	</head>
	
	<body style="background-image: url('{{ resource_url() }}/img/bgimg.jpg');">
		{%yield%}
	</body>
</html>
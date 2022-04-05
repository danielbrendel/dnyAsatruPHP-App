<!doctype html>
<!--
	Example layout file
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-with, initial-scale=1.0">
		
		<title>{{ ASATRU_FW_NAME }} - The lightweight MVC web framework</title>

		<script src="{{ asset('js/app.js') }}"></script>
	</head>
	
	<body style="background-image: url('{{ asset('img/bgimg.jpg') }}');">
		{%yield%}
	</body>
</html>
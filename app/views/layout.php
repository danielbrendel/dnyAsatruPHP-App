<!doctype html>
<!--
	Example layout file
-->
<html lang="{{ getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>{{ ASATRU_FW_NAME }} - The lightweight MVC web framework</title>

		<script src="{{ asset('js/app.js') }}"></script>
	</head>
	
	<body style="background-image: url('{{ asset('img/bgimg.jpg') }}');">
		{%yield%}
	</body>
</html>
<!doctype html>
<html lang="{{ getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>{{ ASATRU_FW_NAME }} - The lightweight MVC web framework</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
		<script src="{{ asset('js/app.js') }}"></script>
	</head>
	
	<body>
		{%content%}
	</body>
</html>
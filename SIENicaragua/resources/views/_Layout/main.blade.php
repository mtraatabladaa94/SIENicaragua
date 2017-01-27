<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>@yield('title', '')Sadara App™</title>

		<!--Styles-->
		<!--Bower Scripts-->
		<link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.css" />
		<!--Custom Scripts-->
		<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
		<link href="{{ asset('custom_components/MaterialIcons/MaterialIcons.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('custom_components/custom/css/style.css') }}" />
		<link rel="stylesheet" media="(max-width: 600px)" href="{{ asset('custom_components/custom/css/styleMediaOnly600.css') }}"/>

		@yield('custom-head', '')
	</head>
	<body class="blue-grey lighten-5">
		@include('_Layout.header')

		@yield('sadara-content', '')

		@include('_Layout.footer')

		<!--Bower Scripts-->
		<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('bower_components/materialize/dist/js/materialize.js') }}"></script>

		<!--Custom Scripts-->
		<script type="text/javascript" src="{{ asset('custom_components/custom/js/script.js') }}"></script>

		@yield('custom-scripts', '')
	</body>
</html>
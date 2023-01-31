<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test page</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script type="text/javascript" src="{{ URL::asset('js/testFunc.js') }}"></script>
	</head>
	@if ($done)
		<body onload="success()">
	@else
		<body>
	@endif
	</body>
</html>

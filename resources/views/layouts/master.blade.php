<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title', 'Home')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@include('layouts.styles')
	</head>
	<body>
		<div id="colorlib-page">
			<div class="container-wrap">		
				@include('layouts.sidebar')
				<div id="colorlib-main">
					@yield('content')
				</div><!-- end:colorlib-main -->
			</div><!-- end:container-wrap -->
		</div><!-- end:colorlib-page -->

		@include('layouts.scripts')
	</body>
</html>


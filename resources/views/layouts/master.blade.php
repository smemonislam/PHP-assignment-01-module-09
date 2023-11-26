<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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


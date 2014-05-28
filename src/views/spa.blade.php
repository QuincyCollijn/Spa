<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Azion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- GOOGLE FONT-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- /GOOGLE FONT-->
		<link href="http://fonts.googleapis.com/css?family=Comfortaa:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">

		<!-- Le styles --><!-- Latest compiled and minified CSS BS 3.0. RC1-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/azion.css"/>

		<link href="assets/css/font-awesome.min.css" rel="stylesheet">

		<!--[if lt IE 7]>
		<link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">    <![endif]--><!-- Fav and touch icons -->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]--><!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

	</head>
	<!-- /HEAD-->
	<body data-spy="scroll" data-target=".navbar">
		<nav id="topnav" class="navbar navbar-fixed-bottom navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
						<span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="images/logo-3.png" alt="logo-3" height="30"></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#top-section">Home</a></li>
						<li><a href="#Section-1">Wat we doen</a></li>
						<li><a href="#Section-2">Over Azion</a></li>
						<li><a href="#foot-section">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
			@foreach($sections as $section)
				{{ $section }}
			@endforeach

		<!-- Le javascript
		================================================== --><!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- PAGE CUSTOM SCROLLER -->
		<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>

		<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>

		<script src="assets/js/azion.js" type="text/javascript"></script>
	</body>
</html>
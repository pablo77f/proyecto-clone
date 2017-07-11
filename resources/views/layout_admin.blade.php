<html>
	<head>
		<title>LINES - Laboratorio de Ingenieria en Sistemas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<meta name="theme-color" content="#222"/>
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#222"/>

		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<style>
		.staff {
			border-radius: 100%;
			height: 2.5em;
			left: 0;
			line-height: 2.5em;
			position: absolute;
			top: 0;
			width: 2.5em;
		}
		.video-container {
			position: relative;
			padding-bottom: 56.25%;
			padding-top: 30px; height: 0; overflow: hidden;
			}

		.video-container iframe,
		.video-container object,
		.video-container embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		</style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<!--
					<h1 id="logo"><a href="#">LINES</a></h1>
					<p>Laboratório de Ingeniería<br />
					en Sistemas de Información</p>
				-->
					<img id="logo" src="{{ url('/') }}/images/logo4.png" >
				</header>
				<nav id="nav">
					<ul>
						<li><a href="{{ url('admin/staff') }}">Staff</a></li>
						<li><a href="{{ url('admin/proyecto') }}">Proyectos</a></li>
						<li><a href="{{ url('admin/noticia') }}">Noticias</a></li>
					</ul>
				</nav>

			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

								<div class="container">
									@yield('container')
								</div>

					</div>
			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollzer.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="{{ url('/') }}/js/tinymce/tinymce.min.js"></script>
@yield('scripts')
	</body>
</html>

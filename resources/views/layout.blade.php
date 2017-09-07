<!DOCTYPE HTML>
<html>
	<head>
		<title>LINES - Laboratorio de Ingenieria en Sistemas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/modal.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!-- Chrome, Firefox OS y Opera -->
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
		<div id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close_modal">&times;</span>
          <h3 style="margin-bottom: 0px;" id="persona_nombre">Lautaro Bifano</h3>
        </div>
        <div class="modal-body">
					<div class="row">
						<div class="3u">
							<img id="persona_imagen" src="http://localhost:8000/images/staff/Lautaro_Bifano.png" height="200px">
						</div>
						<div class="9u">
							<div class="row">
								<div class="12u">
									<b id="persona_curriculum"></b>
								</div>
								<div class="12u" id="div_mail">
									mail: <a target="_blank" id="persona_mail"></a>
								</div>
								<div class="12u" id="div_facebook">
									facebook: <a target="_blank" id="persona_facebook"></a>
								</div>
								<div class="12u" id="div_linkedin">
									linkedin: <a target="_blank" id="persona_linkedin"></a>
								</div>

							</div>
						</div>
					</div>
        </div>


      </div>
    </div>
		<!-- Header -->
			<section id="header">
				<header>
					<!--
					<h1 id="logo"><a href="#">LINES</a></h1>
					<p>Laboratório de Ingeniería<br />
					en Sistemas de Información</p>
				-->
					<img id="logo" src="images/logo4.png" >
				</header>
				<nav id="nav">

					<ul>
						<li><a href="#one" class="active">Misión</a></li>
						<li><a href="#two">Staff</a></li>
						<li><a href="#historia">História</a></li>
						<li><a href="#three">Proyectos</a></li>
						<li><a href="#servicios">Formularios</a></li>
						<li><a href="#videos">Videos</a></li>
						<li><a href="#four">Contactanos</a></li>

					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/linesutnfrlp" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/lbifano" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="mailto:lines@frlp.utn.edu.ar" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h3>Misión</h3>
									</header>

							<p >El Lines ha sido formado
							para efectuar desarrollos de avanzada e investigaci&oacute;n b&aacute;sica
							y aplicada, sobre temas relacionados con las necesidades y caracter&iacute;sticas
							inform&aacute;ticas del sistema productivo local, nacional e internacional, con el fin de
							satisfacer las necesidades y apoyar el desarrollo de la estructura acad&eacute;mica.</p>
						<p > Esto constituye un factor esencial para la vinculaci&oacute;n con el sistema productivo,
						estudiando la influencia de la tecnolog&iacute;a digital y su crecimiento. De
						esta manera, la transferencia del conocimiento generado en la Universidad hacia
						la sociedad es directa y en respuesta a necesidades espec&iacute;ficas.</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>Staff</h3>
									<ul class="feature-icons">
										@foreach($datos['staff'] as $persona)
										@if($persona->foto)
											<li><img src="{{ url('/') }}{{$persona->foto}}" class="staff"/>
										@else
											<li class="fa-user">
										@endif
										<a href="#!" onclick="openModal('{{$persona->id}}')">{{$persona->nombre}} {{$persona->apellido}}</a></li>
										@endforeach
									<ul>

								</div>
							</section>

							<section id="historia">
								<div class="container">
										<h3>História</h3>

									<p >El Decano Ing. Carlos Fantini, junto con el Director del Departamento de
							  Sistemas Lic. Carlos Lopez y los graduados de Sistemas: Ing. Aguirre Leonardo
							  e Ing. Sergio Antonini, viendo la necesidad de que la Especialidad de Ing. en
							  Sistemas era la &uacute;nica especialidad que no contaba con un Laboratorio,
							  fueron pensando en la creaci&oacute;n del mismo. Fue as&iacute; que a mediados
							  del a&ntilde;o 1996 esa idea fue tomando forma y se logro contar con la disponibilidad
							  del aula 32, lo que ahora es el Lines.</p>

							  <p> La primer idea, era la de encontrar una soluci&oacute;n a los muchos problemas
							    que contaba el Departamento de Alumnos, debido a lo tedioso de las inscripciones
							    y tr&aacute;mites manuales que deb&iacute;an llevar. Tema vivido ya desde
							    la &eacute;poca en que uno era alumno. De a poco se fue adquiriendo el equipamiento
							    necesario, y al poco tiempo que se empez&oacute; con la realizaci&oacute;n
							    de dicho sistema, se sumaron en forma incondicional los alumnos de ese entonces
							    y excelentes profesionales ahora, Leonardo Bellizi, Carolina Piboul, David
							    Pendenza y Carlos Barcenilla. Quienes junto a ellos hemos hecho posible un
							    mont&oacute;n de cosas importantes para nuestra querida Facultad. No solamente
							    finalizar el sistema de alumnos, sino tambi&eacute;n el cableado y conexi&oacute;n
							    en red de toda la Facultad, sitio de la Facultad, correo electr&oacute;nico,
							    y la versi&oacute;n web del departamento de Alumnos, siendo la primer Facultad
							    en poseer los servicios de este departamento en forma online para sus propios
							    alumnos. Luego con el paso del tiempo han dejado sus huellas otras excelentes
							    personas que tambi&eacute;n han realizado grandes cosas.</p>
							<p > Hoy en d&iacute;a, el Lines
							  cuenta con un plantel fijo de personas, en su mayor&iacute;a profesionales de
							  esta Facultad y becarios de investigaci&oacute;n de los &uacute;ltimos a&ntilde;os
							  de la especialidad. </p>
							<br>
							<p style="margin:0px 30px 0px 10px" align="right">Director Gral<br>
							  <b>Ing. Carlos Chong</b></p>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Proyectos</h3>
									<!--
										<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									-->
										<div class="row">
										@foreach($datos['proyectos'] as $proyecto)
											<div class="6u 12u(xsmall)">
												<h4>{{$proyecto->nombre}}</h4>
												<p>{{str_limit($proyecto->descripcion,200,'...')}}</p>
											</div>
										@endforeach
									</div>

									<!--
										<article>
											<div class="inner">
												<h4>Possibly broke spacetime</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<div class="inner">
												<h4>Terraformed a small moon</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<div class="inner">
												<h4>Snapped dark matter in the wild</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
									-->
									</div>

							</section>
							<section id="servicios">
								<div class="container">
									<h3>Formularios</h3>
									<blockquote>
										Para enviar un formulario, primero debe descargarlo don alguno de los links que estan en "Solicitudes", debajo de este parrafo.<br>
										Luego debe completarlo, escanearlo o sacarle una foto nitida, y subirlo al sistema con el formulario, al lado de las solicitudes.

									</blockquote>
									<div class="row uniform">
										<div class="6u 12u(xsmall)">
											<h5>Solicitudes</h5>
											<ul>
												<li><a target="_blank" href='{{ url('/') }}/forms/puertos.pdf'>Acceso a puertos</a></li>
												<li><a target="_blank" href='{{ url('/') }}/forms/email_alumno.pdf'>Email de Alumno</a></li>
												<li><a target="_blank" href='{{ url('/') }}/forms/email_docente.pdf'>Email de Docente</a></li>
												<li><a target="_blank" href='{{ url('/') }}/forms/moodle.pdf'>Espacio en Moodle</a></li>
												<li><a target="_blank" href='{{ url('/') }}/forms/web_catedras.pdf'>Pagina Web para Catedras</a></li>
												<li><a target="_blank" href='{{ url('/') }}/forms/web_predefinida.pdf'>Pagina Web Predefinida para Catedras</a></li>
											</ul>
										</div>
										<form class="6u 12u(xsmall)" action="{{ url('/') }}/form" method="POST" enctype="multipart/form-data">
											{!! csrf_field() !!}
												<div class="row uniform">
													<div class="12u">
														<textarea name="message" id="message" placeholder="Mensaje" rows="3"></textarea>
													</div>
													<div class="12u">
														<input type="file" name="foto" id="foto"/>
													</div>
													<div class="12u">
															<input type="submit" class="button special small" value="Enviar Formulario" />
													</div>
												</div>
										</form>
									</div>
								</div>
							</section>
							<section id="videos">
								<div class="container">
									<h3>Videos</h3>
									<!--
									<p>InnovaTec 1</p>
									<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/zUCxEzxf_qI" frameborder="0" allowfullscreen></iframe></div>


									<p>InnovaTec 2</p>

									<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/xfdgndjjeZk" frameborder="0" allowfullscreen></iframe></div>

									<p>Lista de Reproduccion</p>
								-->
									<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PLu8AzYbKwOW3lLXNkVAm5qSnbmNiw-6gr" frameborder="0" allowfullscreen></iframe></div>


								</div>
							</section>
						<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Contactanos</h3>

									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Nombre"></div>
											<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email"></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="subject" id="subject" placeholder="Asunto"></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Mensaje" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Enviar" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>


					</div>



			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
			var modal = document.getElementById("myModal");
		  var span = document.getElementsByClassName("close_modal")[0];
		  span.onclick = function() {
		      modal.style.display = "none";
		  }
		  window.onclick = function(event) {
		      if (event.target == modal) {
		          modal.style.display = "none";
		      }
		  }
			function openModal(id_persona) {
				$.ajax({
					url: '{{ url('/staff') }}/'+id_persona
				}).done(function(persona) {
					console.log(persona);
					$('#persona_imagen').prop('src','{{ url('/') }}'+persona.foto);
					$('#persona_mail').attr('href', 'mailto:'+persona.email).text(persona.email);
					if(persona.facebook) {
						$('#persona_facebook').attr('href',persona.facebook).text(persona.facebook);
						$('#div_facebook').css('display','block')
					}
					else
						$('#div_facebook').css('display','none');
					$('#persona_nombre').html(persona.nombre+' '+persona.apellido);
					if(persona.linkedin) {
						$('#persona_linkedin').attr('href',persona.linkedin).text(persona.linkedin);
						$('#div_linkedin').css('display','block');
					}
					else
						$('#div_linkedin').css('display','none');
					$('#persona_curriculum').html(persona.curriculum);
				});
				modal.style.display = "block";
			}

			</script>

	</body>
</html>

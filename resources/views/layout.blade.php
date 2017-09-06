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
									mail: <font id="persona_mail">paospdomamasd@dkfnaspomsa</font>
								</div>
								<div class="12u">
									facebook: <font id="persona_facebook">paospdomamasd@dkfnaspomsa</font>
								</div>
								<div class="12u">
									linkedin: <font id="persona_linkedin">paospdomamasd@dkfnaspomsa</font>
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
												<li><a href='{{ url('/') }}/forms/puertos.pdf'>Acceso a puertos</a></li>
												<li><a href='{{ url('/') }}/forms/email_alumno.pdf'>Email de Alumno</a></li>
												<li><a href='{{ url('/') }}/forms/email_docente.pdf'>Email de Docente</a></li>
												<li><a href='{{ url('/') }}/forms/moodle.pdf'>Espacio en Moodle</a></li>
												<li><a href='{{ url('/') }}/forms/web_catedras.pdf'>Pagina Web para Catedras</a></li>
												<li><a href='{{ url('/') }}/forms/web_predefinida.pdf'>Pagina Web Predefinida para Catedras</a></li>
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

						<!-- Five -->
<!--
							<section id="five">
								<div class="container">
									<h3>Elements</h3>

									<section>
										<h4>Text</h4>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
										<hr />
										<header>
											<h4>Heading with a Subtitle</h4>
											<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
										</header>
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<header>
											<h5>Heading with a Subtitle</h5>
											<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
										</header>
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<hr />
										<h2>Heading Level 2</h2>
										<h3>Heading Level 3</h3>
										<h4>Heading Level 4</h4>
										<h5>Heading Level 5</h5>
										<h6>Heading Level 6</h6>
										<hr />
										<h5>Blockquote</h5>
										<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
										<h5>Preformatted</h5>
										<pre><code>i = 0;

	while (!deck.isInOrder()) {
	    print 'Iteration ' + i;
	    deck.shuffle();
	    i++;
	}

	print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
									</section>

									<section>
										<h4>Lists</h4>
										<div class="row">
											<div class="6u 12u(xsmall)">
												<h5>Unordered</h5>
												<ul>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Sagittis adipiscing lorem eleifend.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ul>
												<h5>Alternate</h5>
												<ul class="alt">
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Sagittis adipiscing lorem eleifend.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ul>
											</div>
											<div class="6u 12u(xsmall)">
												<h5>Ordered</h5>
												<ol>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Etiam vel felis at lorem sed viverra.</li>
													<li>Felis enim feugiat dolore viverra.</li>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Etiam vel felis at lorem sed viverra.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ol>
												<h5>Icons</h5>
												<ul class="icons">
													<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
													<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
													<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
													<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
													<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
													<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
												</ul>
											</div>
										</div>
										<h5>Actions</h5>
										<ul class="actions">
											<li><a href="#" class="button special">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt">Default</a></li>
										</ul>
										<ul class="actions small">
											<li><a href="#" class="button special small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button alt small">Small</a></li>
										</ul>
										<div class="row">
											<div class="3u 6u(medium) 12u$(xsmall)">
												<ul class="actions vertical">
													<li><a href="#" class="button special">Default</a></li>
													<li><a href="#" class="button">Default</a></li>
													<li><a href="#" class="button alt">Default</a></li>
												</ul>
											</div>
											<div class="3u 6u$(medium) 12u$(xsmall)">
												<ul class="actions vertical small">
													<li><a href="#" class="button special small">Small</a></li>
													<li><a href="#" class="button small">Small</a></li>
													<li><a href="#" class="button alt small">Small</a></li>
												</ul>
											</div>
											<div class="3u 6u(medium) 12u$(xsmall)">
												<ul class="actions vertical">
													<li><a href="#" class="button special fit">Default</a></li>
													<li><a href="#" class="button fit">Default</a></li>
													<li><a href="#" class="button alt fit">Default</a></li>
												</ul>
											</div>
											<div class="3u 6u$(medium) 12u$(xsmall)">
												<ul class="actions vertical small">
													<li><a href="#" class="button special small fit">Small</a></li>
													<li><a href="#" class="button small fit">Small</a></li>
													<li><a href="#" class="button alt small fit">Small</a></li>
												</ul>
											</div>
										</div>
									</section>

									<section>
										<h4>Table</h4>
										<h5>Default</h5>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>

										<h5>Alternate</h5>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</section>

									<section>
										<h4>Buttons</h4>
										<ul class="actions">
											<li><a href="#" class="button special">Special</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt">Alternate</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special big">Big</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt small">Small</a></li>
										</ul>
										<ul class="actions fit">
											<li><a href="#" class="button special fit">Fit</a></li>
											<li><a href="#" class="button fit">Fit</a></li>
											<li><a href="#" class="button alt fit">Fit</a></li>
										</ul>
										<ul class="actions fit small">
											<li><a href="#" class="button special fit small">Fit + Small</a></li>
											<li><a href="#" class="button fit small">Fit + Small</a></li>
											<li><a href="#" class="button alt fit small">Fit + Small</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special icon fa-download">Icon</a></li>
											<li><a href="#" class="button icon fa-download">Icon</a></li>
											<li><a href="#" class="button alt icon fa-check">Icon</a></li>
										</ul>
										<ul class="actions">
											<li><span class="button special disabled">Special</span></li>
											<li><span class="button disabled">Default</span></li>
											<li><span class="button alt disabled">Alternate</span></li>
										</ul>
									</section>

									<section>
										<h4>Form</h4>
										<form method="post" action="#">
											<div class="row uniform">
												<div class="6u 12u(xsmall)">
													<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
												</div>
												<div class="6u 12u(xsmall)">
													<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
												</div>
											</div>
											<div class="row uniform">
												<div class="12u">
													<div class="select-wrapper">
														<select name="demo-category" id="demo-category">
															<option value="">- Category -</option>
															<option value="1">Manufacturing</option>
															<option value="1">Shipping</option>
															<option value="1">Administration</option>
															<option value="1">Human Resources</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row uniform">
												<div class="4u 12u(medium)">
													<input type="radio" id="demo-priority-low" name="demo-priority" checked>
													<label for="demo-priority-low">Low Priority</label>
												</div>
												<div class="4u 12u(medium)">
													<input type="radio" id="demo-priority-normal" name="demo-priority">
													<label for="demo-priority-normal">Normal Priority</label>
												</div>
												<div class="4u 12u(medium)">
													<input type="radio" id="demo-priority-high" name="demo-priority">
													<label for="demo-priority-high">High Priority</label>
												</div>
											</div>
											<div class="row uniform">
												<div class="6u 12u(medium)">
													<input type="checkbox" id="demo-copy" name="demo-copy">
													<label for="demo-copy">Email me a copy of this message</label>
												</div>
												<div class="6u 12u(medium)">
													<input type="checkbox" id="demo-human" name="demo-human" checked>
													<label for="demo-human">I am a human and not a robot</label>
												</div>
											</div>
											<div class="row uniform">
												<div class="12u">
													<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
												</div>
											</div>
											<div class="row uniform">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" value="Send Message" /></li>
														<li><input type="reset" value="Reset" class="alt" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

									<section>
										<h4>Image</h4>
										<h5>Fit</h5>
										<span class="image fit"><img src="images/banner.jpg" alt="" /></span>
										<div class="box alt">
											<div class="row 50% uniform">
												<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											</div>
											<div class="row 50% uniform">
												<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											</div>
											<div class="row 50% uniform">
												<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
												<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											</div>
										</div>
										<h5>Left &amp; Right</h5>
										<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									</section>

								</div>
							</section>
-->



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
					$('#persona_mail').html(persona.email);
					$('#persona_facebook').html(persona.facebook);
					$('#persona_nombre').html(persona.nombre+' '+persona.apellido);
				});
				modal.style.display = "block";
			}

			</script>

	</body>
</html>

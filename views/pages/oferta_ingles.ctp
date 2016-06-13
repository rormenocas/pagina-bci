<?php $this->pageTitle = 'Inglés eClass'?>
<div class="banner">
	<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner_ingles.png', array('alt' => 'Bienvenido a Aula Digital Empresarios 2015 | Apoyamos tus sueños en cada eta de tu negocio | Los mejores cursos de perfeccionamiento para el éxito de tu Pyme', 'width' => 1440 , 'height' => 322 , 'class' => 'visible-lg visible-sm visible-md' ));?>
		<?php echo $this->element('contacto', array('action' => 'index'));?>
</div>
<div class="home">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Modalidades de Estudio<span class="division-right"></span>
						</div>
						<div class="subtitulo">
							<p>Elige tu ritmo y lugar de estudio</p>
						</div>
					</div>
					<div class="row">
						<div class="modalidades">
							<div class="modalidad mod1">
								<p>Cursos 100% <br> <strong>Online</strong></p>
							</div>
							<div class="modalidad mod2">
								<p>Curso Online <br> <strong>con clases en vivo</strong></p>
							</div>
							<div class="modalidad mod3">
								<p>Curso <br> <strong>Semipresencial</strong></p>
							</div>
							<div class="modalidad mod4">
								<p>Curso <br> <strong>Presencial</strong></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cuadro-cursos">
							<div class="row">
								<div class="span12">
									<div class="row-fluid">
										<table class="table" cellspacing="0" cellpadding="0" >
											<thead class="header1">
												<tr>
													<th style="width: 10px;"></th>
													<th></th>
													<th colspan="3" class="titulo-curso">
														<div class="center">
															CURSOS DE INGLÉS 2015
														</div>
													</th>
												</tr>
											</thead>
											<thead class="header2">
												<tr>
													<th></th>
													<th ></th>
													<th class="titulo2">
														<div class="left">
															Online Estándar		
														</div>
													</th>
													<th class="titulo2 clases-vivo">
														<div class="right">
															Online con Clases en Vivo		
														</div>
													</th>
													<th class="titulo2">
														<div class="right">
															Semipresencial		
														</div>
													</th>
													<!-- <th class="titulo2">
														<div class="right">
															Presencial		
														</div>
													</th> -->
												</tr>
											</thead>
											<tbody>
												<tr class="detalle1">
													<td rowspan="3"></td>
													<td class="detalle">Clases online con contenido<br /> de Cambridge University Press</td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?> </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<!-- <td class="check"></td> -->
												</tr>
												<tr class="detalle1">
													<td class="detalle">Clases Presenciales</td>
													<td></td>
													<td></td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td> -->
												</tr>
												<tr class="detalle1">
													<td class="detalle">Profesores Particulares</td>
													<td></td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td> -->
												</tr>
												<tr class="detalle2">
													<td class="rotacion" rowspan="4" style="width: 10px;">
														<p>Habilidades</p>
													</td>
													<td class="detalle">Listening</td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td> -->
												</tr>
												<tr class="detalle2">
													<td class="detalle">Reading</td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td> -->
												</tr>
												<tr class="detalle2">
													<td class="detalle">Writing</td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td> -->
												</tr>
												<tr class="detalle2">
													<td class="detalle">Speaking</td>
													<td></td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?>  </td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?> </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-2.png'); ?> </td> -->
												</tr>
												<tr class="detalle1">
													<td></td>
													<td class="detalle">Student Book</td>
													<td></td>
													<td></td>
													<td class="check"> <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td>
													<!-- <td class="check"> <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/ticket-1.png'); ?>  </td> -->

												</tr>
												<tr class="detalle1">
													<td></td>
													<td class="detalle">Duración </td>
													<td class="check">16 semanas</td>
													<td class="check">16 semanas</td>
													<td class="check">16 semanas</td>
													<!-- <td class="check">11 a 31 semanas</td> -->
												</tr>
												<tr class="detalle1">
													<td></td>
													<td class="detalle">Valor Cliente Bci Empresarios</td>
													<td class="check"><strong>$200.000</strong></td>
													<td class="check"><strong>$270.000</strong></td>
													<td class="check"><strong>$500.000</strong></td>
													<!-- <td class="check"><strong>$1.260.000</strong></td> -->
												</tr>
												<tr class="detalle1">
													<td></td>
													<td class="detalle">Valor referencial</td>
													<td class="check">$290.000</td>
													<td class="check">$360.000</td>
													<td class="check">$580.000</td>
													<!-- <td class="check">$1.480.000</td> -->
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Cursos de Inglés por nivel<span class="division-right"></span>
						</div>
						<div class="subtitulo">
							<p>Estudia según tu nivel de inglés y mejora tus hablidades en el idioma</p>
						</div>
					</div>
					<div class="row">
						<div class="niveles-estudio">
							<div class="row-fluid">
								<div id="carousel-example-generic" class="carousel slide nivel" data-ride="carousel">
								  <!-- Indicators -->
									<ol class="carousel-indicators">
									    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">1</li>
									    <li data-target="#carousel-example-generic" data-slide-to="1">2</li>
									    <li data-target="#carousel-example-generic" data-slide-to="2">3</li>
									    <li data-target="#carousel-example-generic" data-slide-to="3">4</li>
									    <li data-target="#carousel-example-generic" data-slide-to="4">5</li>
									    <li data-target="#carousel-example-generic" data-slide-to="5">6</li>
									    <li data-target="#carousel-example-generic" data-slide-to="6">7</li>
								  	</ol>

								  <!-- Wrapper for slides -->
								  	<div class="carousel-inner" role="listbox">
								    	<div class="item active">
								      		<div class="texto-descripcion">
									      		<p>
									      			<span class="titulo-level">Level 1: Basic</span><br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel conocerás los aspectos esenciales para desenvolverte en situaciones de habla inglesa.
													Por ejemplo, podrás saludar y despedirte en situaciones informales usando el lenguaje de manera adecuada. <br />
									      		</p>
									      	</div>
								     	</div>
									    <div class="item">
									     	<div class="texto-descripcion">
									     		<p>
										      		<span class="titulo-level">Level 2: Beginner</span> <br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel aprenderás herramientas útiles y nuevas habilidades para manejar el idioma inglés. Por ejemplo, podrás hablar sobre tareas del día a día, planear un viaje por la ciudad y leer un email personal y extraer información detallada.<br />
										      	</p>
									     	</div> 	
									    </div>
									    <div class="item">
									      	<div class="texto-descripcion">
										      	<p>
										      		<span class="titulo-level">Level 3: Lower Intermediate</span> <br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel podrás aprender herramientas útiles para manejar el idioma inglés en situaciones del día a día. Por ejemplo, podrás leer textos sacando conclusiones de ellos, escuchar una conversación extrayendo información específica y usar expresiones cotidianas en una conversación. <br />
										      	</p>
										    </div>
									    </div>
									    <div class="item">
									      	<div class="texto-descripcion">
										      	<p>
										      		<span class="titulo-level">Level 4: Intermediate</span> <br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel aprenderás nuevas habilidades para mejorar tu nivel de inglés y así mejorar tu dominio del idioma. Para lograr estos objetivos, durante el curso podrás leer artículos identificando los tiempos verbales y así aplicarlo al escribir un artículo de actualidad. <br />
										      	</p>
										    </div>
									    </div>
									    <div class="item">
									      	<div class="texto-descripcion">
										      	<p>
										      		<span class="titulo-level">Level 5: Upper Intermediate</span> <br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel aprenderás las herramientas para mejorar tu nivel de manejo del idioma en temas y situaciones desconocidas. Por ejemplo, podrás escribir un resumen de un artículo de noticias usando voz pasiva, leer un artículo y opinar, además de narrar eventos complejos de tu experiencia. <br />
										      	</p>
									      	</div>
									    </div>
									    <div class="item">
									      	<div class="texto-descripcion">
										      	<p>
										      		<span class="titulo-level">Level 6: Advanced</span><br />

													<span class="titulo-capital">OBJETIVOS GENERALES</span> <br />
													En este nivel conocerás herramientas esenciales para el manejo del idioma tanto en el día a día como en situaciones laborales. Durante el curso, aprenderás a discutir dando tu opinión con respecto a un tema, leer y comprender sobre temas específicos, como por ejemplo, el deporte o culturas corporativas.<br />
										      	</p>
									      	</div>
									    </div>
									    <div class="item">
									      	<div class="texto-descripcion">
										      	<p>
										      		<span class="titulo-level">Level 7: Expert</span><br />

													<span class="titulo-capital">OBJETIVOS GENERALES </span> <br />
													En este nivel aprenderás herramientas esenciales para el manejo del idioma tanto en el día a día como en situaciones laborales y en contextos desconocidos. Durante el curso, aprenderás a usar un lenguaje natural en conversaciones informales, discutir dando tu opinión con respecto a un tema y tomar apuntes en una charla.<br />
										      	</p>
									      	</div>
									    </div>
								    </div>
								    <!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									    <span class="fa fa-angle-left" aria-hidden="true"></span>
									    <span class="sr-only"><</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									    <span class="fa fa-angle-right" aria-hidden="true"></span>
									    <span class="sr-only">></span>
									</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row">
						<div class="btn-postula">
							<?php echo $html->link('POSTULA <i class="fa fa-chevron-right"></i>', 'javascript:', array('escape' => false, 'title' => 'Postula', 'class' => 'contact')); ?>
						</div>
					</div>
					<!-- <div class="row">
						<div class="titulo">
							<span class="division-left"></span>Cursos de Inglés Específicos<span class="division-right"></span>
						</div>
						<div class="subtitulo">
							<p>Aplica tus conocimientos del idioma y certifica tu nivel de inglés</p>
						</div>
					</div>
					<div class="row">
						<div class="cursos-especificos">
							<div class="comercio-exterior span3">
								<p>Inglés para <br> el comercio exterior comex</p>
								<div class="btn-ingles btn-comercio">
									<?php //echo $html->link(__('VER MÁS <i class="fa fa-chevron-right"></i>', true), '#!comercio-exterior', array('data-target' => 'comercio-exterior', 'title' => 'Ver Más', 'escape' => false, 'class' => 'btn-ingles-1 btn-comercio'));?>
								</div>
							</div>
							<div class="toeic span3">
								<p>Inglés para <br> preparación toeic</p>
								<div class="btn-ingles btn-toeic">
									<?php //echo $html->link(__('VER MÁS <i class="fa fa-chevron-right"></i>', true), '#!preparacion-toeic', array('data-target' => 'preparacion-toeic', 'title' => 'Ver Más', 'escape' => false, 'class' => 'btn-ingles-1 btn-toeic'));?>
								</div>
							</div>
							<div class="conversation span3">
								<p>Conversation <br> coaching</p>
								<div class="btn-ingles btn-conversation">
									<?php //echo $html->link(__('VER MÁS <i class="fa fa-chevron-right"></i>', true), '#!conversation-coaching', array('data-target' => 'conversation-coaching', 'title' => 'Ver Más', 'escape' => false, 'class' => 'btn-ingles-1 btn-conversation'));?>
								</div>
							</div>
							<div class="toefl span3">
								<p>Inglés para <br> preparación toefl</p>
								<div class="btn-ingles btn-toefl">
									<?php //echo $html->link(__('VER MÁS <i class="fa fa-chevron-right"></i>', true), '#!preparacion-toefl', array('data-target' => 'preparacion-toefl', 'title' => 'Ver Más', 'escape' => false, 'class' => 'btn-ingles-1 btn-toefl'));?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="detalle-curso">
							<div class="ingles-comercio-exterior" data-tab="comercio-exterior">
								<div class="img-curso span3">
									<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/curso-comercio.png', array('alt' => '', 'width' => 169 , 'height' => 169 , 'class' => '' ));?>
									<p class="titulo-cuadro">Inglés para <br> Comercio Exterior Comex</p>
								</div>
								<div class="informacion-curso span9">
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> Objetivos del Curso:</h1>
									</div>
									<div class="info-objetivos">
										<p>
											En este curso se te entregarán las herramientas para comprender y usar vocabulario y frases comunes para comunicarte efectivamente con clientes y contrapartes internacionales relacionadas al mundo del comercio exterior.
										</p>
									</div>
									<div class="titulo-precio">
										<i class="fa fa-caret-right"></i><h3>Precio: $612.000</h3>
									</div>
									<div class="clear">
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> Aprenderás vocabulario técnico y sabrás aplicarlo en las 4 áreas del lenguaje:</h1>
									</div>
									<div class="vocabulario-tecnico span12">
										<div class="speaking span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/speaking.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>Speaking</span><br>
												Comunicarse verbalmente utilizando vocabulario casual, formal y técnico.
											</p>
										</div>
										<div class="reading span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/reading.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>reading</span><br>
												Leer y comprender vocabulario específico de comercio exterior.
											</p>
										</div>
										<div class="listening span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/listening.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>listening</span><br>
												Comprender lenguaje y vocabulario casual, formal y técnico.
											</p>
										</div>
										<div class="writing span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/writing.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>writing</span><br>
												Comprender lenguaje y vocabulario usado internacionalmente.
											</p>
										</div>
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> CURSO PRESENCIAL DE 14 SEMANAS DE DURACIÓN</h1>
									</div>
									<div class="curso-presencial span10">
										<div class="clases-online span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/note.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>
												Clases<br> Online
											</p>
										</div>
										<div class="clases-particulares span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/user.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>
												Clases <br> Particulares
											</p>
										</div>
										<div class="examen-final span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/check.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>
												Examen<br> final COMEX
											</p>
										</div>
										<div class="requisito span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/requisito2.jpg', array('alt' => '', 'width' => 138 , 'height' => 138 , 'class' => '' ));?>
										</div>
									</div>
									<div class="unidades span10">
										<div class="unidad span1">
											<p>11 unidades</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="sesiones span1">
											<p>11 sesiones</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="examen span1">
											<p>1 examen</p>
										</div>
									</div>
								</div>
							</div>
							<div class="ingles-toeic hide" data-tab="preparacion-toeic">
								<div class="img-curso span3">
									<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/curso-toeic.png', array('alt' => '', 'width' => 169 , 'height' => 169 , 'class' => '' ));?>
									<p>Inglés para <br> Preparación TOEIC</p>
								</div>
								<div class="informacion-curso span9">
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> Objetivos del Curso:</h1>
									</div>
									<div class="info-objetivos">
										<p>
											Durante el curso de preparación TOEIC (Test of English for International Comunication) conocerás el formato, contenido y temas del examen para poder enfrentarlo de mejor manera. <br>
											Este examen te entregará un puntaje estandarizado para evaluar el dominio del inglés internacionalmente.
										</p>
									</div>
									<div class="titulo-precio">
										<i class="fa fa-caret-right"></i><h3>Precio: $660.000</h3>
									</div>
									<div class="clear">
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1>Curso Semipresencial de 12 semanas de duración</h1>
									</div>
									<div class="curso-semipresencial span10">
										<div class="clases-online span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/note.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p> Clases <br> Online</p>
										</div>
										<div class="clases-particulares span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/user.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>Clases <br> Particulares</p>
										</div>
										<div class="toeic span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/text.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>Practice <br> TOEIC</p>
										</div>
										<div class="examen-toeic span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/check.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>Ecamen <br> final TOEIC</p>
										</div>
										<div class="requisito span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/requisito3.jpg', array('alt' => '', 'width' => 138 , 'height' => 138 , 'class' => '' ));?>
										</div>
									</div>
									<div class="metodologia span10">
										<div class="unidades span1">
											<p>11 unidades</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="sesiones span1">
											<p>11 sesiones</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="sesiones-toeic span1">
											<p>2 sesiones</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="examen span1">
											<p>1 examen</p>
										</div>
									</div>
									<div class="info-objetivos">
										<p>
											Contenido online de Cambridge University Press y profesores certificados en enseñanza en tu oficina<br> o en nuestras sedes eClass.
										</p>
									</div>
								</div>
							</div>
							<div class="ingles-conversation hide" data-tab="conversation-coaching">
								<div class="img-curso span3">
									<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/curso-conversation.png', array('alt' => '', 'width' => 169 , 'height' => 169 , 'class' => 'visible-lg visible-sm visible-md' ));?>
									<p>Conversation <br> Coaching</p>
								</div>
								<div class="informacion-curso span9">
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> Objetivos del Curso:</h1>
									</div>
									<div class="info-objetivos">
										<p>
											En este curso mejorarás la fluidez a través de clases personalizadas de conversación, según tus necesidades y áreas de interés.
										</p>
									</div>
									<div class="titulo-precio">
										<i class="fa fa-caret-right"></i><h3>Precio: $630.000</h3>
									</div>
									<div class="clear">
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1>Podrás desarrollarte en el idioma fortaleciendo las siguientes habilidades:</h1>
									</div>
									<div class="habilidades">
										<div class="listening span4">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/listening.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>Listening</span><br>
												Comprender lenguaje y vocabulario <br>
												casual, formal y técnico.
											</p>
										</div>
										<div class="speaking span4">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/speaking.jpg', array('alt' => '', 'width' => 37 , 'height' => 37 , 'class' => '' ));?>
											<p>
												<span>Speaking</span><br>
												Comunicarse verbalmente utilizando <br>
												vocabulario casual, formal y técnico.
											</p>
										</div>
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1>CURSO PRESENCIAL DE 15 SEMANAS DE DURACIÓN</h1>
									</div>
									<div class="curso-presencial">
										<div class="clases-particulares span5">
											 <?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/user.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											 <p>
											 	Clases <br>
											 	Particulares
											 </p>
											 <p class="letra-gris">
											 	15 sesiones de conversación de 75 min. c/u
											 </p>
											 <p class="texto-gris">
											 	Pon en práctica tus conocimientos y mejora tu fluidez. <br>
												Aprende con profesores certificados en enseñanza en tu <br>
												oficina o en nuestras sedes eClass.
											 </p>
										</div>
										<div class="requisito4">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/requisito4.jpg', array('alt' => '', 'width' => 138 , 'height' => 138 , 'class' => '' ));?>
										</div>
									</div>
								</div>
							</div>
							<div class="ingles-toefl hide" data-tab="preparacion-toefl">
								<div class="img-curso span3">
									<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/curso-toefl.png', array('alt' => '', 'width' => 169 , 'height' => 169 , 'class' => 'visible-lg visible-sm visible-md' ));?>
									<p>Inglés para <br> Preparación Toefl</p>
								</div>
								<div class="informacion-curso span9">
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1> Objetivos del Curso:</h1>
									</div>
									<div class="info-objetivos">
										<p>
											Durante el curso de preparación TOEFL (Test of English as a Foreing Language) conocerás el formato, contenido y temas del examen para poder enfrentarlo de mejor manera. <br>
											Este examen está pensado en quienes están buscando estudiar en el extranjero y deben acreditar su nivel de inglés. <br>
											A este curso se le debe dedicar mucho tiempo de estudio fuera de clases, ya que es de un alto nivel de exigencia.
										</p>
									</div>
									<div class="titulo-precio">
										<i class="fa fa-caret-right"></i><h3>Precio: $600.000</h3>
									</div>
									<div class="clear">
									</div>
									<div class="titulo-objetivos">
										<i class="fa fa-caret-right"></i><h1>Curso Presencial de 15 semanas de duración</h1>
									</div>
									<div class="curso-presencial">
										<div class="clases-grupales span3">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/users.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>Clases grupales de <br>máximo 6 alumnos</p>
										</div>
										<div class="clases-particulares span3">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/user.jpg', array('alt' => '', 'width' => 41 , 'height' => 41 , 'class' => '' ));?>
											<p>Clases <br> Particulares</p>
										</div>
										<div class="requisito5 span2">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/requisito5.jpg', array('alt' => '', 'width' => 138 , 'height' => 138 , 'class' => '' ));?>
										</div>
									</div>
									<div class="sesiones span9">
										<div class="sesion30 span3">
											<p>30 sesiones de 90 min. c/u</p>
										</div>
										<div class="plus span1">
											<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/plus.jpg', array('alt' => '', 'width' => 23 , 'height' => 23 , 'class' => '' ));?>
										</div>
										<div class="sesion2 span3">
											<p>2 sesiones</p>
										</div>
									</div>
									<div class="texto-info">
										<p>
											Aprende con profesores certificados en enseñanza en nuestras sedes eClass.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="row">
						<div class="btn-postula">
							<?php //echo $html->link('POSTULA <i class="fa fa-chevron-right"></i>', 'javascript:', array('escape' => false, 'title' => 'Postula', 'class' => 'contact')); ?>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$script.ready('jquery', function(){
    	$(function() {
			$('[data-tab]:first-child').show(0,function(){
				$('[data-target=' + $(this).attr('data-tab') + ']').addClass('current');
			});
			$(document).on('click', '[data-target]', function(element){

				//element.preventDefault();
				$('[data-target].current').removeClass('current');
				$('[data-tab]:visible').hide();
				var target = $(this).addClass('current').attr('data-target');
				$('[data-tab=' + target + ']').show();
				$('[data-tab=' + target + ']').removeClass('hide');
				$(this).addClass('current')
			});
			fragment = document.location.hash;
			if (fragment.length) {
				$('[data-target=' + fragment.replace('#!', '') + ']').click();
			} else {
				$('[data-target=comercio-exterior]').click();
			}
		});
		$('.contact').click(function() {
			$('html, body').animate({scrollTop: 0}, 1000);
		});
	});
	

</script>
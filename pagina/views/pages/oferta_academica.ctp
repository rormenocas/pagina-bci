<?php $this->pageTitle = 'Cursos'?>
<div class="banner">
	<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner_aula.png', array('alt' => 'Bienvenido a Aula Digital Empresarios 2015 | Apoyamos tus sueños en cada eta de tu negocio | Los mejores cursos de perfeccionamiento para el éxito de tu Pyme', 'width' => 1440 , 'height' => 322 , 'class' => 'banner-cambiante' ));?>
</div>
<div class="home">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="menu-cursos">
							<ul class="unstyled">
								<li>
									<?php echo $html->link(
											__('CURSOS DE PRODUCTOS Y SERVICIOS Bci', true), '#!productos-servicios', array('data-target' => 'productos-servicios', 'title' => 'Cursos de Productos y Servicios', 'escape' => false, 'class' => 'btn-cursos btn-productos'));?>
								</li>
								<li>
									<?php echo $html->link(
											__('CURSOS DE DESARROLLO PROFESIONAL', true), '#!desarrollo-profesional',array('data-target' => 'desarrollo-profesional', 'title' => 'Cursos de Desarrollo Profesional', 'escape' => false, 'class' => 'btn-cursos btn-desarrollo'));?>
								</li>
								<li>
									<?php echo $html->link(
											__('CURSOS NEGOCIOS E INGLÉS', true), '#!negocios-ingles' ,array('data-target' => 'negocios-ingles', 'title' => 'Cursos Negocios e Inglés', 'escape' => false, 'class' => 'btn-cursos btn-ingles'));?>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="cursos-productos-servicios" data-tab="productos-servicios">
							<div class="titulo">
								<span class="division-left"></span>Cursos Productos y Servicios Bci<span class="division-right"></span>
							</div>
							<div class="texto-informacion">
								<p>En esta sección ponemos a tu disposición información didáctica para que conozcas y entiendas mejor los productos y servicios que Banco Bci pone a tu disposición para potenciar y gestionar de mejor manera tu negocio <span>¡Aprovéchalos!</span></p>
							</div>
							<div class="cursos-disponibles">
								<p>
									Cursos siempre disponibles
								</p>
							</div>
							<div class="row">
								<div class="cursos1 span12">
									<div class="comercio span6">
										<div class="titulo-caja">
											<p>
												Comercio Exterior: <br>
												Comex
											</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Entérate de las principales implicancias <br>
												del intercambio de bienes y <br>
												servicios en el mercado internacional.
											</p>
										</div>
										<div class="btn-custom btn3">										
											<?php echo $html->link('IR AL CURSO <i class="fa fa-chevron-right"></i>', $urlCampus, array('escape' => false, 'title' => 'VER MÁS', 'target' => 'blank', 'class' => 'ir-plat')); ?>
										</div>
									</div>
									<div class="fogain span6">
										<div class="titulo-caja">
											<p>
												Garantías Estatales: <br>
												Fogain/Fogape
											</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Infórmate sobre las garantías<br>
												que otorga el Estado relacionados con<br>
												su rol de subsidiario.
											</p>
										</div>
										<div class="btn-custom btn2">
											<?php echo $html->link('IR AL CURSO <i class="fa fa-chevron-right"></i>', $urlCampus, array('escape' => false, 'title' => 'VER MÁS', 'target' => 'blank', 'class' => 'ir-plat')); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="cursos2 span12">
									<div class="factoring span6">
										<div class="titulo-caja">
											<p>
												FACTORING
											</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Conoce los usos y funcionamientos de<br>
												este instrumento de financiación<br>
												a corto plazo destinado a<br>
												todo tipo de empresas.
											</p>
										</div>
										<div class="btn-custom btn2">
											<?php echo $html->link('IR AL CURSO <i class="fa fa-chevron-right"></i>', $urlCampus, array('escape' => false, 'title' => 'VER MÁS', 'target' => 'blank', 'class' => 'ir-plat')); ?>
										</div>
									</div>
									<div class="leasing span6">
										<div class="titulo-caja">
											<p>
												Leasing
											</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Comprende cómo a través de un contrato
												de arrendamiento de bienes de equipos,
												se presenta la opción de compra <br>
												por parte del arrendatario.
											</p>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('IR AL CURSO <i class="fa fa-chevron-right"></i>', $urlCampus, array('escape' => false, 'title' => 'VER MÁS', 'target' => 'blank', 'class' => 'ir-plat')); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="banner-pdf">
									<p>Manual de uso de <br> <span>mi aula digital</span></p>
									<div class="btn-descarga">
										<?php echo $html->link('DESCARGAR MANUAL <i class="fa fa-chevron-right"></i>', Configure::read('App.static') . '/apps/pagina_aulabci/files/manual-uso.pdf', array('escape' => false, 'title' => 'Descargar Manual', 'class' => '',  'target' => '_blank')); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="cursos-desarrollo-profesional hide" data-tab="desarrollo-profesional">
							<div class="titulo">
								<span class="division-left"></span>Cursos de Desarrollo Profesional<span class="division-right"></span>
							</div>
							<div class="texto-informacion desarrollo">
								<p class="informacion-desarrollo">Estos cursos tienen fecha de inicio fija y necesitan inscripción previa para que puedas participar</p>
							</div>
							<div class="row">
								<div class="cursos1 span12">
									<div class="administrar span6">
										<div class="titulo-caja">
											<p>
												Cómo Administrar <br>
												tu negocio
											</p>
										</div>
										<div class="fecha-inicio">
											<p>SIN CUPOS</p>
										</div>
										<div class="link-descarga">
											<?php echo $html->link('Descargar descriptor de Curso', Configure::read('App.static') . '/apps/pagina_aulabci/files/como-administrar-negocio.pdf', array('escape' => false, 'title' => 'Descargar Descriptor', 'class' => '', 'target' => '_blank')); ?>
										</div>
										<div class="explicacion-caja">
											<p>
												Este curso tiene como objetivo fortalecer las capacidades de gestión de pequeños y medianos empresarios, y personas interesadas en emprender. A través de este curso se busca apoyar en la toma de decisiones y en la gestión de las pequeñas y medianas empresas.
											</p>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('INSCRÍBETE <i class="fa fa-chevron-right"></i>', '#', array('escape' => false, 'title' => 'VER MÁS', 'data-toggle' => 'modal', 'data-target' => '#inscripcion',  'data-dismiss' => 'modal' )); ?>
										</div>
									</div>
									<div class="ventas-negocios span6">
										<div class="titulo-caja">
											<p>
												Cómo Aumentar <br>
												Las ventas de tu negocio
											</p>
										</div>
										<div class="fecha-inicio">
											<p>SIN CUPOS</p>
										</div>
										<div class="link-descarga">
											<?php echo $html->link('Descargar descriptor de Curso ', Configure::read('App.static') . '/apps/pagina_aulabci/files/como-aumentar-ventas.pdf', array('escape' => false, 'title' => 'Descargar Descriptor', 'class' => '', 'target' => '_blank')); ?>
										</div>
										<div class="explicacion-caja">
											<p>
												Este curso entrega los conocimientos necesarios para enfrentar una venta exitosa en el contexto de una Pyme. Los participantes identificarán las fases de una venta, conocerás las técnicas más usadas en el mercado internacional y aprenderán a aplicarlas para concretar la venta del servicio que ellos ofrecen.
											</p>
										</div>
										<div class="btn-custom btn1">
											<?php echo $html->link('INSCRÍBETE <i class="fa fa-chevron-right"></i>', '#', array('escape' => false, 'title' => 'VER MÁS', 'data-toggle' => 'modal', 'data-target' => '#inscripcion',  'data-dismiss' => 'modal' )); ?>
										</div>
									</div>
								</div>
								<div class="desarrollo-pro span12">
									<div class="coordinadora txt span4">
										<p>
											Una coordinadora académica <br>
											te acompañará en todo<br>
											tu proceso de estudio</p>
									</div>
									<div class="tus-dudas txt span4">
										<p>
											Tus dudas serán respondidas  <br>
											en la plataforma por tus <br>
											profesores y ayudantes
										</p>
									</div>
									<div class="soporte-tecnico txt span4">
										<p>
											Cuenta con un equipo de <br>
											soporte técnico para resolver <br>
											cualquier inconveniente
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="banner-pdf">
									<p>Manual de uso de <br> <span>mi aula digital</span></p>
									<div class="btn-descarga">
										<?php echo $html->link('DESCARGAR MANUAL <i class="fa fa-chevron-right"></i>', Configure::read('App.static') . '/apps/pagina_aulabci/files/manual-uso.pdf', array('escape' => false, 'title' => 'Descargar Manual', 'class' => '',  'target' => '_blank')); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="cursos-negocios-ingles hide" data-tab="negocios-ingles">
							<div class="titulo">
								<span class="division-left"></span>¡Sigue Perfeccionándote! <span class="division-right"></span>
							</div>
							<div class="texto-informacion ingles">
								<p class="informacion-ingles">
									Disfruta de los precios preferenciales que Bci tiene para ti. <br>
									Por ser Cliente Bci Empresario, te ofrecemos descuentos en cursos de Negocios @UAI, certificados <br> por la U. Adolfo Ibáñez; y en cursos de inglés eClass, para que estudies con la excelencia <br> y flexibilidad  que necesitas.
								</p>
							</div>
							<div class="row">
								<div class="cursos1 span12">
									<div class="eclass-uai span6">
										<div class="titulo-caja">
											<p>
												@UAI <br>
												Cursos certificados <br>
												U. Adolfo Ibáñez
											</p>
										</div>
										<div class="fecha-inicio">
											<p>Precio Preferencial</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Estudia con los que más saben de<br>
												negocios en Latinoamérica. <br>
												Cursos online y semipresenciales<br>
												certificados por la Universidad Adolfo Ibáñez.
											</p>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('VER MÁS <i class="fa fa-chevron-right"></i>', 'http://auladigital.eclass.cl/', array('escape' => false, 'title' => 'VER MÁS')); ?>
										</div>
									</div>
									<div class="eclass-ingles span6">
										<div class="titulo-caja">
											<p>
												<span class="letra-normal">eClass<span> <br>
												CURSOS DE INGLÉS
											</p>
										</div>
										<div class="fecha-inicio">
											<p>Precio Preferencial</p>
										</div>
										<div class="explicacion-caja">
											<p>
												Aprende inglés de verdad.<br>
												Estudia con profesores certificados <br>
												y el contenido online de <br>
												Cambridge University Press. <br>
												Conéctate donde quieras y cuando quieras.
											</p>
										</div>
										<div class="btn-custom btn1">
											<?php echo $html->link('VER MÁS <i class="fa fa-chevron-right"></i>', '/oferta_ingles', array('escape' => false, 'title' => 'VER MÁS')); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="titulo">
								<span class="division-left"></span>Somos expertos en Educación Flexible <span class="division-right"></span>
							</div>
							<div class="texto-informacion ingles">
								<p class="informacion-ingles">Elige tu ritmo y lugar de estudio. Clases Online + Clases Presenciales.</p>
							</div>
							<div class="row">
								<div class="educacion-flexible span12">
									<div class="span2 texto1 metodologia">
										<p>Metodología <br> Semipresencial</p>
									</div>
									<div class="span3 texto2 enfoque">
										<p>Enfoque práctico: contenido <br> actualizado y casos aplicados</p>
									</div>
									<div class="span3 texto1 cobertura">
										<p>Amplia Cobertura <br> Geográfica</p>
									</div>
									<div class="span2 texto2 equipo">
										<p>Equipo de <br> servicio</p>
									</div>
									<div class="span2 texto1 docente">
										<p>Cuerpo docente <br> de excelencia</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="banner-pdf">
									<p>Manual de uso de <br> <span>mi aula digital</span></p>
									<div class="btn-descarga">
										<?php echo $html->link('DESCARGAR MANUAL <i class="fa fa-chevron-right"></i>', Configure::read('App.static') . '/apps/pagina_aulabci/files/manual-uso.pdf', array('escape' => false, 'title' => 'Descargar Manual', 'class' => '',  'target' => '_blank')); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->element('modal-inscripcion') ?>
<div class="banner-foot-oferta" style="display: none;">
	<div class="btn-informacion">
		<?php echo $html->link('MÁS INFORMACIÓN', 'https://ww3.bci.cl/valorempresario', array('escape' => false, 'title' => 'MÁS INFORMACIÓN', 'target' => '_blank')); ?>
	</div>
</div>
<?php echo $this->element('modal-login');?>
<script type="text/javascript">
	$script.ready('jquery', function(){
    	$(function() {
    		appstatic = '<?php echo Configure::read('App.static'); ?>';
			$('[data-tab]:first-child').show(0,function(){
				$('[data-target=' + $(this).attr('data-tab') + ']').addClass('current');
			});
			var sess = "<?php echo $this->Session->read('Usuario-BCI'); ?>"

			if(!sess) {
					$('.ir-plat').on('click', function(e) {
						//<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
						console.log($(this));
						$(this).attr('href', '#login');
						$(this).attr('data-toggle', 'modal');
						$(this).attr('role', 'button');
					});
			}

			$(document).on('click', '[data-target]', function(element){

				//element.preventDefault();
				$('[data-target].current').removeClass('current');
				$('[data-tab]:visible').hide();
				var target = $(this).addClass('current').attr('data-target');
				$('[data-tab=' + target + ']').show();
				$('[data-tab=' + target + ']').removeClass('hide');
				$(this).addClass('current')
				if(target == "productos-servicios") {
					$('.banner-foot-oferta').hide();
				}else {
					$('.banner-foot-oferta').show();
				}
				if(target == "desarrollo-profesional") {
					$('.btn-informacion').show();
					$('.banner-foot-oferta').show();
					$('.banner-foot-oferta').attr('style', 'background-image: url("' + appstatic +  '/apps/pagina_aulabci/img/banners/valor-empresario.jpg"); display: block;');
				}else {
					$('.btn-informacion').hide();
				}
				if(target == "negocios-ingles") {
					$('.banner-cambiante').attr('src', '' + appstatic +  "/apps/pagina_aulabci/img/banners/banner-cursoseclass.png");
				}

			});
			fragment = document.location.hash;
			if (fragment.length) {
				$('[data-target=' + fragment.replace('#!', '') + ']').click();
			} else {
				$('[data-target=productos-servicios]').click();
			}



			$('.btn-ingles').on('click', function(){
				$('.banner-cambiante').attr('src', '' + appstatic +  "/apps/pagina_aulabci/img/banners/banner-cursoseclass.png");
				$('.banner-foot-oferta').attr('style', 'background-image: url("' + appstatic +  '/apps/pagina_aulabci/img/banners/cursos-eclass.png"); display: block;background-size: cover; ');
				$('.btn-informacion').hide();
			});
			$('.btn-productos').on('click', function(){
				$('.banner-cambiante').attr('src', '' + appstatic +  "/apps/pagina_aulabci/img/banners/banner_aula.png");
				$('.boton-footer').show();
				$('.banner-foot-oferta').hide();
			});
			$('.btn-desarrollo').on('click', function(){
				$('.banner-cambiante').attr('src', '' + appstatic +  "/apps/pagina_aulabci/img/banners/banner_aula.png");
				$('.banner-foot-oferta').attr('style', 'background-image: url("' + appstatic +  '/apps/pagina_aulabci/img/banners/valor-empresario.jpg"); display: block; ');
				$('.btn-informacion').hide();
			});
			$('#inscripcion').on('hidden.bs.modal', function () {
				location.reload();
			})

		});
	});

</script>

<?php $this->pageTitle = '¿Qué es Aula Digital?'?>
<div class="banner">
	<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner_aula.png', array('alt' => 'Bienvenido a Aula Digital Empresarios 2015 | Apoyamos tus sueños en cada eta de tu negocio | Los mejores cursos de perfeccionamiento para el éxito de tu Pyme', 'width' => 1440 , 'height' => 322 , 'class' => 'visible-lg visible-sm visible-md' ));?>
</div>
<div class="home">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>¿Qué es Aula Digital Empresarios?<span class="division-right"></span>
						</div>
					</div>
					<div class="row">
						<div class="sobre-aula">
							<p>
								Aula Digital Empresarios es una plataforma online diseñada exclusivamente para Clientes Bci Empresarios, que además de ayudarte a sacar un máximo provecho de todos los productos y servicios ofrecidos por el banco, pone a tu disposición contenido valioso y herramientas útiles para gestionar de la mejor manera tu negocio y potenciar su crecimiento. Disfruta la flexibilidad e interactividad que te ofrece Aula Digital Empresarios. 
								Aprende a tu propio ritmo y accede con total libertad al contenido de cursos las 24 horas del día, los 7 días de la semana.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Para potenciar la gestión de tu Pyme,<span class="division-right"></span><br>
							ponemos a tu disposición cursos en diversas temáticas como:
						</div>
					</div>
					<div class="row">
						<div class="link-cursos span12">
							<div class="span3 link1">
								<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/aula-digital/productos.png', array('alt' => '', 'class' => '')), $html->url('/oferta_academica#!productos-servicios', true), array('title' => '', 'escape' => false));?> <br>
								<?php echo $html->link('Cursos de <br> <strong>Productos y Servicios</strong>', '/oferta_academica#!productos-servicios', array('escape' => false, 'title' => 'Productos y Servicios')); ?>
							</div>
							<div class="span3 link1">
								<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/aula-digital/desarrollo.png', array('alt' => '', 'class' => '')), $html->url('/oferta_academica#!desarrollo-profesional', true), array('title' => '', 'escape' => false));?><br>
								<?php echo $html->link('Cursos de <br> <strong>Desarrollo Profesional</strong>', '/oferta_academica#!desarrollo-profesional', array('escape' => false, 'title' => 'Productos y Servicios')); ?>
							</div>
							<div class="span3 link2">
								<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/aula-digital/negocios.png', array('alt' => '', 'class' => '')), $html->url('/oferta_academica#!negocios-ingles', true), array('title' => '', 'escape' => false));?><br>
								<?php echo $html->link('Cursos de <br><strong> Negocios @UAI</strong>', '/oferta_academica#!negocios-ingles', array('escape' => false, 'title' => 'Productos y Servicios')); ?>
							</div>
							<div class="span3 link2">
								<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/aula-digital/ingles.png', array('alt' => '', 'class' => '')), $html->url('/oferta_academica#!negocios-ingles', true), array('title' => '', 'escape' => false));?><br>
								<?php echo $html->link('Cursos de <br><strong> Inglés</strong>', '/oferta_academica#!negocios-ingles', array('escape' => false, 'title' => 'Productos y Servicios')); ?>
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Aprovecha los beneficios de Aula Digital Empresarios<span class="division-right"></span>
						</div>
					</div>
					<div class="row">
						<div class="beneficios">
							<div class="span3 conoce">
								<p>Conoce <br> mejor tu Banco</p>
							</div>
							<div class="span3 herramientas">
								<p>Obtén herramientas <br> para potenciar tu negocio</p>
							</div>
							<div class="span3 disponibilidad">
								<p>Aprende a tu ritmo: <br> Plataforma disponible 24/7</p>
							</div>
							<div class="span3 clientes">
								<p>Beneficio exclusivo <br> clientes Bci</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Aprende a navegar en la plataforma<span class="division-right"></span>
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
<div class="banner-foot">
	<div class="btn-inscribete">
		<?php echo $html->link('INSCRÍBETE AQUÍ', 'http://www.bci.cl/empresarios/camino_del_emprendedor.html', array('escape' => false, 'title' => 'INSCRÍBETE AQUÍ', 'target' => '_blank')); ?>
	</div> 
</div>
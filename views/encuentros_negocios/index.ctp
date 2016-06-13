<?php $this->pageTitle = 'Encuentros de Negocios eClass'?>
<div class="banner">
	<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/encuentros/banner.jpg', array('alt' => 'Encuentros de Negocios e Innovación Grandes personajes comparten su experiencia y mirada a través de exposiciones memorables e inspiradoras', 'width' => 1440 , 'height' => 322 , 'class' => 'visible-lg visible-sm visible-md' ));?>
</div>
<div class="home">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="texto-invitacion">
							<p>
								Te invitamos, mes a mes, a hablar y debatir sobre lo que nos apasiona, ideas innovadoras, emprendimientos y grandes negocios, en charlas excepcionales que enriquecen a asistentes y espectadores y que nos invitan a repensar la sociedad y la actualidad.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Próximo encuentro<span class="division-right"></span>
						</div>
					</div>
					<div class="row">
						<div class="prox-encuentro">
							<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/encuentros/banner_edni.jpg', array('alt' => '', 'width' => 1229 , 'height' => 435 , 'class' => 'visible-lg visible-sm visible-md' ));?>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Videos encuentros anteriores<span class="division-right"></span>
						</div>
					</div>
					<div class="row">
						<div class="edni">
							<?php echo $this->element('edni/videos-anteriores'); ?>
						</div>
					</div>
					<div class="row">
						<div class="btn-custom">
							<?php echo $html->link('INSCRÍBETE AQUÍ <i class="fa fa-chevron-right"></i>', '/', array('escape' => false, 'title' => 'VER MÁS')); ?>
	
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
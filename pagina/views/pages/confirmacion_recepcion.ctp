<?php 
	$this->pageTitle = 'Gracias';
	$usuarioSess = $session->read('Usuario-BCI');
?>
<div class="gracias">
	<div class="banner-gracias">
        <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Logo.png', array('alt' => 'BIENVENIDO A Aula Digital Empresarios Una iniciativa Bci', 'class' => 'logo'));?>
	</div>
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="titulo">
							<h1>¡Ya estás inscrito!</h1>
						</div>
						<div class="mensaje">
							<p>
								Pronto te contactaremos
							</p>
						</div>
						<div class="aviso">
						</div>
						<div class="footer-gracias-confirmacion">
							<div class="btn-custom">
								<?php echo $html->link('CONTINUAR <i class="fa fa-chevron-right"></i>', '/inicio', array('escape' => false, 'title' => 'CONTINUAR')); ?>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

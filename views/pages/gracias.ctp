<?php 
	$this->pageTitle = 'Gracias';
	$this->layout = 'blank';
	$usuarioSess = $session->read('Usuario-BCI');
?>
<div class="gracias">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<div class="titulo">
							<h1>¡Hemos recibido tus datos con éxito!</h1>
						</div>
						<div class="aviso">
							Te doy la bienvenida a Aula Digital Empresarios, una plataforma de estudios que hemos desarrollado especialmente para poder entregarte herramientas que te ayuden a la gestión de tu negocio. Esta iniciativa busca complementar la oferta de valor del banco para poder entregarles soluciones integrales.<br />
							Esperamos que sea de tu agrado y puedas aprovecharla al máximo.<br /><br /><br />
							Saludos cordiales,<br />
							Juan Pablo Stefanelli<br />
							Gerente Banco Empresario - Bci

							<div class="datos">
								<p>
									Tu usuario y clave para ingresar a<br />
									Mi Aula Digital es:
								</p>
								<div class="informacion">
									<div class="info-usuario">
										<span class="usuario">Usuario: <?php echo $usuarioSess['Usuario']['Username'] . '-' . $usuarioSess['Usuario']['DV']; ?></span><br />
										<span class="password">Password: <?php echo $usuarioSess['Usuario']['Username']; ?></span>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="footer-gracias">
							<div class="btn-custom">
								<?php echo $html->link('CONTINUAR <i class="fa fa-chevron-right"></i>', '#', array('escape' => false, 'title' => 'CONTINUAR', 'id' => 'ir-inicio')); ?>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$script.ready('jquery', function() {
	$(document).on('ready', function() {
	    $('#ir-inicio').on('click', function() {
			event.preventDefault();
			window.top.location.href = "http://auladigitalbci.eclass.cl"; 
	    });
	    $('body', window.parent.document).find('.close-window').remove();
	});
});
</script>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login">
	<div class="modal-dialog" role="document">
		<div class="modal-header">
			<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Login-BCI_01.jpg', array('class' => 'linea'));?>
			<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Login-BCI_02.png', array('alt' => 'Próximo Encuentro de Negocios: Martes 6 de mayo | "Adelantándose a los deseos de los clientes"'));?>
		</div>
		<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div class="formulario">
				<div class="titulo">
					Ingrese RUT de tu empresa y tu RUT personal para entrar
					<?php $session->flash(); ?>
				</div>
				<div class="modal-body">
					<?php echo $form->create(null, array('url' => array('controller' => 'usuarios', 'action' => 'login'), 'class' => 'login')); ?>
					<div class="form-group">
							<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-suitcase"></i></div>
									<div class="input-group-addon info-empresa">RUT Empresa</div>
									<?php
											echo $form->input('Empresa.NumeroDocumento', array(
													'label' => false,
													'class' => 'Rut form-control',
													'required' => 'required',
													'placeholder' => 'RUT Empresa',
													'style' => 'width:260px; height: 30px;border: 1px solid #bdc3c7;border-radius: 0 5px 5px 0;',
													'after' => $form->input(
															'Empresa.DocumentoEmpresaDv', array(
																	'label' => false,
																	'class' => 'RutEmpresaDv form-control',
																	'maxlength' => 1,
																	'required' => 'required',
																	'placeholder' => 'DV',
																	'style' => 'height: 30px;
																					border: 1px solid #bdc3c7;
																					width: 40px;
																					position: absolute;
																					top: 0;
																					right: 0;
																					border-radius: 5px;'
															)
													)
											));
									?>
							</div>
					</div>
					<div class="form-group">
							<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<div class="input-group-addon info-persona">RUT Persona</div>
											<?php
													echo $form->input('Usuario.Username', array(
															'label' => false,
															'class' => 'RutPersona form-control',
															'required' => 'required',
															'placeholder' => 'RUT Persona',
															'style' => 'width: 263px; height: 30px;border: 1px solid #bdc3c7;border-radius: 0 5px 5px 0;',
															'after' => $form->input(
																	'Usuario.NumeroDocumentoDv', array(
																			'label' => false,
																			'class' => 'NumeroDocumentoDv form-control',
																			'maxlength' => 1,
																			'required' => 'required',
																			'placeholder' => 'DV',
																			'style' => 'height: 30px;
																							border: 1px solid #bdc3c7;
																							width: 40px;
																							position: absolute;
																							top: 0;
																							right: 0;
																							border-radius: 5px;'
																	)
															)
													));
											?>
							</div>
					</div>
			</div>
				<div class="form-group">
					<button type="submit" class="enviar">Entrar   <i class="fa fa-chevron-right"></i></button>
					<?php
						echo $form->end();
					?>
				</div>
			</div>
			<div class="opciones">
				<p class="pregunta">¿Eres nuevo?</p>
					<?php
						echo $html->link('Regístrate Aquí', '#', array('title' => 'Regístrate Aquí', 'escape' => false, 'class' => 'registrate', 'data-toggle' => 'modal', 'data-target' => '#registro',  'data-dismiss' => 'modal' ));
					?>
				<p class="clientes">Acceso sólo para clientes Pyme Bci</p>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

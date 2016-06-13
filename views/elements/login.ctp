
<div class="aula-digital-header">
	<div class="formulario-layout">
		<div class="titulo">
			<i class="fa fa-user"></i>
			Ingresa a tu plataforma
			<?php $session->flash(); ?>
		</div>
		<div class="modal-body">
			<?php echo $form->create(null, array('url' => array('controller' => 'usuarios', 'action' => 'login'), 'class' => 'login')); ?>
			<div class="form-group">
				<div class="input-group">
						<?php
							echo $form->input('Usuario.Username', array(
                                'label' => false,
                                'class' => 'RutPersona form-control',
                                'required' => 'required',
                                'placeholder' => 'RUT Persona',
                                'style' => 'width: 120px; margin-right: 43px; border: 1px solid #bdc3c7; height: 20px; font-size: 12px;',
                                'after' => $form->input(
                                    'Usuario.NumeroDocumentoDv', array(
                                        'label' => false,
                                        'class' => 'NumeroDocumentoDv form-control',
                                        'maxlength' => 1,
                                        'required' => 'required',
                                        'placeholder' => 'DV',
                                        'style' => 'height: 20px;
                                                border: 1px solid #bdc3c7;
                                                width: 40px;
                                                position: absolute;
                                                top: 0;
                                                right: 0;
                                                border-radius: 5px;
                                                font-size: 12px;'
                                    )
                                )
                            ));
						?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<?php
						echo $form->input('Empresa.NumeroDocumento', array(
                            'label' => false,
                            'class' => 'Rut form-control',
                            'required' => 'required',
                            'placeholder' => 'RUT Empresa',
                            'style' => 'width:120px; margin-right: 43px; border: 1px solid #bdc3c7; height: 20px; font-size: 12px;',
                            'after' => $form->input(
                                'Empresa.DocumentoEmpresaDv', array(
                                    'label' => false,
                                    'class' => 'RutEmpresaDv form-control',
                                    'maxlength' => 1,
                                    'required' => 'required',
                                    'placeholder' => 'DV',
                                    'style' => 'height: 20px;
                                            border: 1px solid #bdc3c7;
                                            width: 40px;
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            border-radius: 5px;
                                            font-size: 12px;'
                                )
                            )
                        ));
					?>
				</div>
			</div>
			<div class="opciones">
				<p class="pregunta">¿No estás registrado?</p>
				<?php
					echo $html->link('Regístrate >', '#', array('title' => 'Regístrate', 'escape' => false, 'class' => 'registrate', 'data-toggle' => 'modal', 'data-target' => '#registro',  'data-dismiss' => 'modal' ));
				?>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="enviar">Entrar   <i class="fa fa-chevron-right"></i></button>
			<?php
				echo $form->end();
			?>
		</div>

	</div>

</div>

<script type="text/javascript"></script>

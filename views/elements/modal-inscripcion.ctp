<style type="text/css">
	#ContactoCursoComoAumentarLasVentasDeTuNegocio {
		margin-left: 0px;
	}
	#info {
		font-size: 9px;
		text-align: right;
	}
	.error {
		color: #CC0000;
	}
</style>
<div class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="inscripcion">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="formulario">
				<div class="titulo">
				<?php $user = ($this->Session->read('Usuario-BCI')); ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<stron>Bci te invita a seguir perfeccionándote</stron><br/>
					<span>Estudia con la metodología online de eClass, en el momento y lugar que quieras</span><br />
					<?php $session->flash(); ?>
					<span class="error"></span>
				</div>
				<div class="modal-body">
					<?php echo $form->create(null, array('url' => array('controller' => 'inscripciones', 'action' => 'curso_perfeccionamiento', 'id' => 'AddForm'))); ?>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<div class="input-group-addon info">Nombres</div>
										<?php
											echo $form->input('Contacto.Nombres', array(
												'label' => false,
												'class' => 'Nombre form-control',
												'placeholder' => 'Nombres',
												'value' => $user['Persona']['Nombre']
											));
										?>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone-square"></i></div>
									<div class="input-group-addon info">Teléfono Fijo</div>
										<?php
											$telPais = '';
											$telArea = '2';
											$tel = '';
											if(!empty($user['Telefonos'][0]['Telefono'])) {
											 	$telPais = $user['Telefonos'][0]['Telefono']['Pais'];
												$telArea = $user['Telefonos'][0]['Telefono']['CodigoArea'];
												$tel = $user['Telefonos'][0]['Telefono']['Numero'];
											}
											echo $form->input(
												'Contacto.Telefono', 
												array(
													'type' => 'text',
													'placeholder' => 'Número',
													'value' => $tel,
													'between' => 
														$form->input(
															'Contacto.TelefonoArea', 
																array(
																	'class' => 'TelefonoArea', 
																	'maxlength' => 3, 
																	'div' => false, 
																	'label' => false,
																	'value' => $telArea,
																	'before' => $form->input(
																		'Contacto.TelefonoPais', array(
																			'value' => '56', 
																			'class' => 'TelefonoPais', 
																			'maxlength' => 3, 
																			'div' => false, 
																			'label' => false,
																			'placeholder' => 'País',
																			'value' => $telPais
																		)
																	)
																)
															), 
													'label' => false,
													'class' => 'Telefono', 
													'maxlength' => 20
												)
											);
										?>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
									<div class="input-group-addon info">Correo Electrónico</div>
										<?php
											echo $form->input('Contacto.Email', array(
												'label' => false,
												'class' => 'Email form-control',
												'placeholder' => 'Correo Electrónico',
												'value' => $user['Persona']['Email']
											));
										?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<div class="input-group-addon info">Apellidos</div>
										<?php
											echo $form->input('Contacto.Apellidos', array(
												'label' => false,
												'class' => 'Apellidos form-control',
												'placeholder' => 'Apellido Paterno',
												'value' => $user['Persona']['ApellidoPaterno']
											));
										?>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone-square"></i></div>
									<div class="input-group-addon info">Celular</div>
										<?php
											$telPais = '56';
											$telArea = '9';
											$tel = '';
											if(!empty($user['Telefonos'][1]['Telefono'])) {
											 	$telPais = $user['Telefonos'][1]['Telefono']['Pais'];
												$telArea = $user['Telefonos'][1]['Telefono']['CodigoArea'];
												$tel = $user['Telefonos'][1]['Telefono']['Numero'];
											}
											echo $form->input(
												'Contacto.Celular', 
												array(
													'type' => 'text',
													'placeholder' => 'Número',
													'value' => $tel,
													'between' =>
														$form->input(
															'Contacto.CelularArea', 
																array(
																	'class' => 'CelularArea', 
																	'maxlength' => 3, 
																	'div' => false, 
																	'label' => false,
																	'value' => $telArea,
																	'before' => $form->input(
																		'Contacto.CelularPais', array(
																			'value' => $telPais,
																			'class' => 'CelularPais',
																			'maxlength' => 3,
																			'div' => false,
																			'label' => false,
																			'placeholder' => 'País'
																		)
																	)
																)
															), 
													'label' => false,
													'class' => 'Celular', 
													'maxlength' => 20
												)
											);
										?>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-edit"></i></div>
									<div class="input-group-addon info">Rut</div>
									<?php
										echo $form->input('Contacto.NumeroDocumento', array(
											'type' => 'text',
											'label' => false,
											'class' => 'RutPersona form-control',
											'required' => 'required',
											'placeholder' => 'Sin puntos, guión y dígito verificador',
											'style' => 'width: 201px; height: 30px;border: 1px solid #bdc3c7;border-radius: 0 5px 5px 0;',
											'maxlength' => 8
										));
									?>
								</div>
								<span id="info">Debe ingresar los primeros dígitos de su rut, sin puntos, guión y digito verificador</span>
							</div>
						</div>
					</div>
					
				</div>
				<div class="form-group">
					<div class="opciones">
						> Quiero inscribirme en el curso de:
					</div>
					<div class="row">
						<div class="col-lg-6 imagenes">
							<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/inscripcion/negocio.jpg', array('alt' => 'Próximo Encuentro de Negocios: Martes 6 de mayo | "Adelantándose a los deseos de los clientes"'));?><br />
						</div>
						<div class="col-lg-6 imagenes">
							<?php //echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/inscripcion/ventas.jpg', array('alt' => 'Próximo Encuentro de Negocios: Martes 6 de mayo | "Adelantándose a los deseos de los clientes"'));?><br />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php
								echo $form->input('Contacto.Curso',
									array(
	                                        'type' => 'radio',
	                                        'div' => array(
	                                            'class' => 'input pregunta'
	                                        ),
	                                        'legend' => false,
	                                        'options' => array(
	                                            'Como aumentar las ventas de tu negocio' => __('Cómo aumentar las ventas de tu negocio<br /><span>Fecha de Inicio: Abril 2016</span>', true)),
	                                            'default' => 2));
							?>
						</div>
						<div class="col-lg-6"></div>
							
					</div>
				</div>
				<div class="form-group">
					<div class="form-group autorizo">
						<?php 
							echo $form->input('Contacto.Autorizacion', 
							    array(
							     	'label'=>false, 
							     	'type'=>'checkbox',
							     	'after' => '<label style="font-weight: normal; padding: 5px; position:relative; top: 3px;">Acepto <a href="'. Configure::read('App.static') . '/apps/pagina_aulabci/files/terminos-condiciones-bci.pdf">términos y condiciones</a></lablel>',
							     	'div' => false
							     )
							);
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
		<div id="foot">
            <div class="bottom-menu bottom-menu-inverse">
                <div class="container">
                    <div class="row">
                        <div class="logo-eclass span2">
                            <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/default/eclass.png', array('alt' => '', 'width' => 75 , 'height' => 38 , 'class' => '' ));?>
                        </div>
                        <div class="texto span10">
                            <p>Aula Digital Bci es una iniciativa del Banco de Crédito e Inversiones impulsada en alianza con eClass. El acceso y uso de esta plataforma es exclusivo para actuales clientes del Banco de Crédito e Inversiones. El Banco se reserva el derecho de modificar o anular el registro de cualquier usuario no autorizado o debidamente registrado. El uso de la plataforma constituye una aceptación explícita de los términos y condiciones de la misma. Infórmese sobre la garantía estatal de los depósitos en su banco o en <a href="www.sbif.cl">www.sbif.cl</a>. La entrega de los bienes y la prestación de servicios no bancarios ofrecidos, son de exclusiva responsabilidad de la empresa que realiza tal actividad, no cabiéndole a BCI intervención alguna en su entrega o en la ulterior atención que ellos demanden.</p>
                        </div>
                        <div class="logo-bci span2">
                            <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/default/bci.png', array('alt' => '', 'width' => 75 , 'height' => 38 , 'class' => '', 'style' => 'text-align: right;'));?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="politicas">
                            <?php echo $html->link('Políticas de Privacidad', Configure::read('App.static') . '/apps/pagina_aulabci/files/politicas_privacidad.pdf', array('target' => '_blank', 'escape' => false, 'title' => 'Políticas de Privacidad', 'class' => 'politicas')); ?>
                        </div>
                        <div class="terminos-cond">
                            <?php echo $html->link('Términos y Condiciones', Configure::read('App.static') . '/apps/pagina_aulabci/files/terminos-condiciones-bci.pdf', array('title' => 'Términos y Condiciones', 'escape' => false, 'target' => '_blank', 'style' => '', 'class' => 'terminos-cond') );?>    
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
       $('#inscripcion form').on('submit', function(event) {
       		$.ajax({
       			url: $(this).attr('action'),
       			data: $(this).serialize(),
       			type: "POST",
	            dataType: "json",
       		}).done(function(data){
				if(data.data.state == 'success'){
						window.location = '/pages/confirmacion_recepcion';
					} else {
						$('.error').children('.warning').remove();
						$('.error').html((data.response.mensaje));
					}       
       		});
       		return false;
       	});
    });
});
</script>

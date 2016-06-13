<div class="contacto">
	<div class="contenedor">
		<div class="formulario">
			<div class="formulario-head">
				<p class="titulo">POSTULA A TU CURSO DE INGLÉS</p>
				<p>ingresando tus datos</p>
			</div>
			<div class="formulario-body">
			<?php 
				echo $form->create(null, array('url' => array('controller' => 'inscripciones', 'action' => 'ingles'), 'class' => 'form-contacto')); ?>

				<?php 
				$session->flash();
				$user = ($this->Session->read('Usuario-BCI'));

				if(!empty($errors)) {
					echo $errors['Contacto']['Mensaje'];
				}
				?>
				<?php echo $form->input('Contacto.Url', array('type' => 'hidden', 'value' => (!empty($this->params['url']['url']) ? $this->params['url']['url'] : 'index')));?>
			
				<?php echo $form->input('Contacto.Nombres', array('label' => '', 'class' => 'nombre required', 'placeholder' => 'Nombre', 'value' => $user['Persona']['Nombre']));?>
			 
				<?php echo $form->input('Contacto.Apellido', array('label' => '', 'class' => 'apellido required' , 'placeholder' => 'Apellido', 'value' => $user['Persona']['ApellidoPaterno']));?>
			
				<?php echo $form->input('Contacto.Email', array('label' => '', 'class' => 'email required'  , 'placeholder' => 'Mail', 'value' => $user['Persona']['Email']));?>
			
				<?php echo 
				$telPais = '';
				$telArea = '';
				$tel = '';
				if(!empty($user['Telefonos'][0]['Telefono'])) {
				 	$telPais = $user['Telefonos'][0]['Telefono']['Pais'];
					$telArea = $user['Telefonos'][0]['Telefono']['CodigoArea'];
					$tel = $user['Telefonos'][0]['Telefono']['Numero'];
				}
				echo $form->input('Contacto.Telefono', array(
				 	'type' => 'text', 
				 	'value' => $tel,
				 	'between' => $form->input(
				 		'Contacto.TelefonoArea', array(
				 			'class' => 'codigo text-center',
				 			'placeholder' => 'Área', 
				 			'maxlength' => 3, 
				 			'div' => false, 
				 			'label' => false,
				 			'value' => $telArea,
				 			'before' => $form->input(
								'Contacto.TelefonoPais',
								array(
									'div' => false,
									'label' => false,
									'class' => 'text-center codigo',
									'placeholder' => 'País',
									'value' => $telPais
								)
							)
				 		)
				 	), 
				 	'label' => false, 
				 	'class' => 'required num', 
				 	'maxlength' => 20,
				 	'placeholder' => 'Teléfono'
				));?>
		
				<?php echo $form->submit(Configure::read('App.static') . '/apps/pagina_aulabci/img/ingles/postula.png', array('type' => 'image','label' => '', 'class' => 'enviar'));?>
					
		        <?php echo $form->end();?>
			</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
	$script.ready('jquery', function() {
		$('#AddForm').on('submit', function(event) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url: '/inscripciones/ingles',
				data: $(this).serialize(),
				success: function(data){
					if(data.response.status == 'success') {
						$('#AddForm .mensaje').remove()
						elem = $('<p>').text(data.response.message).addClass('mensaje');
						$('#AddForm').prepend(elem);
					} else {
						$('#AddForm .mensaje').remove()
						elem = $('<p>').text(data.response.message).addClass('mensaje');
						$('#AddForm').prepend(elem);
					}
				},
			});
			event.preventDefault();
		})
	});
</script>
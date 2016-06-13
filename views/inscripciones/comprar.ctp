<div class="container-box">
	<div class="container">
		<?php 
		$descuento = Configure::read('porcentajesDescuento');
		if(!empty($idInscripcion)) {
			$action = '/comprar/' . $item->Curso->getSlug . '/' . $idModalidad . '/' . $idInscripcion;
		} else {
			$action = '/comprar?slug=' . $item->Curso->getSlug . '&modalidad=' . $idModalidad;
		}
		echo $form->create(null, array('url' => $action, 'id' => 'search-form', 'id' => 'registro')); 
		echo $form->input('Inscripcion.EntityId', array('type' => 'hidden'));
		echo $form->input('InscripcionCurso.EntityId', array('type' => 'hidden'));
		echo $form->input('InscripcionFormaPago.EntityId', array('type' => 'hidden', 'value' => (!empty($this->data['InscripcionFormaPago']['EntityId']) ? $this->data['InscripcionFormaPago']['EntityId'] : 0)));
		?>
		<div class="box-inscripcion">
			<div class="contenedor">
				<span class="badge badge-info">1</span>
				<div class="title">
					<h5>Ingresa tus datos</h5>
					<p>Llena estos datos básicos para continuar, todos los campos marcados con * son obligatorios</p>
				</div>
				<div class="clear"></div>
				<div class="datos-form">
					<table style="width:100%;">
						<!---->
						<tr>
							<td>
								<p><?php __('CODIGO BCI*', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span6">
										<?php echo $form->input('Inscripcion.CodigoBci', array('type' => 'text', 'required' => true, 'placeholder' => 'Ingrese codigo BCI', 'class' => 'small span6','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>	
						<!---->
						<tr>
							<td style="padding-left:15px;">
								<p><?php __('NÚMERO DE DOCUMENTO*', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span2">
										<?php echo $form->input('Inscripcion.DocumentoIdentificacion', array('options' => $tiposDocumento, 'class' => 'selectpicker show-menu-arrow span2', 'data-style' => 'btn btn-small', 'style' => 'display:none;', 'value' => 1, 'div' => false, 'label' => false, 'empty' => 'Documentos')); ?>
									</div>
									<div class="span4">
										<?php echo $form->input('Inscripcion.NumeroDocumento', array('type' => 'text', 'required' => true, 'class' => 'small span4', 'div' => false, 'label' => false)); ?>
									</div>
									<div class="span1">
										<?php echo $form->input('Inscripcion.DV', array('type' => 'text', 'placeholder' => 'DV', 'required' => true, 'class' => 'small span1','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php __('NOMBRES*', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span6">
										<?php echo $form->input('Inscripcion.Nombre', array('type' => 'text', 'required' => true, 'placeholder' => 'Ingrese su nombre', 'class' => 'small span6','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>	
						<tr>
							<td>
								<p><?php __('APELLIDOS (PATERNO* - MATERNO)', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span3">
										<?php echo $form->input('Inscripcion.Paterno', array('type' => 'text', 'required' => true, 'placeholder' => 'Ingrese su apellido paterno', 'class' => 'small span3','div' => false, 'label' => false)); ?>
									</div>
									<div class="span3">
										<?php echo $form->input('Inscripcion.Materno', array('type' => 'text', 'placeholder' => 'Ingrese su apellido materno', 'class' => 'small span3','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php __('GÉNERO*', false); ?></p>
							</td>
							<td>
								<input type="radio" name="data[Inscripcion][Sexo]" value="1" checked="checked">Masculino</input>
								<input type="radio" name="data[Inscripcion][Sexo]" value="2" class="distancia">Femenino</input>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php __('TELÉFONO DE CONTACTO*', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span2">
										<?php echo $form->input('Inscripcion.TipoTelefono', array('options' => $tiposTelefono, 'class' => 'selectpicker show-menu-arrow span2', 'data-style' => 'btn btn-small', 'style' => 'display:none;', 'value' => 1, 'div' => false, 'label' => false, 'empty' => 'Tipo')); ?>
									</div>
									<div class="span1">
										<?php echo $form->input('Inscripcion.TelefonoPais', array('type' => 'text', 'required' => true, 'placeholder' => 'Cod. Pais', 'class' => 'small span1','div' => false, 'label' => false, 'value' => 56)); ?>
									</div>
									<div class="span1">
										<?php echo $form->input('Inscripcion.TelefonoArea', array('type' => 'text', 'required' => true, 'placeholder' => 'Cod. Area', 'class' => 'small span1','div' => false, 'label' => false, 'value' => 02)); ?>
									</div>
									<div class="span2">
										<?php echo $form->input('Inscripcion.Telefono', array('type' => 'text', 'required' => true, 'placeholder' => 'Ingrese su teléfono', 'class' => 'small span2','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php __('EMAIL*', false); ?></p>
							</td>
							<td>
								<div class="row">
									<div class="span6">
										<?php echo $form->input('Inscripcion.Mail', array('type' => 'text', 'required' => true, 'placeholder' => 'Ingrese su correo electrónico', 'class' => 'small span6','div' => false, 'label' => false)); ?>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="box-inscripcion">
			<div class="contenedor">
				<span class="badge badge-info">2</span>
				<div class="title">
					<h5>Confirma tus preferencias</h5>
					<p>Revisa con cuidado que el curso, periodo y modalidad que escogiste para tu curso están correctos.</p>
				</div>
				<div class="clear"></div>
				<table class="table">
					<thead>
						<tr>
							<th width="260">CURSO</th>
							<th>FECHA DE INICIO</th>
							<th>MODALIDAD</th>
							<th>CIUDAD</th>
							<th>VALOR</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<?php echo sprintf("%s", $item->Curso->getNombre); ?>
								<p class="text-danger sede">
									<?php
										if(!empty($item->Curso->Clase)) {
			                                $listaSeminarios = array('*Seminario Presencial');//' *Seminario Presencial - ';
			                                foreach($item->Curso->Clase as $clase) {
			                                    foreach($clase->Sede as $sede) {
							    	if(!empty($sede->ClasesSede->getFecha)){
			                                        	$listaSeminarios[] = ' Sede '. $sede->Localidad->getNombre . ' ' . strftime(__('%d de %B %Y', true), strtotime($sede->ClasesSede->getFecha));
								}
			                                    }
			                                }
			                                echo implode('<br />-', $listaSeminarios);
			                            } else {
			                                echo '<br />*Seminario Presencial ' . implode(' - ', array_values($localidades)) . ' - Aún no están confirmadas las fechas.';
			                            }
									?>
								</p>
							</td>
							<td>
								<p data-toggle="tooltip" title="<?php echo sprintf("Fecha de Compra: %s, aún puedes comenzar este curso gracias a nuestra metodología flexible", strftime(__('%d de %B de %Y', true), strtotime(date('Y-m-d')))); ?>">
									<?php 
										echo $form->input('InscripcionCurso.Curso', array('type' => 'hidden', 'value' => $item->Curso->getEntityId));
										echo strftime(__('%d de %B de %Y', true), strtotime(!empty($item->Curso->getFechaSegundoInicio) && $item->Curso->getFechaSegundoInicio != '0000-00-00' ? $item->Curso->getFechaSegundoInicio : $item->Curso->getFechaInicio)); 
									?>
								</p>
							</td>
							<td>
								<?php
									echo $form->input('InscripcionCurso.Modalidad', array('options' => $modalidadesList, 'class' => 'selectpicker show-menu-arrow span2', 'data-style' => 'btn btn-small', 'style' => 'display:none;', 'div' => false, 'label' => false, 'empty' => 'Modalidades', 'value' => $idModalidad)); 
								?>
							</td>
							<td>
								<?php echo $form->input('InscripcionCurso.Localidad', array('options' => $localidades, 'class' => 'selectpicker show-menu-arrow span2', 'data-style' => 'btn btn-small', 'style' => 'display:none;', 'div' => false, 'label' => false, 'empty' => 'Sede Seminario', 'value' => $idLocalidad)); ?>
								<p class="online" style="display:none;">Sede: Online</p>
							</td>
							<td class="precio"><?php printf("%s %s", $item->Moneda->getAntes, number_format($item->getPrecio * $descuento[$item->getTipoModalidad], 0, '', '.')); ?></td>
						</tr>
						<tr>
							<td colspan="5">
								<p class="sede text-danger">Las fechas de los seminarios finales serán reconfirmadas por las coordinadoras académicas de cada curso, ya que podrían sufrir cambios por razones de fuerza mayor.</p>	
							</td>
							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-inscripcion">
			<div class="contenedor">
				<span class="badge badge-info">3</span>
				<div class="title">
					<h5>Realiza tu pago</h5>
					<p>Selecciona tu método de pago para finalizar.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="forma-pago">
				<div class="row">
					<div class="span4">
						<div class="monto">
							<p>MONTO A PAGAR</p>
							<?php
								echo $html->input('Inscripcion.Monto', array('type' => 'text', 'class'=> 'input-small small precio', 'value' => sprintf('%s%s', $item->Moneda->getAntes, number_format($item->getPrecio * $descuento[$item->getTipoModalidad], 0, '', '.')), 'readonly' => 'readonly'));

								$formasPago = Configure::read('FormasPagoTemp');
								foreach($formasPago as $key => $pago) {
									$fKey = (!empty($html->data['Inscripcion']['InscripcionFormaPago']) ? $html->data['Inscripcion']['InscripcionFormaPago'] : 1);
									echo '<div id="pago' . $key . '" ' . ($key == $fKey ? 'class="seleccionado"' : '') . '><input type="radio" ' . ($key == $fKey ? 'checked="checked"' : '') . ' name="data[Inscripcion][InscripcionFormaPago]" class="fp" value="' . $key . '">' . $pago['Nombre'] . '</div>';
								}
							?>
						</div>
					</div>
					<div class="span8">
						<div class="formapago">
							<div class="separador"></div>
							<div class="box-image">
								<div class="image">
									<?php
										foreach($formasPago as $key => $pago) {
											if($key == 1) {
												echo '<p class="detalle-pago" id="detalle-pago-' . $key . '">' . $html->image(Configure::read('App.static') . '/apps/pagina-cursosonline/img/webpay.jpg', array('absolute' => true, 'alt' => 'Webpay', 'width' => 161)) . '</p>';
											} else {
												echo '<div class="detalle-pago" id="detalle-pago-' . $key . '" style="display:none;"><p>' . $pago['Detalle'] . '</p></div>';
											}
											
										}
									?>
								</div>
							</div>
							<div id="box-terminos">
								<div class="terminos">
									<?php echo $form->input('Inscripcion.TerminoCondicion', array('label' => '<span>ACEPTO TÉRMINOS Y CONDICIONES</span>', 'style' => 'display:block;', 'type' => 'checkbox', 'value' => $terminosCondiciones->getEntityId)); ?> 
									<div class="clear"></div>
									<?php echo $html->link('Ver términos y condiciones', 'http://inscripciones.eclass.cl/terminos_condiciones/pdf/' . $terminosCondiciones->getEntityId, array('title' => 'Términos y condiciones', 'escape' => false)); ?>
								</div>
								<button type="submit" class="btn btn-small btn-info" id="pagar">REALIZAR PAGO</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $form->end(); ?>
		<?php echo $form->create(null, array('url' => '/', 'id' => 'webpay-form')); ?>
		<input type="hidden" name="TBK_TIPO_TRANSACCION" value="TR_NORMAL" />
		<input type="hidden" name="TBK_ORDEN_COMPRA" id="TBK_ORDEN_COMPRA" value="<?php echo (!empty($html->data['InscripcionFormaPago']['EntityId']) ? $html->data['InscripcionFormaPago']['EntityId'] : 0); ?>" />
		<input type="hidden" name="TBK_ID_SESION" value="<?php echo $session->id(); ?>" />
		<input type="hidden" name="TBK_URL_EXITO" value="<?php echo $html->url('/bienvenida', true); ?>" />
		<input type="hidden" name="TBK_URL_FRACASO" id="TBK_URL_FRACASO" value="<?php echo $html->url('/comprar/' . $item->Curso->getSlug . '/' . $item->getEntityId . '/' . $idInscripcion, true); ?>" />		
		<input type="hidden" name="TBK_MONTO" id="TBK_MONTO" class="precio-webpay" value="<?php echo (($item->getPrecio * $descuento[$item->getTipoModalidad]) * 100); ?>" />
		<?php echo $form->end(); ?>
	</div>
</div>
<script type="text/javascript">
$script.ready('jquery', function() {
	$script.ready('numeral', function() {
		(function($) {
			//Modalidad Precio
			$('#InscripcionCursoModalidad').change(function() {
				$.ajax({
					url: '/modalidades/get_precio/' + $(this).val(),
					type: "GET",
					dataType: "JSON",
					success: function(data) {
						if(data.response.modalidad.precio > 0) {
							tipo = data.response.modalidad.tipo;

							if(tipo == 2) {
								$('.sede').show();
								$('#InscripcionCursoLocalidad').next('div').show();
								$('#InscripcionCursoLocalidad').attr('disabled', false);
								$('#InscripcionCursoLocalidad').next('div').next('p').hide();
							} else {
								$('.sede').hide();
								$('#InscripcionCursoLocalidad').next('div').hide();
								$('#InscripcionCursoLocalidad').attr('disabled', true);
								$('#InscripcionCursoLocalidad').next('div').next('p').show();
							}

							online = '<?php echo $descuento[1]; ?>';
							semi = '<?php echo $descuento[2]; ?>';

							precio = data.response.modalidad.precio * (tipo == 1  ? online : semi);
							$('.precio-webpay').val(precio * 100);
							precio = numeral(precio).format('$ 0,0');
							precio = precio.replace(',', '.');
							$('.precio').val(precio);
							$('.precio').html(precio);
						}
					}
				});
			}).change();

	    })(jQuery);
	});
	(function($) {
		
		//Documentos Rut.
		$('#InscripcionDocumentoIdentificacion').change(function() {
    		if($(this).val() == 1) {
    			$('#InscripcionNumeroDocumento').attr('maxlength', 8);
    			$('#InscripcionNumeroDocumento').parent('div').removeClass('span4').addClass('span3');
    			$('#InscripcionNumeroDocumento').removeClass('span4').addClass('span3');
    			$('#InscripcionNumeroDocumento').attr('placeholder', "Ingrese su rut sin puntos ni dígito");

    			$('#InscripcionDV').parent('div').removeClass('span1').addClass('span1');
    			$('#InscripcionDV').show();
    		} else {
    			$('#InscripcionNumeroDocumento').parent('div').removeClass('span3').addClass('span4');
    			$('#InscripcionNumeroDocumento').removeClass('span3').addClass('span4');
    			$('#InscripcionNumeroDocumento').attr('placeholder', "Ej: 1238653135 (sin puntos ni guiones)");

    			$('#InscripcionDV').parent('div').removeClass('span1');
    			if($(this).val() == 2) {
    				$('#InscripcionNumeroDocumento').attr('maxlength', 8);
    			} else {
    				$('#InscripcionNumeroDocumento').attr('maxlength', 10);
    			}
    			$('#InscripcionDV').hide();
    		}
    	}).change();
	
		//Formas Pagos
		$('.fp').click(function() {
            var numero = $(this).val();
            $('.monto div').removeClass('seleccionado');
            $('#pago' + numero).addClass('seleccionado');
            $('.detalle-pago').hide();
            $('#detalle-pago-' +numero).show();
        });

		//Formulario
        var submit = $('#pagar');
        submit.click(function(event) {

        	seleccionado = $('div.seleccionado').attr('id');
        	formaPago = seleccionado.replace('pago', '');
        	data = $('#search-form').serialize();
        	
        	$('#search-form').attr('action', "<?php echo '/comprar?slug=' . $item->Curso->getSlug . '&modalidad=' . $item->getEntityId . '&ajax=true'; ?>");

        	if(formaPago == 1) {
        		
        		submit.addClass('disabled');
        		submit.attr('disabled', true);

        		$.ajax({
        			url: "<?php echo '/comprar?slug=' . $item->Curso->getSlug . '&modalidad=' . $item->getEntityId . '&ajax=true'; ?>",
        			type: 'POST',
        			dataType: 'json',
        			data: data,
        			success: function(data) {
        				if(data.data.state == "success") {
        					if($('#TBK_ORDEN_COMPRA').val() == 0) {
        						$('#TBK_ORDEN_COMPRA').val(data.data.id_tbk_oc);
        					}
        					$('#TBK_URL_FRACASO').val("<?php echo $html->url('/comprar/' . $item->Curso->getSlug . '/' . $item->getEntityId, true); ?>" + '/' + data.data.id_inscripcion);
        					$('#webpay-form').attr('action', '<?php echo $html->url('/KCC/cgi-bin/tbk_bp_pago.cgi'); ?>').submit();
        				} else {
        					submit.removeClass('disabled');
        					submit.attr('disabled', false);
        					
				alert('Error, debe llenar todos los campos marcados con *, '+data.data.mensaje.Inscripcion.CodigoBci);
        				}
        			}
        		}).change();
        		return false;	
        	}
        });
	})(jQuery);
});

$script.ready('bootstrap', function(){
    $script('<?php echo Configure::read('App.static'); ?>/assets/js/vendor/bootstrap/2.3.2/bootstrap-select.js', function(){
        $('.selectpicker').selectpicker({showIcon: true, menuStyle: 'dropdown-inverse'});
    });

    $('p, div').tooltip({placement: 'bottom',trigger: 'manual'}).tooltip('show');
    $('p, div').on('click',function(){$(this).tooltip('destroy');});

});
</script>
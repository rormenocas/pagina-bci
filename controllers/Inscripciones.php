<?php class Inscripciones extends InscripcionesController {
	public $components = array('Rut', 'Password');

	public function index() {
		$this->layout = 'blank';
	}

	public function inscripcion(){
		$this->layout = 'modal';

		if(!empty($this->data)){
			$documentoEmpresa = $this->data['Inscripcion']['DocumentoEmpresa'];
			$documentoEmpresaDv  = $this->data['Inscripcion']['DocumentoEmpresaDv'];
			$numeroDocumento  = $this->data['Inscripcion']['NumeroDocumento'];
			$numeroDocumentoDv  = $this->data['Inscripcion']['NumeroDocumentoDv'];

			if($this->Rut->validarRut($numeroDocumento . '-' . $numeroDocumentoDv) && $this->Rut->validarRut($documentoEmpresa . '-' . $documentoEmpresaDv)){
				$numeroDocumento = $this->Rut->rutEclass($numeroDocumento . '-' . $numeroDocumentoDv);
				$this->set(compact('documentoEmpresa', 'documentoEmpresaDv', 'numeroDocumento', 'numeroDocumentoDv'));
				$_inscripcion = ClassRegistry::init('Inscripcion');
				$_inscripcion->validation['Inscripcion'] = array(
					'DocumentoEmpresa' => array(
						'notEmpty' => __('Ingrese el RUT de su Empresa.', true)
					),
					'NumeroDocumento' => array(
						'notEmpty' => __('Debe ingresar su RUT.', true)
					),
					'Nombre' => array(
						'notEmpty' => __('Debe ingresar su nombre.', true)
					),
					'ApellidoPaterno' => array(
						'notEmpty' => __('Debe ingresar su apellido paterno.', true)
					),
					'ApellidoMaterno' => array(
						'notEmpty' => __('Debe ingresar su apellido materno.', true)
					),
					'Email' => array(
						'notEmpty' => __('Debe ingresar su correo electrónico.', true)
					)
				);
				if($this->data['Inscripcion']['TerminoCondicion'] == 0){
					$this->flash(__('Debe aceptar los terminos y condiciones.', true));
					$_inscripcion->invalidate('Inscripcion.Acepto',__('Debe aceptar los terminos y condiciones.',true));//invalidar para no perder los datos del formulario
				}

				$sinTelefono = true;
				$sinCelular = true;
				if (!empty($this->data['Inscripcion']['TelefonoPais']) && 
					!empty($this->data['Inscripcion']['TelefonoArea']) && 
					!empty($this->data['Inscripcion']['Telefono'])) {
					$sinTelefono = false;
				}
				if (!empty($this->data['Inscripcion']['CelularArea']) && 
					!empty($this->data['Inscripcion']['CelularArea']) && 
					!empty($this->data['Inscripcion']['Celular'])){
					$sinCelular = false;
				}
				if($sinTelefono && $sinCelular){
					$_inscripcion->invalidate('Inscripcion.Telefono',__('Debe ingresar al menos un número telefónico o un número de celular.',true));
					$_inscripcion->invalidate('Inscripcion.Celular',__('Debe ingresar al menos un número telefónico o un número de celular.',true));
				}else{
					if(!$sinTelefono){
						if(!is_numeric($this->data['Inscripcion']['TelefonoPais']) && 
							(strlen($this->data['Inscripcion']['TelefonoPais']) <= 0 || 
							strlen($this->data['Inscripcion']['TelefonoPais']) >= 3))
						{
							$_inscripcion->invalidate('Inscripcion.TelefonoPais',__('Debe ser un número valido.',true));
						}
						if(!is_numeric($this->data['Inscripcion']['TelefonoArea']) && 
							(strlen($this->data['Inscripcion']['TelefonoArea']) <= 0 || 
							strlen($this->data['Inscripcion']['TelefonoArea']) >= 3))
						{
							$_inscripcion->invalidate('Inscripcion.TelefonoArea',__('Debe ser un número valido.',true));
						}
						if(!is_numeric($this->data['Inscripcion']['Telefono']) || 
							strlen($this->data['Inscripcion']['Telefono']) < 6)
						{
							$_inscripcion->invalidate('Inscripcion.Telefono',__('Debe ser un número valido.',true));
						}
					}
					if(!$sinCelular){
						if(!is_numeric($this->data['Inscripcion']['CelularPais']) && 
							(strlen($this->data['Inscripcion']['CelularPais']) <= 0 || 
							 strlen($this->data['Inscripcion']['CelularPais']) >= 3))
						{
							$_inscripcion->invalidate('Inscripcion.CelularPais',__('Debe ser un número valido.',true));
						}
						if(!is_numeric($this->data['Inscripcion']['CelularArea']) && 
							(strlen($this->data['Inscripcion']['CelularArea']) <= 0 || 
							 strlen($this->data['Inscripcion']['CelularArea']) >= 3))
						{
							$_inscripcion->invalidate('Inscripcion.CelularArea',__('Debe ser un número valido.',true));
						}
						if(!is_numeric($this->data['Inscripcion']['Celular']) || 
							strlen($this->data['Inscripcion']['Celular']) < 6)
						{
							$_inscripcion->invalidate('Inscripcion.Celular',__('Debe ser un número valido.',true));
						}
					}
				}

				//contexto
				$contexto = array(
					'Contexto' => array(
						'id_estado' => 4,
						'sin_detalle' => 0
					)
				);

				$_inscripcion->Contexto->save($contexto);

				$this->data['Inscripcion']['nombre'] = $this->data['Inscripcion']['Nombre'];
				$this->data['Inscripcion']['paterno'] = $this->data['Inscripcion']['ApellidoPaterno'];
				$this->data['Inscripcion']['materno'] = $this->data['Inscripcion']['ApellidoMaterno'];
				$this->data['Inscripcion']['mail'] = $this->data['Inscripcion']['Email'];

				$this->data['Inscripcion']['id_documento'] = 1;//tipo de documento de la persona
				$this->data['Inscripcion']['id_contexto'] = $_inscripcion->Contexto->id;
				$this->data['Inscripcion']['id_campus'] = 70;
				$this->data['Inscripcion']['id_moneda'] = 1;
				$this->data['Inscripcion']['fecha'] = date('Y-m-d');
				$this->data['Inscripcion']['fecha_pago'] = date('Y-m-d');
				$this->data['Inscripcion']['id_gerencia'] = 2;
				if($_inscripcion->save($this->data)){
					//inscripciones_formas_pago
					
					$formaPago = array(
						'InscripcionFormaPago' => array(
							'id_inscripcion' => $_inscripcion->id,
							'id_forma_pago' => 10,
							'id_punto_pago' => 0,
							'monto' => 0,
						)
					);
					$_inscripcion->InscripcionFormaPago->save($formaPago);

					//inscripcion de curso
					$cursos = array(
						0 => array(
							'InscripcionCurso' => array(
								'id_inscripcion' => $_inscripcion->id,
								'id_curso' => 10802,//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_modalidad' => $this->getModalidad(10802),//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_forma_pago' => 10, //tipo beca
							)
						),
						1 => array(
							'InscripcionCurso' => array(
								'id_inscripcion' => $_inscripcion->id,
								'id_curso' => 10792,//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_modalidad' => $this->getModalidad(10792),//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_forma_pago' => 10, //tipo beca
							)
						)
						,
						2 => array(
							'InscripcionCurso' => array(
								'id_inscripcion' => $_inscripcion->id,
								'id_curso' => 10499,//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_modalidad' => $this->getModalidad(10499),//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_forma_pago' => 10, //tipo beca
							)
						),
						3 => array(
							'InscripcionCurso' => array(
								'id_inscripcion' => $_inscripcion->id,
								'id_curso' => 10498,//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_modalidad' => $this->getModalidad(10498),//TODO CAMBIAR EN LOS CURSOS A CARGAR INICIALMENTE
								'id_forma_pago' => 10, //tipo beca
							)
						)
					);
					$error = false;
					foreach ($cursos as $curso) {
						$_inscripcion->InscripcionCurso->id = null;
						if($_inscripcion->InscripcionCurso->save($curso)){
							//curso creado ok
						} else {
							$error = true;
						}
					}

					$this->activar($_inscripcion->id);
					//logear al usuario
					$_usuario = ClassRegistry::init('Usuario');
					$usuario = $_usuario->find(
						array(
							'recursive' => 1,
							'conditions' => array(
								'Usuario.username' => $numeroDocumento[0],
								'Persona.id_documento' => 1,
							),
							'expects' => array(
								'Persona' => array(
									'fields' => array(
										'*', 
									),
									'expects' => array(
										'Telefono' => array(
											'fields' => array('*'),
											'expects' => array()
										)
									)
								)
							),
						)
					);

					if(!empty($usuario)){
						$telefonos = array();
						foreach($usuario->Persona->Telefono as $key => $telefono) {
							$telefonos['Telefonos'][$key] = $telefono->toArray();
						}
						$usuario = $usuario->toArray();
						$usuario = array_merge($usuario, $telefonos);
						$usuario['Usuario']['DV'] = $numeroDocumento[1];
						$this->Session->write('Usuario-BCI', $usuario);
						$this->redirect($this->url(array('controller' => 'pages', 'action' => 'display', 'gracias')));
					}else{
						$this->flash(__('Por favor, revise los datos ingresados.', true));
					}
				}
				$this->flash(__('Por favor, revise los datos ingresados.', true));
			} else {
				$this->flash(__('Por favor, revise los datos ingresados.', true));
			}
		}
	}

	//TODO solo se deja que obtenga la primera modalidad para el curso
	private function getModalidad($idCurso){
		$_modalidad = ClassRegistry::init('Modalidad');
		$modalidad = $_modalidad->find(
			array(
				'recursive' => -1,
				'conditions' => array(
					'Modalidad.id_curso' => $idCurso
				)
			)
		);
		if(!empty($modalidad)){
			return $modalidad->getEntityId;
		}
		return 0;
	}

	public function CursoPerfeccionamiento(){

		$this->layout = 'ajax';
		$_cursos = ClassRegistry::init('Curso');
		$this->set(compact('cursos'));
		$response = array();

		if(!empty($this->data)){
			$_contacto = ClassRegistry::init('Contacto');
			$error = false;
			if(empty($this->data['Contacto']['Nombres'])){
				$_contacto->invalidate('Contacto.Nombres',__('Debe ingresar un nombre.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['Apellidos'])){
				$_contacto->invalidate('Contacto.Apellidos',__('Debe ingresar un apellido.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['TelefonoArea']) || !is_numeric($this->data['Contacto']['TelefonoArea'])){
				$_contacto->invalidate('Contacto.TelefonoArea',__('Debe ingresar un código de área válido.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['Telefono']) || !is_numeric($this->data['Contacto']['Telefono'])){
				$_contacto->invalidate('Contacto.Telefono',__('Debe ingresar un número de teléfono válido.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['CelularArea']) || !is_numeric($this->data['Contacto']['CelularArea'])){
				$_contacto->invalidate('Contacto.CelularArea',__('Debe ingresar un código de área válido.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['Celular']) || !is_numeric($this->data['Contacto']['Celular'])){
				$_contacto->invalidate('Contacto.Celular',__('Debe ingresar un número de celular válido.',true));
				$error = true;
			}
			if(empty($this->data['Contacto']['Email']) || !filter_var($this->data['Contacto']['Email'], FILTER_VALIDATE_EMAIL)){
				$_contacto->invalidate('Contacto.Email',__('Debe ingresar un email valido.',true));
				$error = true;
			}

			if(empty($this->data['Contacto']['NumeroDocumento']) || !is_numeric($this->data['Contacto']['NumeroDocumento'])){
				$_contacto->invalidate('Contacto.NumeroDocumento',__('Debe ingresar Rut sin puntos ni guión.',true));
				$error = true;
			}
			

			if(empty($this->data['Contacto']['Curso'])) {
				$_contacto->invalidate('Contacto.Curso',__('Debe ingresar seleccionar un curso.',true));
				$error = true;
				

			}else {
				$adicional = '';
				$adicional = $this->data['Contacto']['Curso'];
			}

			
			$_usuario = ClassRegistry::init('Usuario');
			$usuario = $_usuario->find(
				array(
					'recursive' => 1,
					'conditions' => array(
						'Usuario.username' => $this->data['Contacto']['NumeroDocumento'],
						'Persona.id_documento' => 1,
					),
					'expects' => array(
						'Persona' => array(
							'fields' => array(
								'*',
							),
							'expects' => array(
								'Telefono' => array(
									'fields' => array('*'),
									'expects' => array()
								)
							)
						)
					),
				)
			);

			if(empty($adicional)){
				$this->flash(__('Debe seleccionar al menos un curso para continuar.', true));
				$_contacto->invalidate('Contacto.Curso',__('Debe seleccionar un curso.',true));
			}
			if(!$error){
				$apellidos = split(' ', $this->data['Contacto']['Apellidos']);
					$contacto = array(
						'Contacto' => array(
							'Nombres' => $this->data['Contacto']['Nombres'],
							'Apellido' => $apellidos[0],
							'Materno' => ((!empty($apellidos[1])) ? $apellidos[1] : ''),
							'TelefonoPais' => 56,
							'TelefonoArea' => $this->data['Contacto']['TelefonoArea'],
							'Telefono' => $this->data['Contacto']['Telefono'],
							'CelularArea' => $this->data['Contacto']['CelularArea'],
							'Movil' => $this->data['Contacto']['Celular'],
							'Email' => $this->data['Contacto']['Email'],
							'Adicional' => $adicional,
							'Pregunta' => $adicional,
						'IdDocumento' => 1,
						'NumeroDocumento' => $this->data['Contacto']['NumeroDocumento'],
							'Autorizacion' => (($this->data['Contacto']['Autorizacion'] == 1) ? 'SI' : 'NO'),
							//requeridos
							'Texto' => 'Contacto Aula BCI',
							'Asunto' => 'Aula BCI',
						'Usuario' => (!empty($usuario) ? $usuario->getEntityId : 0)
						)
					);
					if($_contacto->save($contacto)){
						$this->flash(__('Contacto ingresado correctamente.', true));
						$response['data']['state'] = 'success';
						// $this->redirect($this->url(array('controller' => 'pages', 'action' => 'display', 'confirmacion_recepcion')));
					}else{
					$response['data']['state'] = 'error';
					$response['data']['mensaje'] = 'Ocurrio un error al ingresar el contacto, intente nuevamente';
				}
			}else {
				$response['data']['state'] = 'error';
				$response['response']['mensaje'] = "No se pudo realizar la inscripción, revise los siguientes errores: <br>";
				foreach($_contacto->validationErrors['Contacto'] as $field => $message) {
					if($field == 'NumeroDocumento') {
						$field = "Rut";
					}
					if($field == 'Email') {
						$field = 'Correo Electrónico';
					}
					$response['response']['mensaje'] .= "<strong>{$field}:</strong> {$message} <br>";
				}
				
			}
		}
		die(json_encode($response));

	}

	public function comprar() {
		$idInscripcion = '';
		$isAjax = false;
		if(!empty($this->get['ajax'])) {
			$isAjax = true;
			$response = array();
		}

		$Inscripcion = new Inscripcion();
		$CuotaEntity = ClassRegistry::init('Cuota');
		$idSede = $idModalidad = '';

		if(!empty($this->get['modalidad'])) {
			$idModalidad = $this->get['modalidad'];
		}
		else if(!empty($this->params['modalidad'])) {
			$idModalidad = $this->params['modalidad'];
		}

		if(!empty($this->params['id'])) {
			$idInscripcion = $this->params['id'];
			if($this->validarInscripcion($idInscripcion) == false) {
				$this->redirect('/');
			}
		}

		if(!$isAjax) {
			$curso = array();
			if(!empty($idModalidad)) {

				$idLocalidad = 70;
				$item = $this->dataCurso($idModalidad);

				if(empty($item)) {
					$this->redirect('/');
				}

				$modalidades = ClassRegistry::init('Modalidad')->findAll(array(
						'conditions' => array('idCurso' => $item->Curso->getEntityId, 'Nuevo' => 1),
						'fields' => array('EntityId', 'TipoModalidad.Nombre', 'Precio'), 
						'recursive' => 0,
						'order' => 'Precio ASC',
						'expects' => array(
							'TipoModalidad' => array(
								'fields' => 'Nombre'
							),
							'Moneda' => array(
								'fields' => 'Antes',
								'expects' => array()
							)
						)
					)
				);

				foreach($modalidades as $mod) {
					$modalidadesList[$mod->getEntityId] = $mod->TipoModalidad->getNombre;
				}

				if(!empty($this->get['sede'])) {
					$idLocalidad = $this->get['sede'];
				}

				$localidades = ClassRegistry::init('CursoLocalidad')->generateList(array(
						'conditions' => array('Curso' => $item->Curso->getEntityId),
						'fields' => array('Localidad.EntityId', 'Localidad.Nombre'),
						'recursive' => 0,
						'expects' => array(
							'Localidad' => array(
								'fields' => 'Nombre',
								'expects' => array()
							)
						)
					)
				);

				$terminosCondiciones = ClassRegistry::init('TerminoCondicion')->find(array(
					'conditions' => array(
						'Programa' => $item->Curso->getPrograma,
						'Activo' => 1
					),
					'fields' => 'EntityId',
					'expects' => array()
				));

				$tiposDocumento = $Inscripcion->DocumentoIdentificacion->generateList(
					array(
						'recursive' => -1,
						'fields' => array('EntityId', 'Nombre'),
						'conditions' => array('EntityId' => array(1, 2, 3, 4)),
					)
				);

				$tiposTelefono = ClassRegistry::init('TipoTelefono')->generateList();
				$this->set(compact('tiposDocumento', 'tiposTelefono', 'item', 'modalidades', 'idModalidad', 'modalidadesList', 'localidades', 'terminosCondiciones', 'idLocalidad', 'idInscripcion'));
			} else {
				$this->redirect('/');
			}
		}

		if(!empty($this->data)) {
			$Inscripcion->validation = array(
				'Inscripcion' => array(
					'NumeroDocumento' => array(
						'notEmpty' => 'Debe ingresar un documento asociado'
					),
					'DocumentoIdentificacion' => array(
						'notEmpty' => 'Debe seleccionar un documento identificado'
					),
					'Nombre' => array(
						'notEmpty' => 'Debe ingresar su nombre'
					),
					'Paterno' => array(
						'notEmpty' => 'Debe ingresar su apellido paterno'
					),
					'Mail' => array(
						'email' => 'Debe ingresar un correo electronico valido'
					),
					'NumeroDocumento' => array(
						'notEmpty' => 'Debe ingresar un documento asociado'
					),
					'Sexo' => array(
						'notEmpty' => 'Debe seleccionar su genero'
					),
					'TelefonoPais' => array(
						'notEmpty' => 'Ingrese su codigo pais'
					),
					'TelefonoArea' => array(
						'notEmpty' => 'Ingrese su codigo ciudad'
					),
					'Telefono' => array(
						'notEmpty' => 'Ingrese su numero telefonico'
					)
				)
			);
			//Validación código BCI
			$codigo = '123456';
			if (!empty($this->data['Inscripcion']['CodigoBci'])) {
				$cod = split('-', $this->data['Inscripcion']['CodigoBci']);
				if($cod[0] != $codigo){
					$Inscripcion->invalidate('Inscripcion.CodigoBci', __('El código cliente BCI no es válido.', true));	
				}
			}else{
				$Inscripcion->invalidate('Inscripcion.CodigoBci', __('Debe ingresar su código de cliente BCI.', true));
			}

			if($this->data['Inscripcion']['DocumentoIdentificacion'] == 1) {

				if (empty($this->data['Inscripcion']['NumeroDocumento'])) {
					$Inscripcion->invalidate('Inscripcion.NumeroDocumento', __('Debe ingresar su número de documento.', true));
					$Inscripcion->invalidate('Inscripcion.DV', __(' ', true));
				}
				else if(!$this->Rut->validarRut($this->data['Inscripcion']['NumeroDocumento'] . '-' . $this->data['Inscripcion']['DV'])) {
					$Inscripcion->invalidate('Inscripcion.NumeroDocumento', __('Ingrese un número de documento válido', true));
					$Inscripcion->invalidate('Inscripcion.DV', __(' ', true));
				}
			} else{
				if (empty($this->data['Inscripcion']['NumeroDocumento'])) {
					$Inscripcion->invalidate('Inscripcion.NumeroDocumento',	__('Debe ingresar su número de documento válido.', true));
				}
			}

			if(empty($this->data['Inscripcion']['TerminoCondicion'])) {
				$Inscripcion->invalidate('Inscripcion.TerminoCondicion', __('Debe aceptar los términos y condiciones.', true));
			}
			
			$monto = $this->data['Inscripcion']['Monto'] = trim(str_replace('$', '', str_replace('.', '', $this->data['Inscripcion']['Monto'])));
			$this->data['Inscripcion']['TipoInscripcion'] = 1;
			$this->data['Inscripcion']['Nacionalidad'] = 46;
			$this->data['Inscripcion']['FechaInscripcion'] = date('Y-m-d');
			$this->data['Inscripcion']['Campus'] = Configure::read('Campus.id');
			$this->data['Inscripcion']['Coordinador'] = 95958;
			$this->data['Inscripcion']['Confirmado'] = 1;
			$this->data['Inscripcion']['Fuente'] = 'Cursos';

			if($Inscripcion->save($this->data)) {

				$this->data['Contexto']['Estado'] = 1;
				if($Inscripcion->Contexto->save($this->data)) {
					$Inscripcion->saveField($Inscripcion->id, 'Contexto', $Inscripcion->Contexto->id);
				}

				$this->data['InscripcionFormaPago']['FormaPago'] = $this->data['Inscripcion']['InscripcionFormaPago'];
				$this->data['InscripcionFormaPago']['Inscripcion'] = $Inscripcion->id;
				$this->data['InscripcionFormaPago']['Monto'] = $monto;

				if(ClassRegistry::init('InscripcionFormaPago')->save($this->data)) {
					$idInscripcionFormaPago =  (empty($this->data['InscripcionFormaPago']['EntityId']) && $this->data['InscripcionFormaPago']['EntityId'] == 0) ? ClassRegistry::init('InscripcionFormaPago')->id : $this->data['InscripcionFormaPago']['EntityId'];
				}

                $this->data['Inscripcion']['Fuente'] = 'Cursos';
				$this->data['InscripcionCurso']['MontoCurso'] = $monto;
				$this->data['InscripcionCurso']['FormaPago'] = $this->data['Inscripcion']['InscripcionFormaPago'];
				$this->data['InscripcionCurso']['Inscripcion'] = $Inscripcion->id;
				$Inscripcion->InscripcionCurso->save($this->data['InscripcionCurso']);

				if(!ClassRegistry::init('InscripcionConvenio')->hasAny(array('Inscripcion' => $Inscripcion->id, 'Convenio' => Configure::read('convenio')))) {
					$this->data['InscripcionConvenio']['Convenio'] = Configure::read('convenio');
					$this->data['InscripcionConvenio']['Inscripcion'] = $Inscripcion->id;
					ClassRegistry::init('InscripcionConvenio')->save($this->data);
				}

				if(!empty($Inscripcion->id) && !empty($idInscripcionFormaPago) && !empty($Inscripcion->InscripcionCurso->id) && !$isAjax) {
					ClassRegistry::init('Inscripcion')->saveField($Inscripcion->id, 'Session', base64_encode(date('Y-m-d H:i:s')));
					$this->redirect('/bienvenida');
				} else {
					$response['data']['state'] = 'success';
					$response['data']['id_tbk_oc'] = $idInscripcionFormaPago;
					$response['data']['id_inscripcion'] = $Inscripcion->id;
				}
			}	
			else if(!$isAjax) {
				$this->flash('Existen errores en el formulario', 'dialog dialog-danger');
			} else {
				$response['data']['state'] = 'error';
				$response['data']['mensaje'] = $Inscripcion->validationErrors;
			}
		} else {
			if($data = $Inscripcion->findByEntityId($idInscripcion, array(
							'fields' => array(
								'Nombre', 'Paterno', 'Materno', 'NumeroDocumento', 
								'DocumentoIdentificacion', 'Sexo', 'TelefonoPais', 'TelefonoArea', 'Telefono', 'Mail'
							),
							'recursive' => 0,
							'expects' => array(
								'InscripcionCurso' => array(
									'fields' => array('EntityId', 'Modalidad', 'Localidad'),
									'expects' => array(),
									'limit' => 1
								)
							)
						)
					)
				) 
			{
				$idInscripcionFormaPago = ClassRegistry::init('InscripcionFormaPago')->findByInscripcion($data->getEntityId, array('fields' => 'EntityId'))->getEntityId;
				$this->data = $data->toArray(null, 0, $Inscripcion->alias);
				$this->data['Inscripcion']['DV'] = $this->Rut->generarDigitoVerificador($this->data['Inscripcion']['NumeroDocumento'], true);
				$this->data['InscripcionCurso'] = $this->data['InscripcionCurso'][0];
				$this->data['InscripcionFormaPago']['EntityId'] = $idInscripcionFormaPago;
			}
			
		}

		if($isAjax) {
			die(json_encode($response));
		}
	}

	function ingles() {
		$Contacto = ClassRegistry::init('Contacto');
		$response['response'] = array();
		
		if(!empty($this->data)) {

			$this->data['Contacto']['Para'] = 'contactobci@eclass.cl';
			$this->data['Contacto']['Planilla'] = 4199;
			$this->data['Contacto']['PlanillaCategoria'] = 4;
			$this->data['Contacto']['Asunto'] = "Contacto desde la página Aula Digital BCI";
			$this->data['Contacto']['Campus'] = Configure::read('Campus.id');
			$this->data['Contacto']['Ip'] = $_SERVER['REMOTE_ADDR'];
			$this->data['Contacto']['Usuario'] = $this->Session->check('Usuario') ? $this->Session->read('Usuario.EntityId') : 0;								
			$this->data['Contacto']['Producto'] = 2;
			$this->data['Contacto']['Sistema'] = 33;

			$Contacto->validation = array(
				'Contacto' => array(
					'Nombres'		=>	array(
						'notEmpty'	=>	__('Debe ingresar al menos un nombre.', true)
					),
					'Apellido'		=>	array(
						'notEmpty'	=>	__('Debe ingresar al menos un apellido.', true)
					),
					'Email'	=>	array(
						'email'	=>	__('Debe ingresar un correo electronico valido', true),
					)
				)
			);
			

			if ($Contacto->save($this->data)) {
				$response['response']['status'] = 'success';
				$response['response']['message'] = "Hemos recibido tus datos. Nos pondremos en contacto contigo a la brevedad.";
			} else {
				$response['response']['status'] = 'error';
				$response['response']['message'] = "No se pudo guardar el contacto, revise los siguientes errores: ";

				foreach($Contacto->validationErrors['Contacto'] as $field => $message) {
					$response['response']['message'] .= "{$field}: {$message} ";
				}
			}
		}

		die(json_encode($response));
	}
}

<?php
class Usuarios extends AppController {

	public $components = array('Rut', 'Password');

	public function index() {
		$this->layout = 'blank';
		if ($this->Session->check('Usuario-BCI')) {
		 	$this->redirect($this->url(array('controller' => 'pages', 'action' => 'inicio')));
		}
	}

	public function login() {

		if(!empty($this->data)){
			if(!empty($this->data['Usuario']['Username']) && $this->data['Usuario']['NumeroDocumentoDv'] || $this->data['Empresa']['NumeroDocumento'] || $this->data['Empresa']['DocumentoEmpresaDv']) {
				if($this->Rut->validarRut($this->data['Usuario']['Username'] . '-' . $this->data['Usuario']['NumeroDocumentoDv']) && $this->Rut->validarRut($this->data['Empresa']['NumeroDocumento'] . '-' . $this->data['Empresa']['DocumentoEmpresaDv'])){
					$numeroDocumento = $this->Rut->rutEclass($this->data['Usuario']['Username'] . '-' . $this->data['Usuario']['NumeroDocumentoDv']);
					$numeroDocumentoEmpresa = $this->Rut->rutEclass($this->data['Empresa']['NumeroDocumento'] . '-' . $this->data['Empresa']['DocumentoEmpresaDv']);


					$inscripcion = ClassRegistry::init('Inscripcion');
					$inscripcionExiste = $inscripcion->hasAny(array('NumeroDocumento' => $numeroDocumento[0], 'DocumentoEmpresa' => $numeroDocumentoEmpresa[0]));
					if($inscripcionExiste){
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
						$telefonos = array();
						foreach($usuario->Persona->Telefono as $key => $telefono) {
							$telefonos['Telefonos'][$key] = $telefono->toArray();
						}
						$usuario = $usuario->toArray();
						$usuario = array_merge($usuario, $telefonos);
						$usuario['Usuario']['DV'] = $numeroDocumento[1];
						if(isset($usuario)){
							//logear
							$this->Session->write('Usuario-BCI', $usuario);
							$alumno = $this->Session->read('Usuario-BCI');
							$hash = array();
			    		$hash[] = md5(70); //idCampus
			    		$hash[] = md5($alumno['Usuario']['EntityId']); //idUsuario
			    		$hash[] = 'eclass'; //referers
			    		$hash = implode('/', $hash);
			    		$hash = $this->Password->encrypt($hash);
			    		$hash = str_replace('/', '$!$', $hash);
							$urlCampus = 'https://auladigitalbci.eclass.com/usuarios/external/' . $hash . '/ingreso:true';
							$this->redirect($urlCampus);
						}
					} else {
						$this->flash('Aún no estás registrado en Aula Digital Empresarios,<br /> por favor regístrate a continuación', 'info', '/usuarios/index');
					}
				} else {
					$this->flash('Rut del alumno o de la empresa no son válidos.', 'info', '/usuarios/index');
				}
			}
		}
		$this->flash('Debe ingresar todos los datos solicitados', 'info', '/usuarios/index');
	}
	public function logout(){
		if($this->Session->check('Usuario-BCI')){
			$this->Session->del('Usuario-BCI');
			$this->redirect($this->url(array('controller' => 'usuarios', 'action' => 'index')));
		}else{
			$this->redirect($this->url(array('controller' => 'usuarios', 'action' => 'index')));
		}

	}
}

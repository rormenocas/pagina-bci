<?php
class AppController extends Controller {
	var $components = array('Password');
	var $helpers = array('Form', 'Html', 'Text', 'Session');

	function beforeRender() {
      $tiposDocumentos = array(1 => 'Rut', 2 => 'DNI', 3 => 'Pasaporte', 4 => 'CC');

			$alumno = $this->Session->read('Usuario-BCI');
      $urlCampus = 'javascript:;';
      if(!empty($alumno)) {
        $hash = array();
    		$hash[] = md5(70); //idCampus
    		$hash[] = md5($alumno['Usuario']['EntityId']); //idUsuario
    		$hash[] = 'eclass'; //referers
    		$hash = implode('/', $hash);
    		$hash = $this->Password->encrypt($hash);
    		$hash = str_replace('/', '$!$', $hash);

    		$urlCampus = 'https://auladigitalbci.eclass.com/usuarios/external/' . $hash . '/ingreso:true';
      }

      $this->set(compact('tiposDocumentos', 'urlCampus'));

      $this->set(compact('tiposDocumentos'));

      
  }
}
?>
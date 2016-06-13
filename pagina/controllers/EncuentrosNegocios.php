<?php
	class EncuentrosNegocios extends AppController {
		var $name = 'EncuentrosNegocios';
		public function index() {
			$seminariosAbiertos = ClassRegistry::init('SeminarioAbierto')->videoSeminarios(1);
			$this->set(compact('seminariosAbiertos'));
		}
		function CargarMasSeminarios($offset = 0){
			$this->layout = 'ajax';
			$seminariosAbiertos = ClassRegistry::init('SeminarioAbierto')->videoSeminarios($offset);
			$this->set(compact('seminariosAbiertos'));
		}
	}
<?php
//Router::connect('/diplomado/:id/:region/:slug/',					array('controller' => 'diplomados', 'action' => 'detalle'), array('id' => '[0-9]+', 'region' => '[0-9]+', 'slug' => '[a-z0-9-]+'));
Router::connect('/', 	array('controller' => 'pages', 'action' => 'display', 'inicio'));
Router::connect('/bienvenida', 	array('controller' => 'inscripciones', 'action' => 'bienvenida'));
Router::connect('/inicio', 	array('controller' => 'pages', 'action' => 'display', 'inicio'));
Router::connect('/que_es_aula_digital', 	array('controller' => 'pages', 'action' => 'display', 'que_es_aula_digital'));
Router::connect('/encuentros_negocios', 	array('controller' => 'encuentros_negocios', 'action' => 'index'));
Router::connect('/oferta_academica', 		array('controller' => 'pages', 'action' => 'display', 'oferta_academica'));
Router::connect('/oferta_ingles', 			array('controller' => 'pages', 'action' => 'display', 'oferta_ingles'));
Router::connect('/gracias', 				array('controller' => 'pages', 'action' => 'display', 'gracias'));
Router::connect('/pages/mails/mail_gracias', 				array('controller' => 'pages', 'action' => 'mail_gracias'));
Router::connect('/confirmacion_recepcion', 				array('controller' => 'pages', 'action' => 'display', 'confirmacion_recepcion'));


//Curso descripcion
Router::connect('/curso/:slug/:id/descripcion', 	array('controller' => 'cursos', 'action' => 'descripcion', 'slug' => '[a-z0-9]+', 'id' => '[0-9]+'));
Router::connect('/curso/:slug/:id/modalidades', 	array('controller' => 'cursos', 'action' => 'modalidades', 'slug' => '[a-z0-9]+', 'id' => '[0-9]+'));
Router::connect('/curso/:slug/:id/tematicas', 	array('controller' => 'cursos', 'action' => 'tematicas', 'slug' => '[a-z0-9]+', 'id' => '[0-9]+'));

Router::connect('/comprar/:slug/:modalidad/:id', 	array('controller' => 'inscripciones', 'action' => 'comprar', 'slug' => '[a-z0-9]+', 'modalidad' => '[0-9]+', 'id'));
Router::connect('/pagar/*', array('controller' => 'inscripciones', 'action' => 'pagar'));
?>
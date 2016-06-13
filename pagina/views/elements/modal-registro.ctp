<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="registro">
	<div class="modal-dialog" role="document">
		<div class="modal-header">
			<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Login-BCI_01.jpg', array('class' => 'linea'));?>
			<h1 class="bienvenido">Bienvenido </h1>
        	<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Logo.png', array('alt' => 'BIENVENIDO A Aula Digital Empresarios Una iniciatia Bci', 'class' => 'logo'));?>
		</div>
		<div class="modal-content">
      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true" class="cerrar">&times;</span></button>
			<iframe src="/inscripciones/inscripcion" width="100%" height="600" frameborder="0" allowtransparency="true" id="iframeregistro"></iframe>
		</div>
		<div id="foot">
			<div>
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

<?php if(!empty($seminariosAbiertos)): ?>

<div class="row">
  <?php

  	foreach ($seminariosAbiertos as $seminarioAbierto) {
  		echo '<div class="col-lg-4 col-md-4 col-sm-4 video"><div id="video">';
      	echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminarioAbierto->getFotoVideo() , array("alt" => $seminarioAbierto->getNombre(), "class" => "img-responsive", "data-target" => "#videoModal", "data-title" => $seminarioAbierto->getNombre(), "data-codigo" => $seminarioAbierto->getVideo())) ;
      	echo '</div><div class="descripcion">';
              echo $seminarioAbierto->Expositor[0]->getNombreExpositor() . '<br />'. $seminarioAbierto->getNombre();
      	echo '</div></div>';
  	}
      
  ?> 
</div>
<br />
<?php endif; ?>
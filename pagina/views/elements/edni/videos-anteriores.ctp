<div class="modal-video">
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="redes">
                        <ul>
                            <li>
                                <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/encuentros/facebook.png', array('alt' => 'Compartir en Facebook', 'class' => 'img-responsive facebook', 'data-title' => '', 'data-url' => '')); ?>
                            </li>
                            <li>
                                
                                    <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/encuentros/twitter.png', array('alt' => 'Compartir en Facebook', 'class' => 'img-responsive twitter')); ?>
                                
                            </li>
                            <li>
                                
                                <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/encuentros/mail.png', array('alt' => 'Email', 'class' => 'img-responsive')); ?>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <iframe class="youtube" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ultimos-videos">
	<div class="row">
  		<br>
  		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 video">
		  			<div id="video">
			      		<?php 
			         		echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminariosAbiertos[0]->getFotoVideo() , array("alt" => "Video 1", "class" => "img-responsive", "data-target" => "#videoModal", "data-title" => $seminariosAbiertos[0]->getNombre() , "data-codigo" => $seminariosAbiertos[0]->getVideo())) ;
			      		?>  
			    	</div>
			    	<div class="descripcion">
			      		<?php 
			        		echo $seminariosAbiertos[0]->Expositor[0]->getNombreExpositor() . '<br />'. $seminariosAbiertos[0]->getNombre();
			      		?>
			    	</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 ">
		  			<div class="row">
		  				<div class="col-lg-6 col-md-6 col-sm-6 video">
		  					<div id="video">
				    			<?php 
				       				echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminariosAbiertos[1]->getFotoVideo() , array("alt" => "Video 1", "class" => "img-responsive video", "data-target" => "#videoModal", "data-title" => $seminariosAbiertos[1]->getNombre() , "data-codigo" => $seminariosAbiertos[0]->getVideo())) ;
				    			?>
				  			</div>
				  			<div class="descripcion">
				    			<?php 
				      				echo $seminariosAbiertos[1]->Expositor[0]->getNombreExpositor() . '<br />'. $seminariosAbiertos[1]->getNombre();
				    			?>
				  			</div>

		  				</div>
		  				<div class="col-lg-6 col-md-6 col-sm-6 video">
		  					<div id="video">
				    			<?php 
				       				echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminariosAbiertos[2]->getFotoVideo() , array("alt" => "Video 1", "class" => "img-responsive video", "data-target" => "#videoModal", "data-title" => $seminariosAbiertos[2]->getNombre(), "data-codigo" => $seminariosAbiertos[0]->getVideo())) ;
				    			?>
				  			</div>
				  			<div class="descripcion">
				    			<?php 
				      				echo $seminariosAbiertos[2]->Expositor[0]->getNombreExpositor() . '<br />'. $seminariosAbiertos[2]->getNombre();
				    			?>
				  			</div>
		  				</div>
		  			</div>
		  			<br>
		  			<div class="row">
		  				<div class="col-lg-6 col-md-6 col-sm-6 video">
		  					<div id="video">
					    		<?php 
					       			echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminariosAbiertos[3]->getFotoVideo() , array("alt" => "Video 1", "class" => "img-responsive video", "data-target" => "#videoModal", "data-title" => $seminariosAbiertos[3]->getNombre(), "data-codigo" => $seminariosAbiertos[0]->getVideo())) ;
					    		?>
					  		</div>
					  		<div class="descripcion">
					    		<?php 
					      			echo $seminariosAbiertos[3]->Expositor[0]->getNombreExpositor() . '<br />'. $seminariosAbiertos[3]->getNombre();
					    		?>
					  		</div>
		  				</div>
		  				<div class="col-lg-6 col-md-6 col-sm-6 video">
		  					<div id="video">
					    		<?php 
					       			echo $html->image(Configure::read('App.static') . '/files/seminarios_abiertos/video/'. $seminariosAbiertos[4]->getFotoVideo() , array("alt" => "Video 1", "class" => "img-responsive video", "data-target" => "#videoModal", "data-title" => $seminariosAbiertos[4]->getNombre(), "data-codigo" => $seminariosAbiertos[0]->getVideo())) ;
					    		?>
					  		</div>
					  		<div class="descripcion">
					    		<?php 
					      			echo $seminariosAbiertos[4]->Expositor[0]->getNombreExpositor() . '<br />'. $seminariosAbiertos[4]->getNombre();
					    		?>
					  		</div>
		  				</div>
		  			</div>
				</div>
			</div>
			<br />
		</div>
	</div>
</div>
<div class="mas-videos">
    <a id="cargar_mas_videos">Ver más  <i class="fa fa-angle-double-down"></i></a> 
</div>

<script type="text/javascript">
	$script.ready('jquery', function() {
		function check_video(){
			$.ajax({
				url: "/encuentros_negocios/cargar_mas_seminarios/"+Math.ceil( ($('div#video').length/6)+1 ),
			}).done(function(response) {
				if (response.length < 1){
					$('#cargar_mas_videos').html('No hay más videos');
					$('#cargar_mas_videos').removeAttr('id');
				}
			});
		}

        $('#cargar_mas_videos').on('click',function(e){
        	e.preventDefault();
        	console.log(Math.ceil( ($('div#video').length/6)+1 ));
        	$.ajax({
				url: "/encuentros_negocios/cargar_mas_seminarios/"+Math.ceil( ($('div#video').length/6)+1 ),
			}).done(function(response) {
				if (response.length > 0){
					$('.ultimos-videos').append(response);
				}
				check_video();
			});
		});

		$('.video').on('click', '.video', function(){
			var url = "https://www.youtube.com/embed/";
			$('#videoModal').modal();
			var video = $(this).find('img').attr('data-codigo');
			$('.youtube').attr('src', url + video );
			$('.youtube').attr('data-title', $(this).find('img').attr('data-title'));
			$('.youtube').attr('data-url', $(this).find('img').attr('data-url'));
			$('.youtube').attr('data-codigo', $(this).find('img').attr('data-codigo'));
		});

		$('.video').on('mouseenter', '.video', function(){
			$(this).children('.descripcion').last().show('slow');
		});
		$('.video').on('mouseleave', '.video', function(){
			$(this).children('.descripcion').last().hide('slow');
		});

		$('.twitter').on('click', function(){
            var winTop = (screen.height / 2) - (300 / 2);
            var winLeft = (screen.width / 2) - (500 / 2);
            title = 'Estoy viendo ' + $('.youtube').attr('data-title'); 
            code = $('.youtube').attr('data-codigo');
            window.open('https://twitter.com/intent/tweet?url=https://youtu.be/' + code +  '&text=' + title + '&via=eClass&hashtags=EDNI2016', 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        });

		$('.facebook').on('click', function(){
            var winTop = (screen.height / 2) - (300 / 2);
            var winLeft = (screen.width / 2) - (500 / 2);
            title = 'Estoy viendo ' + $('.youtube').attr('data-title');
            code = $('.youtube').attr('data-codigo');
            window.open('https://www.facebook.com/dialog/share?app_id=87741124305&href=https://www.youtube.com/attribution_link%3Fa%3DvdJyBACwD6k%26u%3D%252Fwatch%253Fv%253D' + code + '%2526feature%253Dshare&display=popup&redirect_uri=https://www.youtube.com/facebook_redirect', 'sharer', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        });
		
	});
</script>
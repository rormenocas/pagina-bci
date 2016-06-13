
<?php $this->pageTitle = 'Inicio'?>
<div class="banner">
		<div id="myCarousel" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            	<li data-target="#myCarousel" data-slide-to="1"></li>
            	<li data-target="#myCarousel" data-slide-to="2"></li>
            	<li data-target="#myCarousel" data-slide-to="3"></li>            	
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
            	<div class="active item ">
					<h1 class="invisible"></h1>
                    <?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner_home2016.jpg', array('alt' => '', 'style' => 'width: 100%;', 'class' => 'visible-lg')), $html->url('http://www.eclass.cl/encuentros', true), array('title' => '', 'escape' => false, 'target' => '_blank'));?>
                </div>
	            <div class="item">
                    <?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner-2-2016.jpg', array('alt' => 'Conoce cómo BCI Empresarios te ayuda a facilitar tus importaciones y a hacer más ágil tu negocio - BCI Empresarios - Simplificamos su Logistica', 'style' => 'width: 100%;', 'class' => 'visible-lg')), $html->url('http://www.bci.cl/empresarios/logistica_kla.html', true), array('title' => '', 'escape' => false));?>
                </div>
            	<div class="item">
            		<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner-3-2016.jpg', array('alt' => 'Nos reinventamos para ti - Ahora compra tus dólares en la App Bci Empresarios')), $html->url('http://www.bci.cl/empresarios/nos_reinventamos_para_ti.html', true), array('title' => '', 'escape' => false, 'target' => '_blank'));?>                    
                </div>
            	<div class="item">
            		<?php echo $html->link($html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/banners/banner-4-2016.png', array('alt' => 'Nuevo beneficio exclusivo de tu tarjeta de Crédito Bci Empresarios. hasta $30.000.- mensuales - INFORMATE AQUI - Hechos concretos, no palabras - Infórmese sobre la garantía estatal de los depósitos en su banco o en www.sbif.cl')), $html->url('http://www.bci.cl/empresarios/tarjetas/cashBack.html', true), array('title' => '', 'escape' => false, 'target' => '_blank'));?>                    
                </div>
            </div>
        </div>
    </div>
<?php $user = ($this->Session->read('Usuario-BCI')); ?>
<div class="home">
	<div class="container">
		<div class="row">
			<div class="bg">
				<div class="container">
					<div class="row">
						<!--<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
						   <div class="modal-dialog">
						       <div class="modal-content">
						           <div class="modal-body">
						               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						               <div>
						                   <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
						               </div>
						           </div>
						       </div>
						   </div>
						</div>-->
						<div class="modal fade" id="modalPagina" tabindex="-1" role="dialog" aria-labelledby="modalPagina" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<iframe src="" frameborder="0" allowfullscreen id="pagina"></iframe>
									</div>
								</div>
							</div>
						</div>		
						<div class="videos-links col-lg-12" align="center">
							<div class="row">	
								<div class="col-lg-4 col-lg-offset-1 valor-empresario" data-pagina="https://www.bci.cl/valorempresario">
										<div class="enlace-valor">
											<p class="link-valor"></p>
										</div>
								</div>
								<div class="col-lg-4 col-lg-offset-2 letra-grande" data-pagina="https://www.conletragrande.cl/">
									<div class="enlace-videos">
										<p class="link-sitio">
											
										</p>
									</div>
								</div>
								<!--<div class="col-lg-4">
									<a href="http://auladigitalbci.eclass.cl/que_es_aula_digital/" class="enlace-edni">
										<div class="link-endi">
											
										</div>
									</a>
								</div>-->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>¿Qué es Aula Digital Empresarios?<span class="division-right"></span>
						</div>
					</div>
					<div class="row">
						<div class="sobre-aula">
							<p>
								Aula Digital Empresarios es una plataforma online diseñada exclusivamente para Clientes Bci Empresarios, que además de ayudarte a sacar un máximo provecho de todos los productos y servicios ofrecidos por el banco, pone a tu disposición contenido valioso y herramientas útiles para gestionar de la mejor manera tu negocio y potenciar su crecimiento. Disfruta la flexibilidad e interactividad que te ofrece Aula Digital Empresarios. 
								Aprende a tu propio ritmo y accede con total libertad al contenido de cursos las 24 horas del día, los 7 días de la semana.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="titulo">
							<span class="division-left"></span>Aprovecha los beneficios de Aula Digital Empresarios<span class="division-right"></span>
						</div>
					</div>

					<div class="row">
						<div class="beneficios">
							<div class="span3 conoce">
								<p>Conoce <br> mejor tu Banco</p>
							</div>
							<div class="span3 herramientas">
								<p>Obtén herramientas <br> para potenciar tu negocio</p>
							</div>
							<div class="span3 disponibilidad">
								<p>Aprende a tu ritmo: <br> Plataforma disponible 24/7</p>
							</div>
							<div class="span3 clientes">
								<p>Beneficio exclusivo <br> clientes Bci</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cursos">
							<div class="titulo">
								<span class="division-left"></span>Cursos<span class="division-right"></span>
							</div>
							<div class="subtitulo">
								<p>Te ofrecemos los mejores cursos para potenciar tu Pyme, ¡Prepárate para nuevos desafíos!</p>
							</div>
							<div class="banners-btn col-lg-12">
								<div class="row">
									<div class="productos-servicios col-lg-4">
										<div class="titulo-banner">
											<h1>CURSOS <br>DE PRODUCTOS Y SERVICIOS Bci</h1>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('VER MÁS <i class="fa fa-chevron-right"></i>', '/oferta_academica#!productos-servicios', array('escape' => false, 'title' => 'VER MÁS')); ?>
										</div>
									</div>
									<div class="desarrollo-profesional col-lg-4">
										<div class="titulo-banner">
											<h1>CURSOS<br>DE DESARROLLO PROFESIONAL</h1>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('VER MÁS <i class="fa fa-chevron-right"></i>', '/oferta_academica#!desarrollo-profesional', array('escape' => false, 'title' => 'VER MÁS')); ?>
										</div>
									</div>
									<div class="negocios-ingles col-lg-4">
										<div class="titulo-banner">	
											<h1>PROGRAMAS DE CAPACITACIÓN <br>EN NEGOCIOS E INGLÉS</h1>
										</div>
										<div class="btn-custom">
											<?php echo $html->link('VER MÁS <i class="fa fa-chevron-right"></i>', '/oferta_academica#!negocios-ingles', array('escape' => false, 'title' => 'VER MÁS')); ?>
										</div>	
									</div>
								</div>
							</div>
							<div class="fechas-inicio col-lg-12">
								<div class="row">
									<div class="cursos-disponibles col-lg-4">
										<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/home/logo-bci.png', array('alt' => '', 'width' => 126 , 'height' => 53 , 'class' => 'visible-lg visible-sm visible-md logo-bci' ));?>
										<i class="fa fa-check"></i><p>Cursos siempre disponibles </p>
									</div>
									<div class="prox-inicios1 col-lg-4">
											<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/home/logo-eclass.png', array('alt' => '', 'width' => 156 , 'height' => 53 , 'class' => 'visible-lg visible-sm visible-md logo-eclass' ));?>
											<?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/home/logo-bci.png', array('alt' => '', 'width' => 126 , 'height' => 53 , 'class' => 'visible-lg visible-sm visible-md logo-bci' ));?>
											<i class="fa fa-calendar"></i><p>Revisa próximos inicios</p>
									</div>
									<div class="prox-inicios2 col-lg-4">
										<p class="valores-pyme">
											Valores preferenciales Clientes Banca Pyme <br>
											- Cursos @UAI <br>
											- Cursos de Inglés
										</p>
										<i class="fa fa-calendar"></i><p>Revisa próximos inicios</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
<div class="banner-foot-home">
	<div class="btn-masinfo">
		<?php echo $html->link('MÁS INFORMACIÓN', 'http://www.bci.cl/empresarios/logistica_kla.html', array('escape' => false, 'title' => 'VER INFORMACIÓN', 'target' => '_blank')); ?>
	</div>
</div>
<script type="text/javascript">
$script.ready('jquery', function(){
    
    $(function() {
        $script.ready('bootstrap', function(){
            $('.carousel').carousel({
              interval: 5000,
            });  
        
        var max = $('#myCarousel li').length -1;
            var mostrar = 1 + Math.floor(Math.random() * max);
            var contador = 1;
            $('#myCarousel li').each(function(){
                if(contador == mostrar) {
                    $(this).trigger('click');
                }
                contador++;
            })  
        });
        $('.videos-carousel img').on('click',function(){
			var url = "https://www.youtube.com/embed/";
			$('#videoModal').modal();
			var video = $(this).attr('data-codigo');
			$('.youtube').attr('src', url + video );
		});

        $('.valor-empresario').on('click',function(){       
        	console.log($(this).attr('data-pagina'));
        	$('#pagina').attr('src', $(this).attr('data-pagina'));
        	$('#modalPagina').modal();
        });
        $('.letra-grande').on('click',function(){       
        	console.log($(this).attr('data-pagina'));
        	$('#pagina').attr('src', $(this).attr('data-pagina'));
        	$('#modalPagina').modal();
        });

		$('div.videos-carousel img').on('mouseenter', function(){
			$(this).next().show();
		});
		$('div.videos-carousel img').on('mouseleave', function(){
			$(this).next().hide();
		});
    });
    
});
</script>


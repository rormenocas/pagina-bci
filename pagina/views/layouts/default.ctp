<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--<meta name="viewport" content="width=device-width">-->
    <meta name="description" content="" />
    <link href="<?php echo Configure::read('App.static'); ?>/assets/img/favicon-bci.png" rel="shortcut icon" type="image/png" />
    <title><?php echo (!empty($title_for_layout) ? $title_for_layout : 'Estudia en la U. Adolfo Ibáñez un Diplomado Semipresencial'); ?></title>

    <?php 
    if(!empty($keywords)) {
        echo '<meta name="keywords" content="' . $keywords . '">';  
    }
    ?>

    <?php 
        echo $html->css(
            array(
                Configure::read('App.static') . '/assets/css/bootstrap-2.3.2.min',
                Configure::read('App.static') . '/apps/default/css/font-awesome.min'
            )
        ); 
        echo $html->css(
            Configure::read('App.static') . '/apps/pagina_aulabci/css/main', '1'
        );
    ?>

    <link rel="alternate" type="application/rss+xml" title="Noticias RSS Feed" href="/novedades/rss" />
    <link rel="alternate" type="application/rss+xml" title="Articulos RSS Feed" href="/articulos/rss" />

    <!--[if lt IE 7]>
        <?php echo $html->css(
            array(
                Configure::read('App.static') . '/assets/css/font-awesome-ie7-3.2.1.min.css'
            )
        ); ?>
        <link rel="stylesheet" href="css/font-awesome/3.2.1/font-awesome-ie7.min.css">
    <![endif]-->
    <div id="fb-root"></div>
    <script>
        /*!
         * $script.js Async loader & dependency manager
         * https://github.com/ded/script.js
         * (c) Dustin Diaz, Jacob Thornton 2011
         * License: MIT
         */
        (function(a,b){typeof module!="undefined"?module.exports=b():typeof define=="function"&&define.amd?define(a,b):this[a]=b()})("$script",function(){function q(a,b,c){for(c=0,j=a.length;c<j;++c)if(!b(a[c]))return k;return 1}function r(a,b){q(a,function(a){return!b(a)})}function s(a,b,i){function o(a){return a.call?a():d[a]}function p(){if(!--n){d[m]=1,k&&k();for(var a in f)q(a.split("|"),o)&&!r(f[a],o)&&(f[a]=[])}}a=a[l]?a:[a];var j=b&&b.call,k=j?b:i,m=j?a.join(""):b,n=a.length;return setTimeout(function(){r(a,function(a){if(h[a])return m&&(e[m]=1),h[a]==2&&p();h[a]=1,m&&(e[m]=1),t(!c.test(a)&&g?g+a+".js":a,p)})},0),s}function t(c,d){var e=a.createElement("script"),f=k;e.onload=e.onerror=e[p]=function(){if(e[n]&&!/^c|loade/.test(e[n])||f)return;e.onload=e[p]=null,f=1,h[c]=2,d()},e.async=1,e.src=c,b.insertBefore(e,b.firstChild)}var a=document,b=a.getElementsByTagName("head")[0],c=/^https?:\/\//,d={},e={},f={},g,h={},i="string",k=!1,l="push",m="DOMContentLoaded",n="readyState",o="addEventListener",p="onreadystatechange";return!a[n]&&a[o]&&(a[o](m,function u(){a.removeEventListener(m,u,k),a[n]="complete"},k),a[n]="loading"),s.get=t,s.order=function(a,b,c){(function d(e){e=a.shift(),a.length?s(e,d):s(e,b,c)})()},s.path=function(a){g=a},s.ready=function(a,b,c){a=a[l]?a:[a];var e=[];return!r(a,function(a){d[a]||e[l](a)})&&q(a,function(a){return d[a]})?b():!function(a){f[a]=f[a]||[],f[a][l](b),c&&c(e)}(a.join("|")),s},s})
        
        
        /*!
         * Social Plugins
         */
        //$script('https://apis.google.com/js/plusone.js');
        //$script("//platform.twitter.com/widgets.js");
        $script('//connect.facebook.net/es_LA/all.js?#appId=446059248843775&amp;xfbml=1&xfbml=1');
        var WebFontConfig = {
            google: { families: [ 'Neuton:300,400,700,400italic', 'Lato:300,400,400italic,700,700italic,900:latin' ] }
        };

        $script('//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', function(){});
        
        /*!
         * Libs
         */
        $script('<?php echo Configure::read('App.static'); ?>/assets/js/vendor/modernizr-2.6.2.min.js', 'lmodernizr', function(){
            $script('<?php echo Configure::read('App.static'); ?>/assets/js/vendor/jquery-1.10.2.min.js', 'jquery', function() {

                $('#OptTipoDocumento').change(function() {
                    if($(this).val() == 1) {
                        $('#OptUsernameDev').show();
                    } else {
                        $('#OptUsernameDev').hide();
                    }
                });


                $script('<?php echo Configure::read('App.static'); ?>/assets/js/vendor/bootstrap-2.3.2.min.js', 'bootstrap', function() {
                    
                    $('[data-spy=affix]').each(function(i,element){
                        var offset = $(element).position();
                        
                        offset.top = $(element).attr('data-offset-top');
                            
                        $(element).affix({
                            offset: {
                                top: offset.top,
                                left: offset.left
                            }
                        });
                    });
                    
                    $script('<?php echo Configure::read('App.static'); ?>/assets/js/flatui-1.1.js');
                    $script('<?php echo Configure::read('App.static'); ?>/assets/js/plugins.js', 'plugin');
                    $script('<?php echo Configure::read('App.static'); ?>/assets/js/main.js');
                    $script('<?php echo Configure::read('App.static'); ?>/apps/pagina-cursosonline/js/numeral-1.5.1.min.js', 'numeral');
                    $script('<?php echo Configure::read('App.static'); ?>/apps/pagina-uaichile/js/masonry.pkgd.min.js', 'masonry');
                    $script('<?php echo Configure::read('App.static'); ?>/apps/capacitacion/js/jwplayer.js', 'jwplayer');
                });
            });
        });
    </script>
</head>
<body>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5LFZMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LFZMD');</script>
<!-- End Google Tag Manager -->
	
    <div id="main" class="">
        <div id="inner">
            <div id="head" class="navbar-fixed-top visible-lg visible-md visible-sm">
                <!-- Crear elemento -->
                <div id="logo">
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-2 col-sm-2">
                                    <div class="logo-aula">
                                        <?php echo $html->link('', '/', array('title' => 'Inicio', 'escape' => false));?>
                                    </div>
                                </div>
                                <div class="col-lg-offset-5 col-lg-3 col-md-offset-5 col-md-3 col-sm-offset-5 col-sm-3 aula-digital">
                                     <?php echo $this->element('login');?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 menu-principal">
                    <div class="container">
                        <?php echo $this->element('menu-principal');?>
                    </div>
                </div>
            </div>
            <div id="body">
                
                <?php
                    echo $session->flash();
                    echo $content_for_layout; 
                    echo $this->element('modal-registro');
                ?>
            </div>
            <div id="foot">
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
                        <div class="row">
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
    </div>
</div>
    <script type="text/javascript">
     
    </script>
</body>
</html>
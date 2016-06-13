<div class="menu">
    <ul>
        <?php
        $url = '';
        if (isset($this->params['url']['url'])) {
            $url = $this->params['url']['url'];
        }
        ?>
        <li<?php echo (preg_match('/^inicio/', isset($url) ? $url : '') ? ' class="active"' : ''); ?>>
            <?php echo $html->link('Inicio', '/inicio', array('escape' => false, 'title' => 'INICIO')); ?>
        </li>
        <!--<li<?php //echo (preg_match('/^encuentros_negocios/', isset($url) ? $url : '') ? ' class="active"' : ''); ?>>
            <?php //echo $html->link('ENCUENTROS DE NEGOCIOS ECLASS', array('controller' => 'encuentros_negocios', 'action' => 'index'), array('escape' => false, 'title' => 'ENCUENTROS DE NEGOCIOS ECLASS')); ?>
        </li>-->
        <li<?php echo (preg_match('/^oferta_academica/', isset($url) ? $url : '') ? ' class="active"' : ''); ?>>
            <?php echo $html->link('CURSOS', '/oferta_academica', array('escape' => false, 'title' => 'CURSOS')); ?>
        </li>
        <li<?php echo (preg_match('/^contacto/', isset($url) ? $url : '') ? ' class="active"' : ''); ?> style="margin-right: 0;">
            <?php echo $html->link('Contacto', '', array('escape' => false, 'title' => 'CONTACTO', 'data-toggle' => "dropdown", 'role' => "button", 'aria-haspopup' => true, 'aria-expanded' => false)); ?>
            <ul class="dropdown-menu menu-contacto">
                <li><i class="fa fa-user"></i> Coordinadora: Paula Vivero</li>
                <li><i class="fa fa-phone"></i>Teléfono: <a href="tel:+56229508940" class="telefono"> 56 2 29508940</a></li>
                <li><i class="fa fa-envelope"></i>Mail: auladigitalbci@eclass.cl</li>
            </ul>
        </li>
        <div class="clear"></div>
    </ul>
</div>
<?php   
$this->layout = 'blank'; ?>

<div id="login">
    <div class="header">
        <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Login-BCI_01.jpg', array('class' => 'linea'));?>
        <h1 class="bienvenido">Bienvenido</h1>
        <?php echo $html->image(Configure::read('App.static') . '/apps/pagina_aulabci/img/modal/Logo.png', array('alt' => 'BIENVENIDO A Aula Digital Empresarios Una iniciatia Bci', 'class' => 'logo'));?>    
    </div>
    
    <div class="formulario">
        <div class="titulo">
            Ingresa el RUT de tu empresa y tu RUT personal para entrar
            <?php $session->flash(); ?>
        </div>
        <div class="body">
            <?php echo $form->create(null, array('action' => 'login', 'class' => 'login')); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-suitcase"></i></div>
                    <div class="input-group-addon info-empresa">RUT Empresa</div>
                    <?php
                        echo $form->input('Empresa.NumeroDocumento', array(
                            'label' => false,
                            'class' => 'Rut form-control',
                            'required' => 'required',
                            'placeholder' => 'RUT Empresa',
                            'style' => 'width:160px',
                            'after' => $form->input(
                                'Empresa.DocumentoEmpresaDv', array(
                                    'label' => false,
                                    'class' => 'RutEmpresaDv form-control',
                                    'maxlength' => 1,
                                    'required' => 'required',
                                    'placeholder' => 'DV',
                                    'style' => 'height: 30px;
                                            border: 1px solid #bdc3c7;
                                            width: 40px;
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            border-radius: 5px;'
                                )
                            )
                        ));
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <div class="input-group-addon info-persona">RUT Persona</div>
                        <?php
                            echo $form->input('Usuario.Username', array(
                                'label' => false,
                                'class' => 'RutPersona form-control',
                                'required' => 'required',
                                'placeholder' => 'RUT Persona',
                                'style' => 'width: 155px', 
                                'after' => $form->input(
                                    'Usuario.NumeroDocumentoDv', array(
                                        'label' => false,
                                        'class' => 'NumeroDocumentoDv form-control',
                                        'maxlength' => 1,
                                        'required' => 'required',
                                        'placeholder' => 'DV',
                                        'style' => 'height: 30px;
                                                border: 1px solid #bdc3c7;
                                                width: 40px;
                                                position: absolute;
                                                top: 0;
                                                right: 0;
                                                border-radius: 5px;'
                                    )
                                )
                            ));
                        ?>
                </div>
            </div>
        </div>
        <div class="form-group contacto">
            <i class="fa fa-user"></i> <strong>Coordinadora:</strong> Daniela de la Fuente &nbsp; &nbsp;<i class="fa fa-envelope"></i> <strong>Mail:</strong> auladigitalbci@eclass.cl<br />
            <i class="fa fa-phone"></i><strong>Teléfono:</strong> <a href="tel:+56229508959" class="telefono"> 56 2 29508959</a>
            
        </div>
        <div class="form-group" style="text-align: center;">
            <button type="submit" class="enviar">Entrar   <i class="fa fa-chevron-right"></i></button>
            <?php
                echo $form->end(); 
            ?>
        </div>
    </div>
    <div class="opciones">
        <p class="pregunta">¿Eres nuevo?</p>
            <?php 
                echo $html->link('Registrate Aquí', '#', array('title' => 'Conócenos', 'escape' => false, 'class' => 'registrate', 'data-toggle' => 'modal', 'data-target' => '#registro',  'data-dismiss' => 'modal' ));
            ?>    
        <p class="clientes">Acceso sólo para clientes Pyme Bci</p>
    </div>    
</div>
<?php 
    echo $this->element('modal-registro');
?>
<script type="text/javascript">
$script.ready('jquery', function() {
    $(document).on('ready', function() {
        $('#registro').on('shown.bs.modal', function() {
            $('body').attr('style', 'overflow:hidden');
        });
        $('#registro').on('hidden.bs.modal', function() {
            $('body').attr('style', 'overflow:auto');
        });
    });
});
</script>
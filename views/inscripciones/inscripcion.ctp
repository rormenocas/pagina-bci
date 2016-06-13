<div id="registro">

    <div class="formulario">
        <div class="titulo">
            Ingresa tus datos para obtener usuario y clave de acceso
            <?php $session->flash(); ?>
        </div>
        <div class="modal-body">
            <?php echo $form->create(null,array('url' => array('controller' => 'inscripciones', 'action' => 'inscripcion'))); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-suitcase"></i></div>
                    <div class="input-group-addon info">RUT Empresa - Cliente BCI</div>
                    <?php
                        echo $form->input('Inscripcion.DocumentoEmpresa', array(
                            'label' => false,
                            'class' => 'RutEmpresa form-control',
                            'placeholder' => 'RUT Empresa - Cliente BCI',
                            'required' => 'required',
                            'after' => $form->input(
                                'Inscripcion.DocumentoEmpresaDv', array(
                                    'label' => false,
                                    'class' => 'RutEmpresaDv form-control',
                                    'maxlength' => 1,
                                    'placeholder' => 'DV',
                                    'required' => 'required'
                                )
                            )
                        ));
                        
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <div class="input-group-addon info">RUT Persona</div>
                        <?php
                            echo $form->input('Inscripcion.NumeroDocumento', array(
                                'label' => false,
                                'class' => 'RutPersona form-control',
                                'placeholder' => 'RUT Persona',
                                'after' => $form->input('Inscripcion.NumeroDocumentoDv', 
                                    array(
                                        'label' => false,
                                        'class' => 'RutPersonaDv form-control',
                                        'maxlength' => 1,
                                        'placeholder' => 'DV',
                                        'required' => 'required'
                                    )
                                ),
                                'required' => 'required'
                            ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <div class="input-group-addon info">Nombres</div>
                        <?php
                            echo $form->input('Inscripcion.Nombre', array(
                                'label' => false,
                                'class' => 'Nombre form-control',
                                'placeholder' => 'Nombres',
                                'required' => 'required'
                            ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <div class="input-group-addon info">Apellido Paterno</div>
                        <?php
                            echo $form->input('Inscripcion.ApellidoPaterno', array(
                                'label' => false,
                                'class' => 'ApellidoPaterno form-control',
                                'placeholder' => 'Apellido Paterno',
                                'required' => 'required'
                            ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <div class="input-group-addon info">Apellido Materno</div>
                        <?php
                            echo $form->input('Inscripcion.ApellidoMaterno', array(
                                'label' => false,
                                'class' => 'ApellidoMaterno form-control',
                                'placeholder' => 'Apellido Materno',
                                'required' => 'required'
                            ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <div class="input-group-addon info">Correo Electrónico</div>
                        <?php
                            echo $form->input('Inscripcion.Email', array(
                                'label' => false,
                                'class' => 'Email form-control',
                                'placeholder' => 'Correo Electrónico',
                                'required' => 'required'
                            ));
                        ?>
                </div>
            </div>


            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-phone-square"></i></div>
                    <div class="input-group-addon info">Celular</div>
                        <?php
                            echo $form->input(
                                'Inscripcion.Telefono', 
                                array(
                                    'type' => 'text',
                                    'placeholder' => 'Número',
                                    'required' => 'required',
                                    'between' => 
                                        $form->input(
                                            'Inscripcion.TelefonoArea', 
                                                array(
                                                    'class' => 'TelefonoArea',
                                                    'required' => 'required',
                                                    'maxlength' => 3, 
                                                    'div' => false, 
                                                    'label' => false,
                                                    'value' => '9',
                                                    'before' => $form->input(
                                                        'Inscripcion.TelefonoPais', array(
                                                            'value' => '56', 
                                                            'class' => 'TelefonoPais',
                                                            'required' => 'required',
                                                            'maxlength' => 3, 
                                                            'div' => false, 
                                                            'label' => false,
                                                            'placeholder' => 'País'
                                                        )
                                                    )
                                                )
                                            ), 
                                    'label' => false,
                                    'class' => 'Telefono', 
                                    'maxlength' => 20,
                                    'required' => 'required'
                                )
                            );
                        ?>
                </div>
            </div>
            <div class="form-group autorizo">
                <?php 
                    echo $form->input('Inscripcion.TerminoCondicion', 
                        array(
                          'label'=>false, 
                          'type'=>'checkbox',
                          'after' => '<label style="font-weight: normal; padding: 5px; position:relative; top: 3px;">Acepto <a href="'. Configure::read('App.static') . '/apps/pagina_aulabci/files/terminos-condiciones-bci.pdf" target="_blank">términos y condiciones</a></lablel>',
                          'div' => false
                         )
                    );
                ?>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="enviar">Entrar   <i class="fa fa-chevron-right"></i></button>
            <?php
                echo $form->end(); 
            ?>
        </div>
    </div>
</div>
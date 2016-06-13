<div style="margin-left: 30px;">
    <p>
        BCI te invita a seguir perfeccionándote
    </p>
    <p>
        Estudia con la metodología online de eClass, en el momento y lugar que quieras.
    </p>
       
    <?php 
        echo $form->create(null, array('action' => 'curso_perfeccionamiento')); 

        echo $form->input('Contacto.Nombres', array(
            'label' => 'Nombres'
        ));
        echo $form->input('Contacto.Apellidos', array(
            'label' => 'Apellidos'
        ));
        echo $form->input('Contacto.TelefonoArea', array(
            'label' => 'Codigo de area'
        ));
        echo $form->input('Contacto.Telefono', array(
            'label' => 'Teléfono'
        ));
        echo $form->input('Contacto.CelularArea', array(
            'label' => 'Codigo de area'
        ));
        echo $form->input('Contacto.Celular', array(
            'label' => 'celular'
        ));
        echo $form->input('Contacto.Email', array(
            'label' => 'Email'
        ));
        foreach ($cursos as $curso) {
            $nombreCurso = $curso->getNombre;
            echo $form->checkbox('Contacto.Curso.' . $curso->getEntityId, array(
                'label' => array('text' =>  __($nombreCurso . ' ')),
                'value' => $nombreCurso
            )) . '<br />' ;
        }
        echo $form->checkbox('Contacto.Acepto', array(
            'label' => array('text' =>  __('Autorizo a eClass a enviarme información via email')),
            'checked' => true
        ));
        echo $form->end('Entrar'); 
    ?>
</div>
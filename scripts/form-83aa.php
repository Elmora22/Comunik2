<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Mensaje',
    'email_message' => 'Tienes un Nuevo Envío de Formulario',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'date' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Fecha',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Fecha\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nombre docente',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nombre docente\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Informativo',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Informativo\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Urgente',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Urgente\' is required.'
    )
    ),
    'radiobutton' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Recordatorio',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Recordatorio\' is required.'
    )
    ),
    'Asunto' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Asunto',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Asunto\' is required.'
    )
    ),
    'message' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'Crear mensaje',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Crear mensaje\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>
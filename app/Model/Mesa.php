<?php

class Mesa extends AppModel{
    public $belongsTo = array(
        'Mesero' => array(
            'className' => 'Mesero',
            'foreignKey' => 'mesero_id'
        )
    );
    public $validate = array(
        'serie' => array(
            'vacia' => array(
                'rule' => 'notEmpty',
                'message' => 'Serie es un campo obligatorio'
            ),
            'numerica' => array(
                'rule' => 'numeric',
                'message' => 'Debe ser un número'
            ),
            'unica' => array(
                'rule' => 'isUnique',
                'message' => 'Ya existe'
            )
        ),
        'puestos' => array(
            'vacia' => array(
                'rule' => 'notEmpty',
                'message' => 'Puestos es un campo obligatorio'
            ),
            'numerica' => array(
                'rule' => 'numeric',
                'message' => 'Debe ser un número'
            )
        ),
        'posicion' => array(
            'vacia' => array(
                'rule' => 'notEmpty',
                'message' => 'Posición es un campo obligatorio'
            )
        )
    );
}
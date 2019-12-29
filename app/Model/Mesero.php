<?php

class Mesero extends AppModel
{
    public $validate = array(
        'dni'=>array(
            'Campo requerido' => array( 'rule'=>'notEmpty' ),
            'unico' => array(
                'rule' => 'isUnique',
                'message' => 'Ya existe otro mesero con este DNI'
            )
        ),
        'nombre'=>array(
            'Campo requerido' => array( 'rule'=>'notEmpty' ),
        ),
        'apellido'=>array(
            'Campo requerido' => array( 'rule'=>'notEmpty' ),
        ),
        'telefono'=>array(
            'Campo requerido' => array( 'rule'=>'notEmpty' ),
        ),
    );
}
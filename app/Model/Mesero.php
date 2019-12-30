<?php

class Mesero extends AppModel
{
    public $hasMany = array(
        'Mesa' => array(
            'className' => 'Mesa',
            'foreingKey' => 'mesero_id',
            'conditions' => '',
            'order' => 'Mesa.serie Desc',
            'depend' => false
        )
    );
    // mesero_id es el campo que contiene la tabla mesas, con relacion al mesero. 
    // depend es para indicar que no se borre en cascada, si eliminamos un Mesero, que no se eliminen sus mesas.

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
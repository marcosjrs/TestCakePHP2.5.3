<?php

class Mesero extends AppModel
{
    //https://book.cakephp.org/2/en/models/virtual-fields.html
    //se usará al hacer $this->set('meseros',$this->Mesa->Mesero->find('list')); en MesasController, 
    //para pasarle los datos a la vista para hacer un selector de meseros disponibles, al crear una mesa
    //Meterá (CONCAT (`Mesero`.`nombre`, " ", `Mesero`.`apellido`)) AS `Mesero__nombre_completo` en el select, 
    /* En el controlador, luego en lugar del find anterior, usará el $virtualFields de la siguiente forma:
    $this->set('meseros', $this->Mesa->Mesero->find('list', 
                                            array('fields'=>array('id','nombre_completo')) 
                                        ));
    */
    public $virtualFields = array('nombre_completo' => 'CONCAT (Mesero.nombre, " ", Mesero.apellido)');

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
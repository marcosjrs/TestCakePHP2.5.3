<?php

class MeserosController extends AppController
{
    public $helpers = array('Html','Form');

    //acción index
    public function index()
    {
        $this->set('meseros',$this->Mesero->find('all'));
    }

    public function detalle($idMesero = null){
        if(!$idMesero){
            throw new NotFoundException('Falta parámetro id del Mesero');
        }
        $mesero = $this->Mesero->findById($idMesero);
        if(!$mesero){
            throw new NotFoundException('No existe un mesero con ese id');
        }
        $this->set('mesero',$mesero);
    }
}
<?php

class MeserosController extends AppController
{
    public $helpers = array('Html','Form');
    public $components = array('Session');

    //acción index
    public function index()
    {
        $this->set('meseros',$this->Mesero->find('all'));
    }

    public function ver($idMesero = null){
        if(!$idMesero){
            throw new NotFoundException('Falta parámetro id del Mesero');
        }
        $mesero = $this->Mesero->findById($idMesero);
        if(!$mesero){
            throw new NotFoundException('No existe un mesero con ese id');
        }
        $this->set('mesero',$mesero);
    }

    public function crear(){
        if($this->request->is('post')){
            //se ha llegado a través de una petición de un formulario
            //$this->Mesero->create();
            if($this->Mesero->save($this->request->data)){
                $this->Session->setFlash('Meser@ grabad@ correctamente','default',
                        array('class'=>'success')
                    );
                $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('No se pudieron guardar los datoscrear el mesero');
        }
    }
}
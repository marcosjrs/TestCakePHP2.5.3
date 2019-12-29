<?php

class MeserosController extends AppController
{
    public $helpers = array('Html','Form','Time');
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
            $this->Session->setFlash('No se pudieron guardar los datos');
        }
    }

    public function editar($idMesero = null){
        //recogida y sus comprobaciones
        if(!$idMesero){
            throw new NotFoundException('Falta parámetro id del Mesero');
        }
        $mesero = $this->Mesero->findById($idMesero);
        if(!$mesero){
            throw new NotFoundException('No existe un mesero con ese id');
        }


        if($this->request->is(array('post','put'))){
            //se ha llegado a través de una petición de un formulario      
            $this->Mesero->id = $idMesero; // le establecemos el id y luego intentamos guardar    
            if($this->Mesero->save($this->request->data)){
                $this->Session->setFlash('Meser@ grabad@ correctamente','default',
                        array('class'=>'success')
                    );
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('No se pudieron guardar los datos');
            }
        }else{            
             $this->request->data = $mesero;
             //$this->set('mesero',$mesero); //con la linea anterior, ya rellena automaticamente el formulario de editar. Sin hacer esto y luego rellenar con los datos de este atributo...
           
        }
    }

    public function eliminar($idMesero = null){
        //comprobaciones
        if($this->request->is('get')){
            throw new MethodNotAllowedException('No Permitido');
        }
        if(!$idMesero){
            throw new NotFoundException('Falta parámetro id del Mesero');
        }
        //borrado
        if($this->Mesero->delete($idMesero)){
            $this->Session->setFlash('Mesero eliminado correctamente','default',array('class'=>'success'));
        }else{
            $this->Session->setFlash('No se pudo eliminar el mesero');
        }
        $this->redirect(array('action'=>'index'));
    }
}
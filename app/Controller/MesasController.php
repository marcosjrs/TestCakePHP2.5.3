<?php
class MesasController extends AppController{

    public $helpers = array('Html','Form','Time');
    public $components = array('Session');

    public function index(){
        $this->set('mesas',$this->Mesa->find('all'));
    }

    public function crear(){
        if($this->request->is('post')){
            //se ha llegado a través de una petición de un formulario
            //$this->Mesa->create();
            if($this->Mesa->save($this->request->data)){
                $this->Session->setFlash('Mesa guardada correctamente','default',
                        array('class'=>'success')
                    );
                $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('No se pudieron guardar los datos');
        }
        $this->set('meseros',$this->Mesa->Mesero->find('list'));
    }
}
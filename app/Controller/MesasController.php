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
        //Ejecutará SELECT `Mesero`.`id`, 
       // (CONCAT (`Mesero`.`nombre`, " ", `Mesero`.`apellido`)) AS `Mesero__nombre_completo` 
       // FROM `restaurante`.`meseros` AS `Mesero` WHERE 1 = 1
       //Para esto se añadió en Mesero.php : public $virtualFields = array('nombre_completo' => 'CONCAT (Mesero.nombre, " ", Mesero.apellido)');
     
       $this->set('meseros',
            $this->Mesa->Mesero->find(
                'list', 
                 array('fields'=>array('id','nombre_completo')) 
            )
        );
        //La forma simple de pasar todos los ids sería:  $this->set('meseros',$this->Mesa->Mesero->find('list'));
        //Al tener en la vista:  echo $this->Form->input('mesero_id');  generaba un selector de ids, pero poco intuitivos
    }
}
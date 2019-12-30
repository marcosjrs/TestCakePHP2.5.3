<?php
class MesasController extends AppController{

    public $helpers = array('Html','Form','Time');
    public $components = array('Session');

    public function index(){
        $this->set('mesas',$this->Mesa->find('all'));
    }
}
<h3>Crear Mesa</h3>

<?php
    echo $this->Form->create('Mesa');
    echo $this->Form->input('serie');
    echo $this->Form->input('puestos');
    echo $this->Form->input('posicion', array('rows'=>3));
    // en el controlador se estableció $this->set('meseros',$this->Mesa->Mesero->find('list'));
    echo $this->Form->input('mesero_id'); //mostraría una select option solo con los ids de los meseros
    echo $this->Form->end('Crear Mesa'); //Submit con value Crear Mesa y termina Form
    //La validadión se integra en el Modelo (Mesa.php, en este caso)
?>
<h3>Crear Meser@</h3>

<?php
    echo $this->Form->create('Mesero');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellido');
    echo $this->Form->input('dni');
    echo $this->Form->input('telefono');
    echo $this->Form->end('Crear Mesero'); //Submit con value Crear Mesero y termina Form
    //La validadión se integra en el Modelo (Mesero.php, en este caso)
?>
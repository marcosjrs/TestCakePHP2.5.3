<h3>Guardar Mesa</h3>
<?php
echo $this->Form->create('Mesa');
echo $this->Form->input('serie');
echo $this->Form->input('puestos');
echo $this->Form->input('posicion');
echo $this->Form->input('mesero_id');
echo $this->Form->end('Guardar');
?>
<?php echo $this->Html->link('Volver a Listado de Mesas',array("controller"=>"mesas","action"=>"index"));?>
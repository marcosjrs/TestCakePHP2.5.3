<h2>Detalle Meser@</h2>
<p>Nombre: <?php echo $mesero['Mesero']['nombre'] ;?> </p>
<p>DNI: <?php echo $mesero['Mesero']['dni'] ;?> </p>
<p>Teléfono: <?php echo $mesero['Mesero']['telefono'] ;?> </p>
<p>Fecha de alta: <?php echo $mesero['Mesero']['created'] ;?> </p>
<?php echo $this->Html->link("Volver a Listado", array('controller'=>'meseros', 'action'=>'index'))  ?>

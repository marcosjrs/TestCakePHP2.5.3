<h3>Detalle Meser@</h3>
<h4>Datos Personales</h4>
<div class="datos-mesero">
    <div>Nombre: <?php echo $mesero['Mesero']['nombre']; ?> </div>
    <div>DNI: <?php echo $mesero['Mesero']['dni']; ?> </div>
    <div>Teléfono: <?php echo $mesero['Mesero']['telefono']; ?> </div>
    <div>Fecha de alta: <?php echo $this->Time->format('d/m/y h:i A', $mesero['Mesero']['created']); ?> </div>
    <div>Última modificación: <?php echo $this->Time->format('d/m/y h:i A', $mesero['Mesero']['modified']); ?> </div>
</div>

<h4>Mesas Asignadas</h4>
<?php
if (empty($mesero['Mesa'])) {
    echo "No tiene mesas asociadas";
} else {
    foreach ($mesero['Mesa'] as $mesa) {
        echo "<div class='datos-mesa'>";
        echo "Id:".$mesa["id"]."<br/>";
        echo "Serie:".$mesa["serie"]."<br/>";
        echo "Puestos:".$mesa["puestos"]."<br/>";
        echo "Posicion:".$mesa["posicion"]."<br/>";
        echo "Fecha creación:".$mesa["created"]."<br/>";
        echo "</div>";
    }
}
?>
<?php echo $this->Html->link("Volver a Listado", array('controller' => 'meseros', 'action' => 'index'));  ?>
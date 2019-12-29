<h1>Listado de Meseros</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Acciones</td>
    </tr>

    <?php
    foreach($meseros as $mesero):
    ?>
    <tr>
        <?php echo '<td>'.$mesero['Mesero']['id'].'</td>'; ?>
        <?php echo '<td>'.$mesero['Mesero']['nombre'].'</td>'; ?>
        <?php echo '<td>'.$mesero['Mesero']['apellido'].'</td>'; ?>
        <?php echo '<td>'.$this->Html->link('Detalle', array('controller'=>'meseros','action'=>'detalle',$mesero['Mesero']['id'])).'</td>'; ?>
    </tr>
    <?php    
    endforeach;
    ?>
</table>
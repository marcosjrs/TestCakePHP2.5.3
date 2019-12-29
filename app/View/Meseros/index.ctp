<h1>Listado de Meseros</h1>
<div><?php echo $this->Html->link('Crear',array('controller'=>'meseros','action'=>'crear')) ?></div>
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
        <?php echo '<td>'.
        $this->Html->link('Detalle', array('controller'=>'meseros','action'=>'ver',$mesero['Mesero']['id'])).
        ' '.
        $this->Html->link('Editar', array('controller'=>'meseros','action'=>'editar',$mesero['Mesero']['id'])).
        ' '.
        $this->Form->postLink('Eliminar', array('controller'=>'meseros','action'=>'eliminar',$mesero['Mesero']['id'])).
        '</td>'; ?>
    </tr>
    <?php    
    endforeach;
    ?>
</table>
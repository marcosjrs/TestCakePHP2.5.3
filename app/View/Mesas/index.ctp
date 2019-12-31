<h3>Listado de Mesas</h3>
<div>
    <?php echo $this->Html->link('Crear',array('controller'=>'mesas','action'=>'crear')) ?>
    <?php echo $this->Html->link('Listado de meseros',array('controller'=>'meseros','action'=>'index')) ?>
</div>
<table>
    <tr>
        <th>Serie</th>
        <th>Puestos</th>
        <th>Posicion</th>
        <th>Fecha Creación</th>
        <th>Fecha Modificación</th>
        <th>Mesero</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($mesas as $mesa): ?>
    <tr>    
        <td><?php echo $mesa["Mesa"]["serie"]; ?></td>
        <td><?php echo $mesa["Mesa"]["puestos"]; ?></td>
        <td><?php echo $mesa["Mesa"]["posicion"]; ?></td>
        <td><?php echo $mesa["Mesa"]["created"]; ?></td>
        <td><?php echo $mesa["Mesa"]["modified"]; ?></td>
        <td>
            <?php echo $this->Html->link($mesa["Mesero"]["nombre"], array('controller' => 'meseros', 'action' => 'ver',$mesa["Mesero"]["id"])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('controller' => 'mesas', 'action' => 'editar',$mesa["Mesa"]["id"])); ?>
            <?php echo $this->Form->postLink('Eliminar', 
                        array('controller'=>'mesas','action'=>'eliminar',$mesa['Mesa']['id']),
                        array('confirm'=>'¿Seguro que quieres eliminar a '.$mesa['Mesa']['serie'].'?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
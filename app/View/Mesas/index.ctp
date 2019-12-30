<h3>Listado de Mesas</h3>
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
            <?php echo $this->Html->link('Editar', array('controller' => 'controller', 'action' => 'action')); ?>
            <?php echo $this->Html->link('Eliminar', array('controller' => 'controller', 'action' => 'action')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<h1>Registrocompras List</h1>

<table>
  <thead>
    <tr>
      <th>Idcompra</th>
      <th>Fecha</th>
      <th>Idprovee</th>
      <th>N factura</th>
      <th>Valor</th>
      <th>Remito</th>
      <th>Idempleado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($registrocompras as $registrocompra): ?>
    <tr>
      <td><a href="<?php echo url_for('compra/edit?idcompra='.$registrocompra->getIdcompra()) ?>"><?php echo $registrocompra->getIdcompra() ?></a></td>
      <td><?php echo $registrocompra->getFecha() ?></td>
      <td><?php echo $registrocompra->getIdprovee() ?></td>
      <td><?php echo $registrocompra->getNFactura() ?></td>
      <td><?php echo $registrocompra->getValor() ?></td>
      <td><?php echo $registrocompra->getRemito() ?></td>
      <td><?php echo $registrocompra->getIdempleado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('compra/new') ?>">New</a>

<h1>Productos List</h1>

<table>
  <thead>
    <tr>
      <th>Idproducto</th>
      <th>Titulo</th>
      <th>Idartista</th>
      <th>Idgenero</th>
      <th>Anio</th>
      <th>Cantidadventas</th>
      <th>Stock</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productos as $producto): ?>
    <tr>
      <td><a href="<?php echo url_for('stock/edit?idproducto='.$producto->getIdproducto()) ?>"><?php echo $producto->getIdproducto() ?></a></td>
      <td><?php echo $producto->getTitulo() ?></td>
      <td><?php echo $producto->getIdartista() ?></td>
      <td><?php echo $producto->getIdgenero() ?></td>
      <td><?php echo $producto->getAnio() ?></td>
      <td><?php echo $producto->getCantidadventas() ?></td>
      <td><?php echo $producto->getStock() ?></td>
      <td><?php echo $producto->getPrecio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('stock/new') ?>">New</a>

<h1>Clientes List</h1>

<table>
  <thead>
    <tr>
      <th>Id clie</th>
      <th>Apellido</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Id prov</th>
      <th>Id ciudad</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clientes as $cliente): ?>
    <tr>
      <td><a href="<?php echo url_for('registro/edit?id_clie='.$cliente->getIdClie()) ?>"><?php echo $cliente->getIdClie() ?></a></td>
      <td><?php echo $cliente->getApellido() ?></td>
      <td><?php echo $cliente->getNombre() ?></td>
      <td><?php echo $cliente->getTelefono() ?></td>
      <td><?php echo $cliente->getDireccion() ?></td>
      <td><?php echo $cliente->getIdProv() ?></td>
      <td><?php echo $cliente->getIdCiudad() ?></td>
      <td><?php echo $cliente->getEmail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('registro/new') ?>">New</a>

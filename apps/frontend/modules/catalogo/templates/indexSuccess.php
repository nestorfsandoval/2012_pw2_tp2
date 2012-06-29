<h3>Listado de productos</h3>

<form id="left" action="<?php echo url_for('catalogo/index') ?>" method="GET">
            <!-- ESTE INPUT OCULTO INDICA A QUE CONTENIDO DEBE MANDARLE LOS VALORES DEL FORMULARIO -->
            <input type="hidden" name="op" value="3">
            <input  class="campo" type="text" name="buscaProdu" placeholder="Ingrese Busqueda..." size="50" />
            <input class="boton"type="image" name="buscar" src="<?php echo image_path('search_4.png')?>"/>
</form>

<table>
  <thead>
    <tr>
      <th>Artista</th>
      <th>Titulo</th>
      <th>Genero</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productos as $producto): ?>
    <tr>
      <td><?php echo $producto->getIdartista() ?></td>
      <td><?php echo $producto->getTitulo() ?></td>
      <td><?php echo $producto->getIdgenero() ?></td>
      <td><?php echo '$'  .   $producto->getPrecio() ?></td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
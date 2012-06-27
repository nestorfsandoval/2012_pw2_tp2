<<<<<<< HEAD
<div class="cuerpo">
<fieldset>
        <legend>Control de Stock</legend>
        <form class="left" action="index.php" method="GET">
            <!-- ESTE INPUT OCULTO INDICA A QUE CONTENIDO DEBE MANDARLE LOS VALORES DEL FORMULARIO -->
            <input type="hidden" name="op" value="3">
            <input  class="busqueda" type="text" name="buscaProdu" placeholder="Ingrese Busqueda..." size="50" />
            <input type="image" name="buscar" src="<?php echo image_path('lupa.png')?>"/>
        </form>
        <form class="right" action="<?php echo url_for('stock/new')?>">
            <input type="submit" id="addProdu" name="nuevodisco" value="Agregar Producto"/>
        </form>
<table id="tablaStock">
    <tr class="titulos">
      <td>CODIGO</td>
      <td>TITULO</td>
      <td>INTERPRETE</td>
      <td>STOCK</th>
      <td>GENERO</td>
      <td>ACCION</td>
    </tr>
    <?php foreach ($productos as $producto): ?>
    <tr class="listado">
      <td><a href="<?php echo url_for('stock/edit?idproducto='.$producto->getIdproducto()) ?>"><?php echo $producto->getIdproducto() ?></a></td>
      <td><?php echo $producto->getTitulo() ?></td>
      <td><?php echo $producto->getArtista() ?></td>
      <td><?php echo $producto->getStock() ?></td>
      <td><?php echo $producto->getGenero() ?></td>
      <td>editar</td>
    </tr>
    <?php endforeach; ?>
</table>

  
</fieldset>	
</div>	
=======
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
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet

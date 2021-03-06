<div class="cuerpo">
<fieldset>
        <legend>Control de Stock</legend>
        <form class="left" action="<?php echo url_for('stock/index') ?>" method="GET">
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
    <?php foreach ($productos as $producto): 
     if($producto->getStock() > 15){
                            $listado='listado';
                        }else{
                            $listado='listado-deshabilitado';
                        }
                        ?>
    <tr class="<?php echo $listado?>">
      <td><?php echo $producto->getIdproducto() ?></td>
      <td><?php echo $producto->getTitulo() ?></td>
      <td><?php echo $producto->getArtista() ?></td>
      <td><?php echo $producto->getStock() ?></td>
      <td><?php echo $producto->getGenero() ?></td>
      <td><a href="<?php echo url_for('stock/edit?idproducto='.$producto->getIdproducto()) ?>"><img src="<?php echo image_path('edit.gif')?>"></a></td>
    </tr>
    <?php endforeach; ?>
</table>

  
</fieldset>	
</div>	

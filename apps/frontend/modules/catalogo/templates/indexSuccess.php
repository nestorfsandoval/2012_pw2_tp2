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
      <?php
      if($sf_user->isAuthenticated()){
        echo'<th>Comprar</th>';
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productos as $producto): ?>
    <tr>
      <td><?php echo $producto->getArtista() ?></td>
      <td><?php echo $producto->getTitulo() ?></td>
      <td><?php echo $producto->getGenero() ?></td>
      <td><?php echo '$'  .   $producto->getPrecio() ?></td> 
      <?php
      if($sf_user->isAuthenticated()){?>
      <td><a href="<?php echo url_for('catalogo/index?compra='.$producto->getIdproducto())?>"><img src="<?php echo image_path('icon_buy.png')?>"></a></td>
      <?php
      }
      ?>
    </tr>
    <?php 
    endforeach; 
    ?>    
  </tbody>
</table>
<?php
  include 'paginacion.php';
        if(isset($_GET['pag'])){
		$pagina=$_GET['pag'];
	}else{
                $pagina=1;
        }
        paginarRegistros($cantidad, 5, $pagina);
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
    <body>
        <div class="encabezado">
            <div class="izquierda">
                <?php echo image_tag("logo.png")?>
            </div>
            <div class="derecha">
                Bienvenido <?php $sf_user->getAttribute('nombre_usuario')?> | <a class="sesion" href="<?php echo url_for('bienvenido/index?logout=1')?>">Desconectar</a>	
            </div>
        </div>	
        <div class="menu">
            <a href="<?php echo url_for("bienvenido/index")?>">Inicio </a>|
            <a href="<?php echo url_for("usuarios/index")?>"> Usuarios </a>|
            <a href="<?php echo url_for("stock/index")?>"> Stock </a>|
            <a href="<?php echo url_for("compra/index")?>"> Compras </a>|
            <a href="<?php echo url_for("venta/index")?>"> Ventas</a>
        </div>
        <hr width="1080px"/>
        <!-- CUERPO -->
            <?php echo $sf_content ?>
    </body>      
</html>




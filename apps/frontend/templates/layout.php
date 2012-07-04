<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>

    <!-- more metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <!-- include base css files from plugin -->
    <?php include_partial('default/mpProjectPlugin_css_assets', array('load' => array('twitter_bootstrap'))); ?>
    <?php 
        use_javascript('jquery-1.6.2.min.js');
        use_javascript('login.js');
        include_stylesheets();
        include_javascripts();
    ?>
  </head>
  <?php require_once 'paginacion.php';?>
  <body>
    	 <!--DIV QUE CONTIENE EL ENCABEZADO-->
    <div id="todo">
    <div class="encabezado">
            <!--DIV QUE CONTIENE EL LOGO-->
        <div class="izquierda">
            <?php echo image_tag("logo", "alt=Pochola's Music") ?>
        </div>
        <div id="menu">
                    <ul>
                        <li><a href="<?php echo url_for('bienvenido/index')?>">Inicio</a></li>
                        <li><a href="<?php echo url_for('catalogo/index')?>">Catalogo</a></li>
                        <li><a href="<?php echo url_for('info/index')?>">Como comprar</a></li>
                        <li><a href="<?php echo url_for('contacto/index')?>">Contactos</a></li>
                    </ul>
                    
                <?php if ($sf_user->isAuthenticated())
                echo '<div id="loginReg">Bienvenido '.$sf_user->getAttribute('nombre_usuario').' |<a href="'.url_for('bienvenido/index').'?logout=1">Desconectar</a></div>'; 
                    else{?>
                    <form action="<?php echo url_for('bienvenido/index')?>" method="POST" id="login">
                            <label>Usuario:</label>
                            <input name="user" value="" type="text" id="user"/>
                            <label>Contrase&ntildea:</label>
                            <input name="pass" value="" type="password" id="pass"/>
                            <button><i class="loguear"></i></button>
                   </form>
                    <div id="loginReg"><a href="<?php echo url_for('registro/new');?>">Registrarse</a>|<a id="loguearse">Loguearse</div>
                    <?php 
                    echo $sf_user->getAttribute('alerta');
                    
                    } ?>
                   
        </div>
    </div>
    <!--COMIENZA CUERPO DE PAGINA-->
    <div id="cuerpo">
        <?php echo $sf_content?>
    </div>
    <div id="pie">
                 
    </div>
    </div>
    </body>
</html>

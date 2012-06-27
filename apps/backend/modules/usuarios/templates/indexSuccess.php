<div class="cuerpo">
    <!-- CONTENEDOR -->    
    <div class="contenedor">
            <fieldset>
                <legend>Usuarios de Sistema</legend>
<<<<<<< HEAD
                <form class="left"  action="<?php echo url_for('usuarios/index')?>" method="GET">     
=======
                <form class="left"  action="<?php echo url_for('usuarios/usuarios')?>" method="GET">     
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
                    <input type="hidden" name="op" value="2">
                    <input class="busqueda" type="text" name="buscaUser" placeholder="Buscar Usuario..." />
                    <input type="image" name="buscar" src="<?php echo image_path('lupa.png')?>"/>       
                </form>
<<<<<<< HEAD
                <form class="right" action="<?php echo url_for('usuarios/new')?>">
                    <input type="submit" name="nuevoUser" value="Nuevo Usuario"/>
                </form>
=======
                <a href="<?php echo url_for('usuarios/new') ?>">Nuevo Usuario</a>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
            <?php 
            echo '<table>
                    <tr class="titulos">
                        <td>Nombre</td>
                        <td>Usuario</td>
                        <td>Rango</td>
                        <td>Direccion</td>
                        <td>Acciones</td>
                    </tr>';
                    foreach($empleados as $persona):
                        echo '<tr  class="listado">
<<<<<<< HEAD
                                <td>'.$persona->getNombreCompleto().'</td>
=======
                                <td>'.$persona->getNombreCompleto().'-'.$persona->getIdEmp().'</td>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
                                <td>'.$persona->getUser().'</td>
                                <td>'.$persona->getPrivilegios().'</td>
                                <td>'.$persona->getDireccion().'</td>
                                <td><a href="'.url_for('usuarios/edit?id_emp='.$persona->getIdEmp()).'">editar</a></td>
                            </tr>';
                    endforeach;
            echo '</table>';
            ?>
            </fieldset>
        </div>        
</div>

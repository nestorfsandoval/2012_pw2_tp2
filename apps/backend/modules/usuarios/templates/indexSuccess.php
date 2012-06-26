<div class="cuerpo">
    <!-- CONTENEDOR -->    
    <div class="contenedor">
            <fieldset>
                <legend>Usuarios de Sistema</legend>
                <form class="left"  action="<?php echo url_for('usuarios/usuarios')?>" method="GET">     
                    <input type="hidden" name="op" value="2">
                    <input class="busqueda" type="text" name="buscaUser" placeholder="Buscar Usuario..." />
                    <input type="image" name="buscar" src="<?php echo image_path('lupa.png')?>"/>       
                </form>
                <a href="<?php echo url_for('usuarios/new') ?>">Nuevo Usuario</a>
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
                                <td>'.$persona->getNombreCompleto().'-'.$persona->getIdEmp().'</td>
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

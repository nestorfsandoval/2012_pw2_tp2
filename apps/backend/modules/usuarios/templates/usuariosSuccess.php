<fieldset>
    <legend>Usuarios de Sistema</legend>
    <form class="left"  action="index.php" method="GET">     
        <input type="hidden" name="op" value="2">
        <input class="busqueda" type="text" name="buscaUser" placeholder="Buscar Usuario..." />
        <input type="image" name="buscar" src="<?php echo image_path('lupa.png')?>"/>        
        
    </form>
<?php 
echo '<table>
        <tr class="titulos">
            <td>Nombre</td>
            <td>Usuario</td>
            <td>Rango</td>
            <td>Direccion</td>
            <td>Acciones</td>
        </tr>';
        foreach($empleado as $persona):
            echo '<tr>
                    <td>'.$persona->getNombreCompleto().'</td>
                    <td>'.$persona->getUser().'</td>
                    <td>'.$persona->getPrivilegios().'</td>
                    <td>'.$persona->getDireccion().'</td>
                    <td>editar</td>
                </tr>';
        endforeach;
echo '</table>';
?>
</fieldset>
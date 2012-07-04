<div class="cuerpo">
    <fieldset>
        <legend>Control de Stock</legend>
        <form class="left" action="<?php echo url_for('venta/index')?>" method="get" id="frm_btn_list">
            <input class="busqueda" type="text" name="busqueda" placeholder="Ingrese Busqueda..." />
            <label>Desde:</label>
            <input class="fecha" type="text" name="desdefecha" placeholder="dd/mm/aaaa" id="fechad"/>
            <label>Hasta:</label>
            <input class="fecha" type="text" name="hastafecha" placeholder="dd/mm/aaaa" id="fechah"/><br/>
            <input class="listar" type="submit" name="listar" value="Listar" id="btn_list"/>
        </form>
        <hr/>
        <table>
            <tr class="titulos">
                <td>PRODUCTO</td><td>PRECIO</td><td>USUARIO</td><td>FECHA PED.</td>
            </tr>
            
            <?php
            foreach ($ventas as $venta):
                echo '<tr class="listado">
                        <td>'.$venta->getProducto()->getTitulo().'</td>
                        <td>$'.$venta->getProducto()->getPrecio().'</td>
                        <td>'.$venta->getCliente()->getUser().'</td>
                        <td>'.$venta->getFecha().'</td>    
                    </tr>';
        endforeach;
            ?>
        </table>
    </fieldset>
</div>
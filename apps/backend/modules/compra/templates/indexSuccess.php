<div class="cuerpo">
	<fieldset>
		<legend>Control de Comnpras</legend>
      <form class="left" id="frm_btn_list" action="index.php?op=4" method="POST">     
        <input type="hidden" name="op" value="4">
        <input class="busqueda" type="text" name="busqueda" value="Ingrese Busqueda..." />
        <label>Desde:</label>
        <input class="fecha" id="fechad" type="text" name="desdefecha" MAXLENGTH="10" value="dd/mm/aaaa"/>
        <label>Hasta:</label>
        <input class="fecha" id="fechah" type="text" name="hastafecha" MAXLENGTH="10" value="dd/mm/aaaa"/><br/>     
        PROVEEDOR<INPUT type="radio" name="estado" value="proveedor">
        FACTURA<INPUT type="radio" name="estado" value="factura">
        MONTO<INPUT type="radio" name="estado" value="monto">
        REMITO<INPUT type="radio" name="estado" value="remito">
        <input class="listar" id="btn_list" type="submit" name="listar" value="Listar"/>
		</form>
    
		<form class="right" action="<?php echo url_for('compra/new') ?>">	
                    <input type="submit" name="nuevocompra" value="Agregar Compra" id="nuevaCompra" />
		</form>
<hr/>
	
<table>
   <tr class="titulos">
      <td>FECHA</td>
      <td>PROVEEDOR</td>
      <td>FACTURA</td>
      <td>MONTO</td>
      <td>REMITO</td>
      <td>EDITAR</td>
   </tr>
    <?php foreach ($registrocompras as $registrocompra): ?>
    <tr class="listado">
      <td><?php echo $registrocompra->getFecha() ?></td>
      <td><?php echo $registrocompra->getProveedor() ?></td>
      <td><?php echo $registrocompra->getNFactura() ?></td>
      <td><?php echo $registrocompra->getValor() ?></td>
      <td><?php echo $registrocompra->getRemito() ?></td>
      <td>editar</td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
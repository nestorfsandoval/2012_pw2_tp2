
<form method="POST" action="bienvenido/new" id="Registrarse">
    <input type="text" name="nombre">
    <input type="text" name="apellido">
    <input type="tel" name="tel">
    <input type="text" name="direccion">
        <?php
        echo new sfWidgetFormPropelChoice(array('model' => 'Ciudad', 'add_empty' => false))
        ?>
    <select name="prov">
    </select>
    <input type="text" name="email">
</form>

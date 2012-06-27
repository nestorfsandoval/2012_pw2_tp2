<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('usuarios/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_emp='.$form->getObject()->getIdEmp() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
<<<<<<< HEAD
          &nbsp;<a href="<?php echo url_for('usuarios/index') ?>">Volver</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'usuarios/delete?id_emp='.$form->getObject()->getIdEmp(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
=======
          &nbsp;<a href="<?php echo url_for('usuarios/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'usuarios/delete?id_emp='.$form->getObject()->getIdEmp(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['apellido']->renderLabel('Apellido') ?></th>
=======
        <th><?php echo $form['apellido']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['apellido']->renderError() ?>
          <?php echo $form['apellido'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['nombre']->renderLabel('Nombre') ?></th>
=======
        <th><?php echo $form['nombre']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['user']->renderLabel('Usuario') ?></th>
=======
        <th><?php echo $form['user']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['user']->renderError() ?>
          <?php echo $form['user'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['pass']->renderLabel('Contrase&ntilde;a') ?></th>
=======
        <th><?php echo $form['pass']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['pass']->renderError() ?>
          <?php echo $form['pass'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['mail']->renderLabel('Email') ?></th>
=======
        <th><?php echo $form['mail']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['mail']->renderError() ?>
          <?php echo $form['mail'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['id_ciudad']->renderLabel('Ciudad') ?></th>
=======
        <th><?php echo $form['id_ciudad']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['id_ciudad']->renderError() ?>
          <?php echo $form['id_ciudad'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['id_prov']->renderLabel('Provincia') ?></th>
=======
        <th><?php echo $form['id_prov']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['id_prov']->renderError() ?>
          <?php echo $form['id_prov'] ?>
        </td>
      </tr>
      <tr>
<<<<<<< HEAD
        <th><?php echo $form['idprivilegio']->renderLabel('Privilegio') ?></th>
=======
        <th><?php echo $form['idprivilegio']->renderLabel() ?></th>
>>>>>>> eedbe7e... acutalizacion de stock,compras en intranet
        <td>
          <?php echo $form['idprivilegio']->renderError() ?>
          <?php echo $form['idprivilegio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['habilitado']->renderLabel() ?></th>
        <td>
          <?php echo $form['habilitado']->renderError() ?>
          <?php echo $form['habilitado'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

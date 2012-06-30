<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('compra/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idcompra='.$form->getObject()->getIdcompra() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('compra/index') ?>">Volver</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'compra/delete?idcompra='.$form->getObject()->getIdcompra(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['idprovee']->renderLabel() ?></th>
        <td>
          <?php echo $form['idprovee']->renderError() ?>
          <?php echo $form['idprovee'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['n_factura']->renderLabel() ?></th>
        <td>
          <?php echo $form['n_factura']->renderError() ?>
          <?php echo $form['n_factura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['valor']->renderLabel() ?></th>
        <td>
          <?php echo $form['valor']->renderError() ?>
          <?php echo $form['valor'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['remito']->renderLabel() ?></th>
        <td>
          <?php echo $form['remito']->renderError() ?>
          <?php echo $form['remito'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

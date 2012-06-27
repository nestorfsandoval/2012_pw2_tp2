<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('stock/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idproducto='.$form->getObject()->getIdproducto() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('stock/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'stock/delete?idproducto='.$form->getObject()->getIdproducto(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['idartista']->renderLabel() ?></th>
        <td>
          <?php echo $form['idartista']->renderError() ?>
          <?php echo $form['idartista'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['idgenero']->renderLabel() ?></th>
        <td>
          <?php echo $form['idgenero']->renderError() ?>
          <?php echo $form['idgenero'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['anio']->renderLabel() ?></th>
        <td>
          <?php echo $form['anio']->renderError() ?>
          <?php echo $form['anio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ventas']->renderLabel() ?></th>
        <td>
          <?php echo $form['ventas']->renderError() ?>
          <?php echo $form['ventas'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['stock']->renderLabel() ?></th>
        <td>
          <?php echo $form['stock']->renderError() ?>
          <?php echo $form['stock'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['precio']->renderLabel() ?></th>
        <td>
          <?php echo $form['precio']->renderError() ?>
          <?php echo $form['precio'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

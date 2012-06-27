 <head>
  <style>
    .contact-form li { list-style: none; margin-bottom: 10px; }
    .error_list { padding: 0px; }
    .error_list li { background-color: red; color: white; font-weight: bold; padding: 3px;}
  </style>
  </head>
  <?php echo $form->renderFormTag(url_for('contacto/index')); ?>
  <?php echo $form->renderGlobalErrors(); ?>
  <?php echo $form->renderHiddenFields(); ?>
  <ul class="contact-form form">
  <?php foreach($form->camposVisibles() as $nombre => $campo): ?>
    <li>
      <?php echo $campo->renderError(); ?>
      <?php echo $campo->renderLabel(); ?>
      <div class="value"><?php echo $campo->render(); ?>
      <span class="help"><?php echo $campo->renderHelp(); ?></span></div>
    </li>
  <?php endforeach; ?>
    <li><input type="submit" value="Enviar formulario de contacto" /></li>
  </ul>
<?php

/**
 * Base project form.
 * 
 * @package    tp2
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class BaseForm extends mpForm
{
  
   public function camposVisibles()
  {
    $campos_ocultos = $this->getFormFieldSchema()->getHiddenFields();
    $campos = array();
    foreach($this as $nombre => $campo)
    {
      if (!in_array($campo, $campos_ocultos))
        $campos[$nombre] = $campo;
    }
    return $campos;
  }
  
}

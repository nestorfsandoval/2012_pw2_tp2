<?php

/**
 * Proveedor form base class.
 *
 * @method Proveedor getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProveedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idproveedor' => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idproveedor' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdproveedor()), 'empty_value' => $this->getObject()->getIdproveedor(), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Proveedor', 'column' => array('idproveedor')))
    );

    $this->widgetSchema->setNameFormat('proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proveedor';
  }


}

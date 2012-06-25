<?php

/**
 * Registrocompra form base class.
 *
 * @method Registrocompra getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRegistrocompraForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcompra'   => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDate(),
      'idprovee'   => new sfWidgetFormPropelChoice(array('model' => 'Proveedor', 'add_empty' => false)),
      'n_factura'  => new sfWidgetFormInputText(),
      'valor'      => new sfWidgetFormInputText(),
      'remito'     => new sfWidgetFormInputText(),
      'idempleado' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcompra'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdcompra()), 'empty_value' => $this->getObject()->getIdcompra(), 'required' => false)),
      'fecha'      => new sfValidatorDate(),
      'idprovee'   => new sfValidatorPropelChoice(array('model' => 'Proveedor', 'column' => 'idproveedor')),
      'n_factura'  => new sfValidatorString(array('max_length' => 45)),
      'valor'      => new sfValidatorNumber(),
      'remito'     => new sfValidatorString(array('max_length' => 45)),
      'idempleado' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Registrocompra', 'column' => array('idcompra')))
    );

    $this->widgetSchema->setNameFormat('registrocompra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registrocompra';
  }


}

<?php

/**
 * Venta form base class.
 *
 * @method Venta getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVentaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idventa'    => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDate(),
      'idcliente'  => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => false)),
      'idproducto' => new sfWidgetFormPropelChoice(array('model' => 'Producto', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idventa'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdventa()), 'empty_value' => $this->getObject()->getIdventa(), 'required' => false)),
      'fecha'      => new sfValidatorDate(),
      'idcliente'  => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id_clie')),
      'idproducto' => new sfValidatorPropelChoice(array('model' => 'Producto', 'column' => 'idproducto')),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Venta', 'column' => array('idventa')))
    );

    $this->widgetSchema->setNameFormat('venta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Venta';
  }


}

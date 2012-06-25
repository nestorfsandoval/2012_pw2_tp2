<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProductoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idproducto' => new sfWidgetFormInputHidden(),
      'titulo'     => new sfWidgetFormInputText(),
      'idartista'  => new sfWidgetFormPropelChoice(array('model' => 'Artista', 'add_empty' => false)),
      'idgenero'   => new sfWidgetFormPropelChoice(array('model' => 'Genero', 'add_empty' => false)),
      'anio'       => new sfWidgetFormInputText(),
      'ventas'     => new sfWidgetFormInputText(),
      'stock'      => new sfWidgetFormInputText(),
      'precio'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idproducto' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdproducto()), 'empty_value' => $this->getObject()->getIdproducto(), 'required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 100)),
      'idartista'  => new sfValidatorPropelChoice(array('model' => 'Artista', 'column' => 'idartista')),
      'idgenero'   => new sfValidatorPropelChoice(array('model' => 'Genero', 'column' => 'idgenero')),
      'anio'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'ventas'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'stock'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'precio'     => new sfValidatorNumber(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Producto', 'column' => array('idproducto')))
    );

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }


}

<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_clie'   => new sfWidgetFormInputHidden(),
      'apellido'  => new sfWidgetFormInputText(),
      'nombre'    => new sfWidgetFormInputText(),
      'telefono'  => new sfWidgetFormInputText(),
      'direccion' => new sfWidgetFormInputText(),
      'id_prov'   => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => false, 'key_method' => 'getIdProvincia')),
      'id_ciudad' => new sfWidgetFormPropelChoice(array('model' => 'Ciudad', 'add_empty' => false)),
      'email'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_clie'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdClie()), 'empty_value' => $this->getObject()->getIdClie(), 'required' => false)),
      'apellido'  => new sfValidatorString(array('max_length' => 100)),
      'nombre'    => new sfValidatorString(array('max_length' => 100)),
      'telefono'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion' => new sfValidatorString(array('max_length' => 150)),
      'id_prov'   => new sfValidatorPropelChoice(array('model' => 'Ciudad', 'column' => 'id_provincia')),
      'id_ciudad' => new sfValidatorPropelChoice(array('model' => 'Ciudad', 'column' => 'idciudad')),
      //'email'     => new sfValidatorString(array('max_length' => 100)),
      'email'     => new sfValidatorEmail(array('required' => true) , array('required'=> 'Se requiere una direccion de e-mail')),
    ));
    
    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Cliente', 'column' => array('id_clie')))
    );

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }


}

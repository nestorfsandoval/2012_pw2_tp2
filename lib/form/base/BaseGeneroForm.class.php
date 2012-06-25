<?php

/**
 * Genero form base class.
 *
 * @method Genero getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGeneroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idgenero'    => new sfWidgetFormInputHidden(),
      'tipo'        => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'idgenero'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdgenero()), 'empty_value' => $this->getObject()->getIdgenero(), 'required' => false)),
      'tipo'        => new sfValidatorString(array('max_length' => 100)),
      'descripcion' => new sfValidatorString(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Genero', 'column' => array('idgenero'))),
        new sfValidatorPropelUnique(array('model' => 'Genero', 'column' => array('tipo'))),
      ))
    );

    $this->widgetSchema->setNameFormat('genero[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Genero';
  }


}

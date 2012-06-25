<?php

/**
 * Provincia form base class.
 *
 * @method Provincia getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProvinciaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idprovincia' => new sfWidgetFormInputHidden(),
      'provincia'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idprovincia' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdprovincia()), 'empty_value' => $this->getObject()->getIdprovincia(), 'required' => false)),
      'provincia'   => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Provincia', 'column' => array('idprovincia')))
    );

    $this->widgetSchema->setNameFormat('provincia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Provincia';
  }


}

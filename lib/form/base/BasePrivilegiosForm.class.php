<?php

/**
 * Privilegios form base class.
 *
 * @method Privilegios getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePrivilegiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idprivilegios' => new sfWidgetFormInputHidden(),
      'descripcion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idprivilegios' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdprivilegios()), 'empty_value' => $this->getObject()->getIdprivilegios(), 'required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Privilegios', 'column' => array('idprivilegios')))
    );

    $this->widgetSchema->setNameFormat('privilegios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Privilegios';
  }


}

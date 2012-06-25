<?php

/**
 * Ciudad form base class.
 *
 * @method Ciudad getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCiudadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idciudad'     => new sfWidgetFormInputHidden(),
      'id_provincia' => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => false)),
      'nomCiudad'    => new sfWidgetFormInputText(),
      'cp'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idciudad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdciudad()), 'empty_value' => $this->getObject()->getIdciudad(), 'required' => false)),
      'id_provincia' => new sfValidatorPropelChoice(array('model' => 'Provincia', 'column' => 'idprovincia')),
      'nomCiudad'    => new sfValidatorString(array('max_length' => 100)),
      'cp'           => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Ciudad', 'column' => array('idciudad')))
    );

    $this->widgetSchema->setNameFormat('ciudad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ciudad';
  }


}

<?php

/**
 * Artista form base class.
 *
 * @method Artista getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArtistaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idartista' => new sfWidgetFormInputHidden(),
      'nombre'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idartista' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdartista()), 'empty_value' => $this->getObject()->getIdartista(), 'required' => false)),
      'nombre'    => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Artista', 'column' => array('idartista'))),
        new sfValidatorPropelUnique(array('model' => 'Artista', 'column' => array('nombre'))),
      ))
    );

    $this->widgetSchema->setNameFormat('artista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artista';
  }


}

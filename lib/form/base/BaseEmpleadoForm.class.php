<?php

/**
 * Empleado form base class.
 *
 * @method Empleado getObject() Returns the current form's model object
 *
 * @package    tp2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpleadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_emp'       => new sfWidgetFormInputHidden(),
      'apellido'     => new sfWidgetFormInputText(),
      'nombre'       => new sfWidgetFormInputText(),
      'user'         => new sfWidgetFormInputText(),
      'mail'         => new sfWidgetFormInputText(),
      'id_ciudad'    => new sfWidgetFormPropelChoice(array('model' => 'Ciudad', 'add_empty' => false)),
      'id_prov'      => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => false, 'key_method' => 'getIdProvincia')),
      'idprivilegio' => new sfWidgetFormPropelChoice(array('model' => 'Privilegios', 'add_empty' => false)),
      'habilitado'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_emp'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEmp()), 'empty_value' => $this->getObject()->getIdEmp(), 'required' => false)),
      'apellido'     => new sfValidatorString(array('max_length' => 100)),
      'nombre'       => new sfValidatorString(array('max_length' => 100)),
      'user'         => new sfValidatorString(array('max_length' => 100)),
      'mail'         => new sfValidatorString(array('max_length' => 100)),
      'id_ciudad'    => new sfValidatorPropelChoice(array('model' => 'Ciudad', 'column' => 'idciudad')),
      'id_prov'      => new sfValidatorPropelChoice(array('model' => 'Ciudad', 'column' => 'id_provincia')),
      'idprivilegio' => new sfValidatorPropelChoice(array('model' => 'Privilegios', 'column' => 'idprivilegios')),
      'habilitado'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Empleado', 'column' => array('mail'))),
        new sfValidatorPropelUnique(array('model' => 'Empleado', 'column' => array('id_emp'))),
      ))
    );

    $this->widgetSchema->setNameFormat('empleado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }


}

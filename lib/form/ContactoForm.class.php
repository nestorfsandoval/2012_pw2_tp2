<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ContactoForm extends BaseForm
{
  public function setup()
  {
  
    $this->widgetSchema->setNameFormat('contacto[%s]');
 
    $this->setWidget('nombre', new sfWidgetFormInput());
    $this->setValidator('nombre', new sfValidatorString(array('required' => true), array('required'=> 'Se requiere ingresar un nombre')));
 
    $this->setWidget('email', new sfWidgetFormInput());
    $this->setValidator('email', new sfValidatorEmail(array('required' => true) , array('required'=> 'Se requiere una direccion de e-mail')));
 
    $this->setWidget('comentario', new sfWidgetFormTextarea());
    $this->setValidator('comentario', new sfValidatorString(array('required' => true) , array('required'=> 'Se requiere un comentario')));
 
    parent::setup();
  }
}



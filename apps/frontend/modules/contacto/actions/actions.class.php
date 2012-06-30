<?php

/**
 * contacto actions.
 *
 * @package    tp2
 * @subpackage contacto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new ContactoForm();
    if ($request->hasParameter('contacto'))
    {
      
      $this->form->bind($request->getParameter('contacto'));
 
      if ($this->form->isValid())
      {
        $values = $this->form->getValues();
        $text_msg = 'Recibiste un mensaje!'."\r\n\r\n";
        $html_msg = 'Recibiste un mensaje!<br /><br />';
        foreach($values as $name => $value)
        {
          $text_msg .= $name.':'."\r\n".$value."\r\n\r\n";
          $html_msg .= $name.':<br />'.$value.'<br /><br />';
        }
        $text_msg .'Gracias!';
        $html_msg .'Gracias!';
 
        $from = array('contacto@pocholas.com' => 'Formulario Contacto Pochola');
        $to = array('luis.arrix@gmail.com');
 
        $message = $this->getMailer()->compose($from, $to, 'Formulario de contacto');
        $message->setBody($html_msg, 'text/html');
        $message->addPart($text_msg, 'text/plain');
        $this->getMailer()->send($message);
 
        $this->getResponse()->setTitle('Gracias por contactarnos');
        return 'Gracias';
      }
    }
    $this->getResponse()->setTitle('Contactanos');
    return 'Success';

    //$this->forward('default', 'module');
        
  }
}

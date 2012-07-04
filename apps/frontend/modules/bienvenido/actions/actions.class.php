<?php

/**
 * bienvenido actions.
 *
 * @package    tp2
 * @subpackage bienvenido
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bienvenidoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      if(($usuario=$request->getParameter('user'))&&($pass=$request->getParameter('pass'))){
          
          $this->getUser()->IniciarSesion($usuario,md5($pass));
          return $this->redirect('http://localhost/2012pw2tp2/backend_dev.php');

      }
      
      if($request->getParameter('logout')){
          $this->getUser()->cerrarSesion();
      }
    
  }
  
}
